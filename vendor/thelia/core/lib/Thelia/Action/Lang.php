<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Thelia\Action;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Filesystem\Filesystem;
use Thelia\Core\Event\Lang\LangCreateEvent;
use Thelia\Core\Event\Lang\LangDefaultBehaviorEvent;
use Thelia\Core\Event\Lang\LangDeleteEvent;
use Thelia\Core\Event\Lang\LangEvent;
use Thelia\Core\Event\Lang\LangToggleDefaultEvent;
use Thelia\Core\Event\Lang\LangUpdateEvent;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Core\HttpFoundation\Request;
use Thelia\Core\Template\TemplateHelperInterface;
use Thelia\Core\Translation\Translator;
use Thelia\Form\Lang\LangUrlEvent;
use Thelia\Model\ConfigQuery;
use Thelia\Model\LangQuery;
use Thelia\Model\Lang as LangModel;

/**
 * Class Lang
 * @package Thelia\Action
 * @author Manuel Raynaud <manu@raynaud.io>
 */
class Lang extends BaseAction implements EventSubscriberInterface
{
    /** @var TemplateHelperInterface  */
    protected $templateHelper;

    /** @var  Request */
    protected $request;

    public function __construct(TemplateHelperInterface $templateHelper, Request $request)
    {
        $this->templateHelper = $templateHelper;
        $this->request = $request;
    }

    public function update(LangUpdateEvent $event)
    {
        if (null !== $lang = LangQuery::create()->findPk($event->getId())) {
            $lang->setDispatcher($event->getDispatcher());

            $lang->setTitle($event->getTitle())
                ->setLocale($event->getLocale())
                ->setCode($event->getCode())
                ->setDateFormat($event->getDateFormat())
                ->setTimeFormat($event->getTimeFormat())
                ->setDecimalSeparator($event->getDecimalSeparator())
                ->setThousandsSeparator($event->getThousandsSeparator())
                ->setDecimals($event->getDecimals())
                ->save();

            $event->setLang($lang);
        }
    }

    public function toggleDefault(LangToggleDefaultEvent $event)
    {
        if (null !== $lang = LangQuery::create()->findPk($event->getLangId())) {
            $lang->setDispatcher($event->getDispatcher());

            $lang->toggleDefault();

            $event->setLang($lang);
        }
    }

    public function create(LangCreateEvent $event)
    {
        $lang = new LangModel();

        $lang
            ->setDispatcher($event->getDispatcher())
            ->setTitle($event->getTitle())
            ->setCode($event->getCode())
            ->setLocale($event->getLocale())
            ->setDateFormat($event->getDateFormat())
            ->setTimeFormat($event->getTimeFormat())
            ->setDecimalSeparator($event->getDecimalSeparator())
            ->setThousandsSeparator($event->getThousandsSeparator())
            ->setDecimals($event->getDecimals())
            ->save();

        $event->setLang($lang);
    }

    public function delete(LangDeleteEvent $event)
    {
        if (null !== $lang = LangQuery::create()->findPk($event->getLangId())) {
            if ($lang->getByDefault()) {
                throw new \RuntimeException(
                    Translator::getInstance()->trans('It is not allowed to delete the default language')
                );
            }

            $lang->setDispatcher($event->getDispatcher())
                ->delete();

            $session = $this->request->getSession();

            // If we've just deleted the current admin edition language, set it to the default one.
            if ($lang->getId() == $session->getAdminEditionLang()->getId()) {
                $session->setAdminEditionLang(LangModel::getDefaultLanguage());
            }

            // If we've just deleted the current admin language, set it to the default one.
            if ($lang->getId() == $session->getLang()->getId()) {
                $session->setLang(LangModel::getDefaultLanguage());
            }

            $event->setLang($lang);
        }
    }

    public function defaultBehavior(LangDefaultBehaviorEvent $event)
    {
        ConfigQuery::create()
            ->filterByName('default_lang_without_translation')
            ->update(array('Value' => $event->getDefaultBehavior()));
    }

    public function langUrl(LangUrlEvent $event)
    {
        foreach ($event->getUrl() as $id => $url) {
            LangQuery::create()
                ->filterById($id)
                ->update(array('Url' => $url));
        }
    }

    public function fixMissingFlag(LangEvent $event)
    {
        // Be sure that a lang have a flag, otherwise copy the
        // "unknown" flag
        $adminTemplate = $this->templateHelper->getActiveAdminTemplate();
        $unknownFlag = ConfigQuery::getUnknownFlagPath();

        $unknownFlagPath = $adminTemplate->getAbsolutePath().DS.$unknownFlag;

        if (! file_exists($unknownFlagPath)) {
            throw new \RuntimeException(
                Translator::getInstance()->trans(
                    "The image which replaces an undefined country flag (%file) was not found. Please check unknown-flag-path configuration variable, and check that the image exists.",
                    array("%file" => $unknownFlag)
                )
            );
        }

        // Check if the country flag exists
        $countryFlag = rtrim(dirname($unknownFlagPath), DS).DS.$event->getLang()->getCode().'.png';

        if (! file_exists($countryFlag)) {
            $fs = new Filesystem();

            $fs->copy($unknownFlagPath, $countryFlag);
        }
    }

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     *
     * @api
     */
    public static function getSubscribedEvents()
    {
        return array(
            TheliaEvents::LANG_UPDATE => array('update', 128),
            TheliaEvents::LANG_TOGGLEDEFAULT => array('toggleDefault', 128),
            TheliaEvents::LANG_CREATE => array('create', 128),
            TheliaEvents::LANG_DELETE => array('delete', 128),
            TheliaEvents::LANG_DEFAULTBEHAVIOR => array('defaultBehavior', 128),
            TheliaEvents::LANG_URL => array('langUrl', 128),
            TheliaEvents::LANG_FIX_MISSING_FLAG => array('fixMissingFlag', 128)
        );
    }
}
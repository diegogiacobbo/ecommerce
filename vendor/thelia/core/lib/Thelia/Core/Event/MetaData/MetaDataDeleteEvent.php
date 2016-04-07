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

namespace Thelia\Core\Event\MetaData;

/**
 * Class MetaDataCreateOrUpdateEvent
 * @package Thelia\Core\Event\MetaData
 * @author  Julien Chanséaume <jchanseaume@openstudio.fr>
 */
class MetaDataDeleteEvent extends MetaDataEvent
{
    protected $metaKey = null;
    protected $elementKey = null;
    protected $elementId = null;

    public function __construct($metaKey = null, $elementKey = null, $elementId = null)
    {
        parent::__construct();

        $this->metaKey    = $metaKey;
        $this->elementKey = $elementKey;
        $this->elementId  = $elementId;
    }

    /**
     * @param string $metaKey
     *
     * @return $this
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * @param $elementKey
     *
     * @return $this
     */
    public function setElementKey($elementKey)
    {
        $this->elementKey = $elementKey;

        return $this;
    }

    /**
     * @return null
     */
    public function getElementKey()
    {
        return $this->elementKey;
    }

    /**
     * @param int $elementId
     *
     * @return $this
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;

        return $this;
    }

    /**
     * @return int
     */
    public function getElementId()
    {
        return $this->elementId;
    }
}

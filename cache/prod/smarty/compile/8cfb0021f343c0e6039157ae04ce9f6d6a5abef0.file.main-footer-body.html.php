<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-02-27 10:18:39
         compiled from "/var/www/html/shopfacilrs/3/local/modules/HookSocial/templates/frontOffice/default/main-footer-body.html" */ ?>
<?php /*%%SmartyHeaderCode:31425437556d1a22faecca2-64588453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cfb0021f343c0e6039157ae04ce9f6d6a5abef0' => 
    array (
      0 => '/var/www/html/shopfacilrs/3/local/modules/HookSocial/templates/frontOffice/default/main-footer-body.html',
      1 => 1452176183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31425437556d1a22faecca2-64588453',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56d1a22fcf0008_21772309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1a22fcf0008_21772309')) {function content_56d1a22fcf0008_21772309($_smarty_tpl) {?><ul role="presentation">
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_facebook"),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php if ($_tmp20) {?>
    <li>
        <a href="http://facebook.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_facebook"),$_smarty_tpl);?>
" rel="nofollow" class="facebook" data-toggle="tooltip" data-placement="top"
           title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Facebook",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
" target="_blank">
            <span class="fa-stack fa-lg">
                <span class="fa fa-circle fa-stack-2x"></span>
                <span class="fa fa-facebook fa-stack-1x fa-inverse"></span>
            </span>
            <span class="visible-print"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Facebook",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
</span>
        </a>
    </li>
    <?php }?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_twitter"),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php if ($_tmp21) {?>
    <li>
        <a href="https://twitter.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_twitter"),$_smarty_tpl);?>
" rel="nofollow" class="twitter" data-toggle="tooltip" data-placement="top"
           title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Twitter",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
" target="_blank">
            <span class="fa-stack fa-lg">
                <span class="fa fa-circle fa-stack-2x"></span>
                <span class="fa fa-twitter fa-stack-1x fa-inverse"></span>
            </span>
            <span class="visible-print"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Twitter",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
</span>
        </a>
    </li>
    <?php }?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_pinterest"),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php if ($_tmp22) {?>
    <li>
        <a href="https://www.pinterest.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_pinterest"),$_smarty_tpl);?>
" class="pinterest" rel="nofollow" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Pinterest",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
"
        target="_blank">
            <span class="fa-stack fa-lg">
                <span class="fa fa-circle fa-stack-2x"></span>
                <span class="fa fa-pinterest fa-stack-1x fa-inverse"></span>
            </span>
            <span class="visible-print"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Pinterest",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
</span>
        </a>
    </li>
    <?php }?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_instagram"),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php if ($_tmp23) {?>
    <li>
        <a href="http://instagram.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_instagram"),$_smarty_tpl);?>
" rel="nofollow" class="instagram" data-toggle="tooltip" data-placement="top"
           title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Instagram",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
" target="_blank">
            <span class="fa-stack fa-lg">
                <span class="fa fa-circle fa-stack-2x"></span>
                <span class="fa fa-instagram fa-stack-1x fa-inverse"></span>
            </span>
            <span class="visible-print"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Instagram",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
</span>
        </a>
    </li>
    <?php }?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_google"),$_smarty_tpl);?>
<?php $_tmp24=ob_get_clean();?><?php if ($_tmp24) {?>
    <li>
        <a href="http://plus.google.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_google"),$_smarty_tpl);?>
" rel="nofollow" class="google-plus" data-toggle="tooltip" data-placement="top"
           title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Google+",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
" target="_blank">
            <span class="fa-stack fa-lg">
                <span class="fa fa-circle fa-stack-2x"></span>
                <span class="fa fa-google-plus fa-stack-1x fa-inverse"></span>
            </span>
            <span class="visible-print"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Google+",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
</span>
        </a>
    </li>
    <?php }?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_youtube"),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php if ($_tmp25) {?>
    <li>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_youtube"),$_smarty_tpl);?>
" rel="nofollow" class="youtube" data-toggle="tooltip" data-placement="top"
           title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Youtube",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
" target="_blank">
            <span class="fa-stack fa-lg">
                <span class="fa fa-circle fa-stack-2x"></span>
                <span class="fa fa-youtube fa-stack-1x fa-inverse"></span>
            </span>
            <span class="visible-print"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Youtube",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
</span>
        </a>
    </li>
    <?php }?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_rss"),$_smarty_tpl);?>
<?php $_tmp26=ob_get_clean();?><?php if ($_tmp26) {?>
    <li>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"hooksocial_rss"),$_smarty_tpl);?>
" class="rss" rel="nofollow" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"RSS",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
"
        target="_blank">
            <span class="fa-stack fa-lg">
                <span class="fa fa-circle fa-stack-2x"></span>
                <span class="fa fa-rss fa-stack-1x fa-inverse"></span>
            </span>
            <span class="visible-print"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"RSS",'d'=>"hooksocial.fo.default"),$_smarty_tpl);?>
</span>
        </a>
    </li>
    <?php }?>
</ul><?php }} ?>

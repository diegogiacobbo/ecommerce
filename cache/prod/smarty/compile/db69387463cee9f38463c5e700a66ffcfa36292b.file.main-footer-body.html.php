<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-02-27 10:18:39
         compiled from "/var/www/html/shopfacilrs/3/local/modules/HookContact/templates/frontOffice/default/main-footer-body.html" */ ?>
<?php /*%%SmartyHeaderCode:66004245256d1a22f432152-81342501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db69387463cee9f38463c5e700a66ffcfa36292b' => 
    array (
      0 => '/var/www/html/shopfacilrs/3/local/modules/HookContact/templates/frontOffice/default/main-footer-body.html',
      1 => 1452176183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66004245256d1a22f432152-81342501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_name' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56d1a22f545459_61058558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1a22f545459_61058558')) {function content_56d1a22f545459_61058558($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/var/www/html/shopfacilrs/3/vendor/smarty/smarty/libs/plugins/function.mailto.php';
?><div itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
">
    <ul>
        <li class="contact-address">
            <address class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span class="street-address" itemprop="streetAddress"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address1"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address2"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address3"),$_smarty_tpl);?>
</span><br>
                <span class="postal-code" itemprop="postalCode"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_zipcode"),$_smarty_tpl);?>
</span>
                <span class="locality" itemprop="addressLocality">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_city"),$_smarty_tpl);?>

                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php if ($_tmp15) {?>
                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp16)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp16), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
, <span class="country-name"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp16), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php }?>
                </span>
            </address>
        </li>
        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php if ($_tmp17) {?>
        <li class="contact-phone">
            <a href="tel:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>
" class="tel" itemprop="telephone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>
</a>
        </li>
        <?php }?>
        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_email"),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php if ($_tmp18) {?>
        <li class="contact-email">
            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_email"),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php echo smarty_function_mailto(array('address'=>$_tmp19,'encode'=>"hex",'extra'=>'class="email" itemprop="email"'),$_smarty_tpl);?>

        </li>
        <?php }?>
    </ul>
</div>
<?php }} ?>

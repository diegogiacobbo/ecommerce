<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-02 17:15:01
         compiled from "/var/www/html/shopfacilrs/3/templates/backOffice/default/login.html" */ ?>
<?php /*%%SmartyHeaderCode:39944298657002845b61267-54112069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736550790686260f0ae64c6266cde4f6f314dd9f' => 
    array (
      0 => '/var/www/html/shopfacilrs/3/templates/backOffice/default/login.html',
      1 => 1452091738,
      2 => 'file',
    ),
    'ff930d32c48bbbfbc8180682c1733842a3a01a15' => 
    array (
      0 => '/var/www/html/shopfacilrs/3/templates/backOffice/default/simple-layout.tpl',
      1 => 1452091738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39944298657002845b61267-54112069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_code' => 0,
    'asset_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_570028461e1fb6_18531247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570028461e1fb6_18531247')) {function content_570028461e1fb6_18531247($_smarty_tpl) {?>






<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
">
<head>
    <meta charset="utf-8">

    <title><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Welcome'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia Back Office'),$_smarty_tpl);?>
</title>

    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/img/favicon.ico'),$_smarty_tpl);?>
" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    

    

    

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['stylesheet'][0][0]->functionStylesheet(array('file'=>'assets/css/styles.css'),$_smarty_tpl);?>
">

    

    

    

    

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.head-css",'location'=>"head_css"),$_smarty_tpl);?>


    
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/respond.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/respond.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/respond.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <![endif]-->
</head>

<body class="login-page">



    <div class="container">
        
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-content",'location'=>"before_content"),$_smarty_tpl);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/img/logo-dark.png')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/logo-dark.png'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div id="logo">
                <img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="Thelia">
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/logo-dark.png'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <p class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Welcome to Thelia administration !"),$_smarty_tpl);?>
</p>

        <div class="row">
            

    <div class="col-md-offset-3 col-md-6">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"index.top",'location'=>"index_top"),$_smarty_tpl);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.login")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/checklogin'),$_smarty_tpl);?>
" method="post" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array(),$_smarty_tpl);?>
>

            <?php if ($_smarty_tpl->tpl_vars['form_error']->value) {?><div class="alert alert-danger"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['form_error_message']->value,$_smarty_tpl);?>
</div><?php }?>

            <fieldset>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array(),$_smarty_tpl);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin'),$_smarty_tpl);?>
" /> 
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('field'=>'username')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'username'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label hidden"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control input-lg" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Username'),$_smarty_tpl);?>
" autofocus>
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'username'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('field'=>'password')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'password'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label hidden"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control input-lg" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Password'),$_smarty_tpl);?>
">
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'password'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('field'=>'remember_me')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'remember_me'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group">
                    <div class="checkbox">
                        <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
">
                            <input type="checkbox" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr']->value,$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['options']->value['checked']) {?>checked="checked"<?php }?>/> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                        </label>
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('field'=>'remember_me'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>'index'),$_smarty_tpl);?>
" class="btn btn-default btn-lg"><span class="hidden-xs glyphicon glyphicon-eye-open"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'View shop'),$_smarty_tpl);?>
</a>
                    </div>
                    <div class="btn-group or">
                        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"or"),$_smarty_tpl);?>
</span>
                    </div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary btn-lg"><span class="hidden-xs glyphicon glyphicon-off"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Login'),$_smarty_tpl);?>
</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.login"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"index.middle",'location'=>"index_middle"),$_smarty_tpl);?>

    </div>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"index.bottom",'location'=>"index_bottom"),$_smarty_tpl);?>


        </div>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-content",'location'=>"after_content"),$_smarty_tpl);?>

    </div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-footer",'location'=>"before_footer"),$_smarty_tpl);?>


<footer class="footer">
    <div class="container">
        <p class="text-center">&copy; Thelia <time datetime="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y-m-d'),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y'),$_smarty_tpl);?>
</time>
            - <a href="http://www.openstudio.fr/" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Published by OpenStudio'),$_smarty_tpl);?>
</a>
            - <a href="http://thelia.net/forum" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia support forum'),$_smarty_tpl);?>
</a>
            - <a href="http://thelia.net/modules" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia contributions'),$_smarty_tpl);?>
</a>
        </p>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.in-footer",'location'=>"in_footer"),$_smarty_tpl);?>


    </div>
</footer>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-footer",'location'=>"after_footer"),$_smarty_tpl);?>





<script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script>
    if (typeof jQuery == 'undefined') {
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/jquery.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        document.write(unescape("%3Cscript src='<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
' %3E%3C/script%3E"));
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    }
</script>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap/bootstrap.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap/bootstrap.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap/bootstrap.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>





<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>'main.footer-js','location'=>"footer_js"),$_smarty_tpl);?>



</body>
</html><?php }} ?>

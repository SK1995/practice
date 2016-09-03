<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:35:55
         compiled from "/home/you/php/practice/application/frontend/components/auth/auth.reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112826496457c7a21bbbfa76-33223568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62358d9e2e7001eff26f3c17ec2a3b7b186c5c01' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/auth/auth.reset.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112826496457c7a21bbbfa76-33223568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a21bbd1376_19240351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a21bbd1376_19240351')) {function content_57c7a21bbd1376_19240351($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<form action="<?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
password-reset/" method="post" class="js-form-validate js-auth-reset-form">
    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['mail']['label']),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_reset','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form><?php }} ?>
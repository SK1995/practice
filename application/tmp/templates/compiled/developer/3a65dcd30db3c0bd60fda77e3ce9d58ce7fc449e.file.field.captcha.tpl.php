<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:35:55
         compiled from "/home/you/php/practice/framework/frontend/components/field/field.captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154695315257c7a21bb05559-23956580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a65dcd30db3c0bd60fda77e3ce9d58ce7fc449e' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/field/field.captcha.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154695315257c7a21bb05559-23956580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a21bb2f519_70737467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a21bb2f519_70737467')) {function content_57c7a21bb2f519_70737467($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'field','template'=>"captcha-".((string)(isset($_smarty_tpl->tpl_vars_local['type']) ? $_smarty_tpl->tpl_vars_local['type']->value : null)),'captchaName'=>(isset($_smarty_tpl->tpl_vars_local['captchaName']) ? $_smarty_tpl->tpl_vars_local['captchaName']->value : null),'name'=>(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null),'label'=>(isset($_smarty_tpl->tpl_vars_local['label']) ? $_smarty_tpl->tpl_vars_local['label']->value : null)),$_smarty_tpl);?>
<?php }} ?>
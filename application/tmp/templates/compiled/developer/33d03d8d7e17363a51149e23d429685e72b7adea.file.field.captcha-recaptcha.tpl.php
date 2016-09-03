<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:35:55
         compiled from "/home/you/php/practice/framework/frontend/components/field/field.captcha-recaptcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102293373757c7a21bb36cf7-98228687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d03d8d7e17363a51149e23d429685e72b7adea' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/field/field.captcha-recaptcha.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102293373757c7a21bb36cf7-98228687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    '_uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a21bb4d807_41619909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a21bb4d807_41619909')) {function content_57c7a21bb4d807_41619909($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('field', null, 0);?>
<?php $_smarty_tpl->tpl_vars['_uid'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['id']) ? $_smarty_tpl->tpl_vars_local['id']->value : null))===null||$tmp==='' ? (($_smarty_tpl->tpl_vars['component']->value).(rand(0,'10e10'))) : $tmp), null, 0);?>

<div class="field" id="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
" data-type="recaptcha" data-lsrecaptcha-captcha-name="<?php echo (isset($_smarty_tpl->tpl_vars_local['captchaName']) ? $_smarty_tpl->tpl_vars_local['captchaName']->value : null);?>
" data-lsrecaptcha-name="<?php echo (isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null);?>
"></div>
<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
-reset">Обновить каптчу</a><br/><?php }} ?>
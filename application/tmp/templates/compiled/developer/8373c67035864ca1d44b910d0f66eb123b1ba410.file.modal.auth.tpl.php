<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:35:55
         compiled from "/home/you/php/practice/application/frontend/components/auth/modal.auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28785370157c7a21b8df996-23551975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8373c67035864ca1d44b910d0f66eb123b1ba410' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/auth/modal.auth.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28785370157c7a21b8df996-23551975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_tab_reg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a21b992634_20899699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a21b992634_20899699')) {function content_57c7a21b992634_20899699($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php if (!Config::Get('general.reg.invite')){?>
    <?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'registration','assign'=>'auth_tab_reg'),$_smarty_tpl);?>

<?php }else{ ?>
    <?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'invite','assign'=>'auth_tab_reg'),$_smarty_tpl);?>

<?php }?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.authorization'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.login.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'login'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.registration.title'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'auth.reset.title'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'reset'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'modal','title'=>$_tmp1,'options'=>array('center'=>'false'),'showFooter'=>false,'classes'=>'js-modal-default','mods'=>'auth','id'=>'modal-login','tabs'=>array('tabs'=>array(array('text'=>$_tmp2,'content'=>$_tmp3,'classes'=>'js-auth-tab-login'),array('text'=>$_tmp4,'content'=>$_smarty_tpl->tpl_vars['auth_tab_reg']->value,'classes'=>'js-auth-tab-reg'),array('text'=>$_tmp5,'content'=>$_tmp6)))),$_smarty_tpl);?>
<?php }} ?>
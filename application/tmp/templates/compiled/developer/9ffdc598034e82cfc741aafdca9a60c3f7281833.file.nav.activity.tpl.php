<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/skin/developer/navs/nav.activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17566862557c7a494df78b5-71143687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ffdc598034e82cfc741aafdca9a60c3f7281833' => 
    array (
      0 => '/home/you/php/practice/application/frontend/skin/developer/navs/nav.activity.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17566862557c7a494df78b5-71143687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a494e2d711_36545463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a494e2d711_36545463')) {function content_57c7a494e2d711_36545463($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'activity','activeItem'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value,'mods'=>'pills','items'=>array(array('name'=>'user','url'=>$_tmp1."personal/",'text'=>$_smarty_tpl->tpl_vars['aLang']->value['activity']['nav']['personal'],'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value),array('name'=>'all','url'=>$_tmp2."all/",'text'=>$_smarty_tpl->tpl_vars['aLang']->value['activity']['nav']['all']))),$_smarty_tpl);?>
<?php }} ?>
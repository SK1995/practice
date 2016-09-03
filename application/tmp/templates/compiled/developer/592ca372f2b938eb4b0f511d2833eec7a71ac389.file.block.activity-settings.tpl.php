<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/components/activity/blocks/block.activity-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178639159457c7a494c37f15-35990471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '592ca372f2b938eb4b0f511d2833eec7a71ac389' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/activity/blocks/block.activity-settings.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178639159457c7a494c37f15-35990471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typesActive' => 0,
    'types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a494c4dd92_61973128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a494c4dd92_61973128')) {function content_57c7a494c4dd92_61973128($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'activity.settings.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('../settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('typesActive'=>$_smarty_tpl->tpl_vars['typesActive']->value,'types'=>$_smarty_tpl->tpl_vars['types']->value), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'activity-settings','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>
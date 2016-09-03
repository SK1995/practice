<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:40:19
         compiled from "/home/you/php/practice/application/frontend/skin/developer/navs/nav.topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101037884957c79513da19d9-20956152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ccb76d63f39fdc9a0e2def8c21f747712fa2f2' => 
    array (
      0 => '/home/you/php/practice/application/frontend/skin/developer/navs/nav.topics.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101037884957c79513da19d9-20956152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'iCountTopicsNew' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79513dc5918_51608882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79513dc5918_51608882')) {function content_57c79513dc5918_51608882($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'blog.menu.all'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'feed'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'topics','activeItem'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value,'mods'=>'pills','items'=>array(array('name'=>'index','url'=>$_tmp1,'text'=>$_tmp2,'count'=>$_smarty_tpl->tpl_vars['iCountTopicsNew']->value),array('name'=>'feed','url'=>$_tmp3,'text'=>$_smarty_tpl->tpl_vars['aLang']->value['feed']['title'],'is_enabled'=>!!$_smarty_tpl->tpl_vars['oUserCurrent']->value))),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('navs/nav.topics.sub.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
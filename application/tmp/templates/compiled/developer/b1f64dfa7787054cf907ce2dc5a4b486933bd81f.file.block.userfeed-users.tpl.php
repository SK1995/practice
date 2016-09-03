<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:59
         compiled from "/home/you/php/practice/application/frontend/components/feed/blocks/block.userfeed-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13735278957c7a4b3902dc1-57258237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f64dfa7787054cf907ce2dc5a4b486933bd81f' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/feed/blocks/block.userfeed-users.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13735278957c7a4b3902dc1-57258237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a4b3909fe5_11327367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a4b3909fe5_11327367')) {function content_57c7a4b3909fe5_11327367($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'feed.users.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('../users.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('users'=>$_smarty_tpl->tpl_vars['users']->value), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'feed-users','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>
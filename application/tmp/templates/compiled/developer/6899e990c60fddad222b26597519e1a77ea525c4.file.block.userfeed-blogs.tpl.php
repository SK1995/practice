<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:59
         compiled from "/home/you/php/practice/application/frontend/components/feed/blocks/block.userfeed-blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210916781157c7a4b38aaea3-01533697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6899e990c60fddad222b26597519e1a77ea525c4' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/feed/blocks/block.userfeed-blogs.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210916781157c7a4b38aaea3-01533697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogsJoined' => 0,
    'blogsSubscribed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a4b38cbc42_57730405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a4b38cbc42_57730405')) {function content_57c7a4b38cbc42_57730405($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'feed.blogs.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('../blogs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('blogsJoined'=>$_smarty_tpl->tpl_vars['blogsJoined']->value,'blogsSubscribed'=>$_smarty_tpl->tpl_vars['blogsSubscribed']->value), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'feed-blogs','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>
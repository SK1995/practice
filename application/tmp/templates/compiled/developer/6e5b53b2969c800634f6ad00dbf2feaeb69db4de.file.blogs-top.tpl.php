<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:40:19
         compiled from "/home/you/php/practice/application/frontend/components/blog/blocks/blogs-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29727987657c79513c84ba0-19303968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5b53b2969c800634f6ad00dbf2feaeb69db4de' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/blog/blocks/blogs-top.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29727987657c79513c84ba0-19303968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'blog' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79513cd22e5_66312134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79513cd22e5_66312134')) {function content_57c79513cd22e5_66312134($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('item_content', null, null); ob_start(); ?>
        <?php echo smarty_function_lang(array('_default_short'=>'blog.users.readers_total'),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['blog']->value->getCountUser();?>
</strong><br>
        <?php echo smarty_function_lang(array('_default_short'=>'blog.topics_total'),$_smarty_tpl);?>
: <strong><?php echo $_smarty_tpl->tpl_vars['blog']->value->getCountTopic();?>
</strong>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('title'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),'titleUrl'=>$_smarty_tpl->tpl_vars['blog']->value->getUrlFull(),'mods'=>$_smarty_tpl->tpl_vars['blog']->value->getUrlFull(),'content'=>Smarty::$_smarty_vars['capture']['item_content'],'image'=>array('path'=>$_smarty_tpl->tpl_vars['blog']->value->getAvatarPath(48),'url'=>$_smarty_tpl->tpl_vars['blog']->value->getUrlFull(),'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true)));?>
<?php } ?>

<?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>
<?php }} ?>
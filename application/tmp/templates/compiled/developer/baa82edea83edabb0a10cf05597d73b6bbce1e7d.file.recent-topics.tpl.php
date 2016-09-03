<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:53
         compiled from "/home/you/php/practice/application/frontend/components/activity/blocks/recent-topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205169065357c7a4ad0d87c5-86399083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baa82edea83edabb0a10cf05597d73b6bbce1e7d' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/activity/blocks/recent-topics.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205169065357c7a4ad0d87c5-86399083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a4ad136f18_31194515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a4ad136f18_31194515')) {function content_57c7a4ad136f18_31194515($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('items', null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['topics']) ? $_smarty_tpl->tpl_vars_local['topics']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ('./recent-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('user'=>$_smarty_tpl->tpl_vars['topic']->value->getUser(),'topic'=>$_smarty_tpl->tpl_vars['topic']->value,'blog'=>$_smarty_tpl->tpl_vars['topic']->value->getBlog(),'date'=>$_smarty_tpl->tpl_vars['topic']->value->getDatePublish(),'topicUrl'=>$_smarty_tpl->tpl_vars['topic']->value->getUrl()), 0);?>

    <?php }
if (!$_smarty_tpl->tpl_vars['topic']->_loop) {
?>
        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.empty'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'alert','mods'=>'empty','text'=>$_tmp1),$_smarty_tpl);?>

    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','items'=>Smarty::$_smarty_vars['capture']['items']),$_smarty_tpl);?>
<?php }} ?>
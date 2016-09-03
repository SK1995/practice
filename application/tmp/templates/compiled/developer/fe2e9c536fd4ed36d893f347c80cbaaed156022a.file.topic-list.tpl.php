<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:40:19
         compiled from "/home/you/php/practice/application/frontend/components/topic/topic-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50359898157c79513e5e4d5-97627591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2e9c536fd4ed36d893f347c80cbaaed156022a' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/topic/topic-list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50359898157c79513e5e4d5-97627591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topics' => 0,
    'topic' => 0,
    'paging' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79513ea1a58_78659636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79513ea1a58_78659636')) {function content_57c79513ea1a58_78659636($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_block')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.add_block.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['topics'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['topics']) ? $_smarty_tpl->tpl_vars_local['topics']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['paging'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['paging']) ? $_smarty_tpl->tpl_vars_local['paging']->value : null), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['topics']->value){?>
	<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'component@toolbar-scrollnav.toolbar.scrollnav','show'=>count($_smarty_tpl->tpl_vars['topics']->value)),$_smarty_tpl);?>


	<?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
		<?php echo $_smarty_tpl->getSubTemplate ('./topic-type.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('topic'=>$_smarty_tpl->tpl_vars['topic']->value,'isList'=>true), 0);?>

	<?php } ?>

	<?php echo smarty_function_component(array('_default_short'=>'pagination','total'=>+$_smarty_tpl->tpl_vars['paging']->value['iCountPage'],'current'=>+$_smarty_tpl->tpl_vars['paging']->value['iCurrentPage'],'url'=>((string)$_smarty_tpl->tpl_vars['paging']->value['sBaseUrl'])."/page__page__/".((string)$_smarty_tpl->tpl_vars['paging']->value['sGetParams']),'classes'=>'js-pagination-topics'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty'],'mods'=>'empty'),$_smarty_tpl);?>

<?php }?><?php }} ?>
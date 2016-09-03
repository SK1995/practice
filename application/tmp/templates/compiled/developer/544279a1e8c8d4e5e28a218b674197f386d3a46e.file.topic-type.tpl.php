<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/topic/topic-type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68152836257c7a41a831579-30319461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '544279a1e8c8d4e5e28a218b674197f386d3a46e' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/topic/topic-type.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68152836257c7a41a831579-30319461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topic' => 0,
    'type' => 0,
    'LS' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41a857330_65564708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41a857330_65564708')) {function content_57c7a41a857330_65564708($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['topic'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['topic']) ? $_smarty_tpl->tpl_vars_local['topic']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['topic']->value->getType(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['type']->value)){?>
	<?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('topic',"topic-type-".((string)$_smarty_tpl->tpl_vars['type']->value)), null, 0);?>

	
	
	<?php if (!$_smarty_tpl->tpl_vars['template']->value){?>
		<?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('topic','topic'), null, 0);?>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('topic'=>$_smarty_tpl->tpl_vars['topic']->value,'isList'=>(isset($_smarty_tpl->tpl_vars_local['isList']) ? $_smarty_tpl->tpl_vars_local['isList']->value : null),'isPreview'=>(isset($_smarty_tpl->tpl_vars_local['isPreview']) ? $_smarty_tpl->tpl_vars_local['isPreview']->value : null)), 0);?>

<?php }?><?php }} ?>
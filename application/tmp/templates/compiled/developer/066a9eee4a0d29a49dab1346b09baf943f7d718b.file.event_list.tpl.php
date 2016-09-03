<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/activity/event_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20900338257c794f2540383-84579034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066a9eee4a0d29a49dab1346b09baf943f7d718b' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/activity/event_list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20900338257c794f2540383-84579034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aStreamEvents' => 0,
    'aTemplatePathPlugin' => 0,
    'bDisableGetMoreButton' => 0,
    'iStreamLastId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f254edb3_72541213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f254edb3_72541213')) {function content_57c794f254edb3_72541213($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['aStreamEvents']->value)){?>
	<ul id="activity-event-list">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/activity/events.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</ul>

	<?php if (!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
		<input type="hidden" id="activity-last-id" value="<?php echo $_smarty_tpl->tpl_vars['iStreamLastId']->value;?>
" />
	<?php }?>
<?php }else{ ?>
	<div class="mt-10">
		<?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_no_events'];?>

	</div>
<?php }?>
<?php }} ?>
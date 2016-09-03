<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/new_items_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93895059457c794f25b2b43-79438948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a95e3b8408fd4f943dcb24748f0c6c00f43d2bf' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/new_items_table.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93895059457c794f25b2b43-79438948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aTemplatePathPlugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f25fd0a9_77160506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f25fd0a9_77160506')) {function content_57c794f25fd0a9_77160506($_smarty_tpl) {?>

<table class="table table-stats">
	<tbody>
		<tr>
			<td class="name">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_topics'];?>

			</td>
			<td class="growth" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_topics_info'];?>
">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_growth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'topics'), 0);?>

			</td>
			<td class="graph-line">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'topics','sDataType'=>'ratings','sGraphLineTitle'=>'рейтинг объектов в периоде'), 0);?>


				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'topics','sDataType'=>'votings','sGraphLineTitle'=>'голоса за объекты в периоде'), 0);?>

			</td>
		</tr>
		<tr>
			<td class="name">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_comments'];?>

			</td>
			<td class="growth" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_comments_info'];?>
">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_growth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'comments'), 0);?>

			</td>
			<td class="graph-line">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'comments','sDataType'=>'ratings','sGraphLineTitle'=>'рейтинг объектов в периоде'), 0);?>


				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'comments','sDataType'=>'votings','sGraphLineTitle'=>'голоса за объекты в периоде'), 0);?>

			</td>
		</tr>
		<tr>
			<td class="name">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_blogs'];?>

			</td>
			<td class="growth" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_blogs_info'];?>
">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_growth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'blogs'), 0);?>

			</td>
			<td class="graph-line">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'blogs','sDataType'=>'ratings','sGraphLineTitle'=>'рейтинг объектов в периоде'), 0);?>


				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'blogs','sDataType'=>'votings','sGraphLineTitle'=>'голоса за объекты в периоде'), 0);?>

			</td>
		</tr>
		<tr>
			<td class="name">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_users'];?>

			</td>
			<td class="growth" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_users_info'];?>
">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_growth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'registrations'), 0);?>

			</td>
			<td class="graph-line">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'registrations','sDataType'=>'ratings','sGraphLineTitle'=>'рейтинг объектов в периоде'), 0);?>


				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table_line_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sObjectsType'=>'registrations','sDataType'=>'votings','sGraphLineTitle'=>'голоса за объекты в периоде'), 0);?>

			</td>
		</tr>
	</tbody>
</table>
<?php }} ?>
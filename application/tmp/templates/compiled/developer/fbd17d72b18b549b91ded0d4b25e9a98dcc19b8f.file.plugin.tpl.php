<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/plugins/plugin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181408135557c794df54eff6-34264072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbd17d72b18b549b91ded0d4b25e9a98dcc19b8f' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/plugins/plugin.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181408135557c794df54eff6-34264072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oPlugin' => 0,
    'aLang' => 0,
    'aTemplatePathPlugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794df5c21d9_57920742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df5c21d9_57920742')) {function content_57c794df5c21d9_57920742($_smarty_tpl) {?>

<tr class="plugin-list-item <?php if ($_smarty_tpl->tpl_vars['oPlugin']->value->getActive()){?>active<?php }?>">
	
	<td>
		<img src="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getLogo();?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oPlugin']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
" width="180" height="180" />
	</td>

	<td>
		
		<h4 class="plugin-list-item-title mb-15">
			
			<?php if ($_smarty_tpl->tpl_vars['oPlugin']->value->getActive()&&$_smarty_tpl->tpl_vars['oPlugin']->value->getOwnSettingsPageUrl()){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getOwnSettingsPageUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['settings_tip'];?>
"><?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getName();?>
</a>
			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getName();?>

			<?php }?>
		</h4>

		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/plugins/plugin.info.update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		
		<ul class="mb-15">
			<li><i class="icon-folder-open"></i> /plugins/<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getCode();?>
/</li>
			<li><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getAuthor();?>
</li>
			<?php if ($_smarty_tpl->tpl_vars['oPlugin']->value->getHomepage()){?>
				<li><i class="icon-home"></i> <?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getHomepage();?>
</li>
			<?php }?>
		</ul>

		
		<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oPlugin']->value->getDescription()), ENT_QUOTES, 'UTF-8', true);?>
</p>
	</td>

	
	<td>
		<h4 class="plugin-list-item-title"><?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getVersion();?>
</h4>
	</td>

	
	<td class="ta-r width-250">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/plugins/plugin.actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</td>
</tr><?php }} ?>
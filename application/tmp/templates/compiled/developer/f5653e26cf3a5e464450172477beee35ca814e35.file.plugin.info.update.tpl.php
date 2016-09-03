<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/plugins/plugin.info.update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43848308057c794df5c4504-69161179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5653e26cf3a5e464450172477beee35ca814e35' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/plugins/plugin.info.update.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43848308057c794df5c4504-69161179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPluginUpdates' => 0,
    'oPlugin' => 0,
    'oUpdateInfo' => 0,
    'aLang' => 0,
    'aTemplatePathPlugin' => 0,
    'sTextMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794df5dfd09_25586191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df5dfd09_25586191')) {function content_57c794df5dfd09_25586191($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['aPluginUpdates']->value&&$_smarty_tpl->tpl_vars['oPlugin']->value&&isset($_smarty_tpl->tpl_vars['aPluginUpdates']->value[$_smarty_tpl->tpl_vars['oPlugin']->value->getCode()])){?>
	<?php $_smarty_tpl->tpl_vars['oUpdateInfo'] = new Smarty_variable($_smarty_tpl->tpl_vars['aPluginUpdates']->value[$_smarty_tpl->tpl_vars['oPlugin']->value->getCode()], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sTextMsg'] = new Smarty_variable("<a href=\"".((string)$_smarty_tpl->tpl_vars['oUpdateInfo']->value->getUrlDownload())."\" target=\"_blank\">".((string)$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['new_version_avaible'])." <b>".((string)$_smarty_tpl->tpl_vars['oUpdateInfo']->value->getVersion())."</b></a>", null, 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('mAlerts'=>$_smarty_tpl->tpl_vars['sTextMsg']->value,'sAlertStyle'=>'info'), 0);?>

<?php }?><?php }} ?>
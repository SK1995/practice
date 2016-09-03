<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/plugins/plugin.actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89359969657c794df5e2548-90678015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eda45bc9566ec5f36e2e5b7c61b654b35b410ed5' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/plugins/plugin.actions.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89359969657c794df5e2548-90678015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oPlugin' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794df63e7d9_80427006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df63e7d9_80427006')) {function content_57c794df63e7d9_80427006($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['oPlugin']->value->getActive()){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getConfigSettingsPageUrl();?>
" class="button width-200" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['config_tip'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['config'];?>
</a>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['oPlugin']->value->getActive()){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getDeactivateUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['deactivate'];?>
" class="button width-200"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['deactivate'];?>
</a>
<?php }else{ ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getActivateUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['activate'];?>
" class="button button-primary width-200"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['activate'];?>
</a>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['oPlugin']->value->getApplyUpdate()&&$_smarty_tpl->tpl_vars['oPlugin']->value->getActive()){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getApplyUpdateUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['apply_update'];?>
" class="button width-200"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['apply_update'];?>
</a>
<?php }?>


<a href="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getRemoveUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['remove'];?>
" class="button width-200 js-question" data-question-title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['common']['remove_confirm'];?>
"
		><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['plugins']['list']['remove'];?>
</a>
<?php }} ?>
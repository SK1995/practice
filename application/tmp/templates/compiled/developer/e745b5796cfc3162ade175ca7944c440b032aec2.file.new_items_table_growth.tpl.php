<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/new_items_table_growth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21783935957c794f25ff9a2-46164292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e745b5796cfc3162ade175ca7944c440b032aec2' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/new_items_table_growth.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21783935957c794f25ff9a2-46164292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sObjectsType' => 0,
    'aDataGrowth' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f261b1f1_15027587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f261b1f1_15027587')) {function content_57c794f261b1f1_15027587($_smarty_tpl) {?>
	
<?php echo abs($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value]['now_items']);?>


<?php if ($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value]['growth']>0){?>
	<i class="icon-stats-up" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_items_for_period'];?>
: <?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value]['growth'];?>
"></i>
<?php }elseif($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value]['growth']<0){?>
	<i class="icon-stats-down" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['less_items_for_period'];?>
: <?php echo abs($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value]['growth']);?>
"></i>
<?php }?>
<?php }} ?>
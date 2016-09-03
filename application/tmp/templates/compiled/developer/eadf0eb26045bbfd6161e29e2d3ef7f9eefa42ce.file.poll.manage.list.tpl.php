<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:07
         compiled from "/home/you/php/practice/application/frontend/components/poll/poll.manage.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147024261457c7954309fa31-74107262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eadf0eb26045bbfd6161e29e2d3ef7f9eefa42ce' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/poll/poll.manage.list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147024261457c7954309fa31-74107262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPollItems' => 0,
    'oPoll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c795430b89d3_96590584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c795430b89d3_96590584')) {function content_57c795430b89d3_96590584($_smarty_tpl) {?>

<ul class="poll-manage-list js-poll-manage-list">
	<?php if ($_smarty_tpl->tpl_vars['aPollItems']->value){?>
		<?php  $_smarty_tpl->tpl_vars['oPoll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oPoll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPollItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oPoll']->key => $_smarty_tpl->tpl_vars['oPoll']->value){
$_smarty_tpl->tpl_vars['oPoll']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ('./poll.manage.item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oPoll'=>$_smarty_tpl->tpl_vars['oPoll']->value), 0);?>

		<?php } ?>
	<?php }?>
</ul><?php }} ?>
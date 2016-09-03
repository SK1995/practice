<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35748943857c794f2686c26-49048453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e337869ca67b08bffc259bb672d6a73d008f77d7' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/alert.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35748943857c794f2686c26-49048453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sAlertStyle' => 0,
    'bAlertVisible' => 0,
    'sAlertAttributes' => 0,
    'sAlertTitle' => 0,
    'bAlertClose' => 0,
    'mAlerts' => 0,
    'aAlert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f26bd252_59883377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f26bd252_59883377')) {function content_57c794f26bd252_59883377($_smarty_tpl) {?>

<div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['sAlertStyle']->value){?><?php echo $_smarty_tpl->tpl_vars['sAlertStyle']->value;?>
<?php }else{ ?>success<?php }?> js-alert"
     <?php if (isset($_smarty_tpl->tpl_vars['bAlertVisible']->value)&&$_smarty_tpl->tpl_vars['bAlertVisible']->value==false){?>style="display: none"<?php }?>
     <?php echo $_smarty_tpl->tpl_vars['sAlertAttributes']->value;?>
>

	<?php if ($_smarty_tpl->tpl_vars['sAlertTitle']->value){?>
		<h4 class="alert--title"><?php echo $_smarty_tpl->tpl_vars['sAlertTitle']->value;?>
</h4>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['bAlertClose']->value){?>
		<div class="alert--close" data-type="alert-close">×</div>
	<?php }?>

	<div class="alert--body">
		
			<?php if (is_array($_smarty_tpl->tpl_vars['mAlerts']->value)){?>
				<ul class="alert--list">
					<?php  $_smarty_tpl->tpl_vars['aAlert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aAlert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mAlerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aAlert']->key => $_smarty_tpl->tpl_vars['aAlert']->value){
$_smarty_tpl->tpl_vars['aAlert']->_loop = true;
?>
						<li class="alert--list--item"><?php if ($_smarty_tpl->tpl_vars['aAlert']->value['title']){?><strong><?php echo $_smarty_tpl->tpl_vars['aAlert']->value['title'];?>
</strong>:<?php }?> <?php echo $_smarty_tpl->tpl_vars['aAlert']->value['msg'];?>
</li>
					<?php } ?>
				</ul>
			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['mAlerts']->value;?>

			<?php }?>
		
	</div>
</div><?php }} ?>
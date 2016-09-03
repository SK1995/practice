<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/misc/stats.brief.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7406210557c794f23d0854-35111453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7f09109e8913240852f665e530258bc303bc74d' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/misc/stats.brief.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7406210557c794f23d0854-35111453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aStats' => 0,
    'aLang' => 0,
    'aUserGrowth' => 0,
    'iTotalTopicsCount' => 0,
    'iTotalBlogsCount' => 0,
    'iTotalCommentsCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f241cef4_91013711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f241cef4_91013711')) {function content_57c794f241cef4_91013711($_smarty_tpl) {?>

<ul class="stats-brief">
	<li>
		<h3><?php echo number_format($_smarty_tpl->tpl_vars['aStats']->value['count_all'],0,'.',' ');?>
</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['users'];?>
</p>
	</li>

	
	<?php if ($_smarty_tpl->tpl_vars['aUserGrowth']->value){?>
		<li>
			<h3>
				<?php echo abs($_smarty_tpl->tpl_vars['aUserGrowth']->value['now_items']);?>


				<?php if ($_smarty_tpl->tpl_vars['aUserGrowth']->value['growth']>0){?>
					<i class="icon-stats-up" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_users_for_week'];?>
: <?php echo $_smarty_tpl->tpl_vars['aUserGrowth']->value['growth'];?>
"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['aUserGrowth']->value['growth']<0){?>
					<i class="icon-stats-down" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['less_users_for_week'];?>
: <?php echo abs($_smarty_tpl->tpl_vars['aUserGrowth']->value['growth']);?>
"></i>
				<?php }?>
			</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['registrations'];?>
</p>
		</li>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['iTotalTopicsCount']->value){?>
		<li>
			<h3><?php echo number_format($_smarty_tpl->tpl_vars['iTotalTopicsCount']->value,0,'.',' ');?>
</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['topics'];?>
</p>
		</li>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['iTotalBlogsCount']->value){?>
		<li>
			<h3><?php echo number_format($_smarty_tpl->tpl_vars['iTotalBlogsCount']->value,0,'.',' ');?>
</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['blogs'];?>
</p>
		</li>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['iTotalCommentsCount']->value){?>
		<li>
			<h3><?php echo number_format($_smarty_tpl->tpl_vars['iTotalCommentsCount']->value,0,'.',' ');?>
</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['comments'];?>
</p>
		</li>
	<?php }?>
</ul>
<?php }} ?>
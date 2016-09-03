<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.home.stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12712574557c794f2550779-36154241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e522d608fdcae8536a87dd3ad17d6fd24ab1be00' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.home.stats.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'b5cc9fafcfc825fd0681bc319e539d9d2a7ed4ec' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.aside.base.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12712574557c794f2550779-36154241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'bBlockNotShow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f258e632_75199763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f258e632_75199763')) {function content_57c794f258e632_75199763($_smarty_tpl) {?>



<?php if (!$_smarty_tpl->tpl_vars['bBlockNotShow']->value){?>
	

	<div class="block block-type-home-stats block-home" id="" >
		
		
			<header class="block-header">
				<h3 class="block-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['new_items'];?>
</h3>

				
	<form action="" method="get" enctype="application/x-www-form-urlencoded" id="admin_index_growth_block_form">
		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.hidden.security_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/preset_interval.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sName'=>'filter[newly_added_items_period]','sId'=>'admin_index_growth_period_select','sCurrentPeriod'=>$_smarty_tpl->tpl_vars['_aRequest']->value['filter']['newly_added_items_period']), 0);?>

	</form>

			</header>
		
		
		

		
		
		
		

		
		
			<div class="block-content">
				
	<div id="admin_index_new_items_block">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/new_items_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

			</div>
		
		
		

		
		
		
		
	</div>

	
<?php }?><?php }} ?>
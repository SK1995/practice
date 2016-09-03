<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28236139657c794df3dc9b4-07022410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a83e4f299734fa7eb97ebcad37be28f88af00763' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.nav.tpl',
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
  'nocache_hash' => '28236139657c794df3dc9b4-07022410',
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
  'unifunc' => 'content_57c794df443364_85690619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df443364_85690619')) {function content_57c794df443364_85690619($_smarty_tpl) {?>



<?php if (!$_smarty_tpl->tpl_vars['bBlockNotShow']->value){?>
	

	<div class="block block-type-nav " id="" >
		
		
		
		

		
		
		
		

		
		
			<div class="block-content">
				
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."navs/nav.main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			</div>
		
		
		

		
		
		
		
	</div>

	
<?php }?><?php }} ?>
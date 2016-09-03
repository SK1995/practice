<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:40:19
         compiled from "/home/you/php/practice/framework/frontend/components/tags/tag-cloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184867769457c79513c15708-99616834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c2df1a6be8bf0f9c87532634b982986b1ac988' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/tags/tag-cloud.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184867769457c79513c15708-99616834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79513c71485_05896626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79513c71485_05896626')) {function content_57c79513c71485_05896626($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php if ((isset($_smarty_tpl->tpl_vars_local['tags']) ? $_smarty_tpl->tpl_vars_local['tags']->value : null)){?>
	<ul class="tag-cloud word-wrap">
		<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['tags']) ? $_smarty_tpl->tpl_vars_local['tags']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
			<li class="tag-cloud-item <?php if ($_smarty_tpl->tpl_vars['tag']->value->getText()&&(isset($_smarty_tpl->tpl_vars_local['active']) ? $_smarty_tpl->tpl_vars_local['active']->value : null)==$_smarty_tpl->tpl_vars['tag']->value->getText()){?>active<?php }?>">
				<a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['tag']->value->getSize();?>
" href="<?php $_template = new Smarty_Internal_Template_LS('eval:'.(isset($_smarty_tpl->tpl_vars_local['url']) ? $_smarty_tpl->tpl_vars_local['url']->value : null), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>" title="<?php echo $_smarty_tpl->tpl_vars['tag']->value->getCount();?>
">
					<?php if ((isset($_smarty_tpl->tpl_vars_local['text']) ? $_smarty_tpl->tpl_vars_local['text']->value : null)){?>
						<?php $_template = new Smarty_Internal_Template_LS('eval:'.(isset($_smarty_tpl->tpl_vars_local['text']) ? $_smarty_tpl->tpl_vars_local['text']->value : null), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
					<?php }else{ ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php }else{ ?>
	<?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty'],'mods'=>'empty'),$_smarty_tpl);?>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:07
         compiled from "/home/you/php/practice/application/frontend/components/poll/poll.manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37035885057c79543033345-61097678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740737307a6b44c608054625f33cd524778e514c' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/poll/poll.manage.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37035885057c79543033345-61097678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7954306d948_53745214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7954306d948_53745214')) {function content_57c7954306d948_53745214($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_insert_block')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/insert.block.php';
?>

<div class="fieldset poll-manage js-poll-manage" data-type="<?php echo (isset($_smarty_tpl->tpl_vars_local['targetType']) ? $_smarty_tpl->tpl_vars_local['targetType']->value : null);?>
" data-target-id="<?php echo (isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null);?>
">
	<header class="fieldset-header">
		<h3 class="fieldset-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['poll']['polls'];?>
</h3>
	</header>

	<div class="fieldset-body">
		
		<?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add'],'type'=>'button','classes'=>'poll-manage-add js-poll-manage-add'),$_smarty_tpl);?>


		
		<?php echo smarty_insert_block(array('block' => "pollFormItems", 'params' => array('target_type'=>(isset($_smarty_tpl->tpl_vars_local['targetType']) ? $_smarty_tpl->tpl_vars_local['targetType']->value : null),'target_id'=>(isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null))),$_smarty_tpl);?>

	</div>
</div><?php }} ?>
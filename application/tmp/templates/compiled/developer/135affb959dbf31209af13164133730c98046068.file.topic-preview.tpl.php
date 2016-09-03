<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:07
         compiled from "/home/you/php/practice/application/frontend/components/topic/topic-preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116466626057c79543173265-56977090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '135affb959dbf31209af13164133730c98046068' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/topic/topic-preview.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116466626057c79543173265-56977090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79543196ff7_72150422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79543196ff7_72150422')) {function content_57c79543196ff7_72150422($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<div class="topic-preview" id="topic-text-preview">
	<header class="topic-preview-header">
		<h3 class="topic-preview-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['common']['preview_text'];?>
</h3>
	</header>

	<div class="topic-preview-body js-topic-preview-content"></div>

	<footer class="topic-preview-footer">
        <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'button','classes'=>'js-topic-preview-text-hide-button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['cancel']),$_smarty_tpl);?>

	</footer>
</div><?php }} ?>
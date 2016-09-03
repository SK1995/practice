<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:28
         compiled from "/home/you/php/practice/application/frontend/components/search/search-form.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37965412157c794e06027c0-97600053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '015f620a550a20da0f78ffd9ece2fa311668a8ed' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/search/search-form.main.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37965412157c794e06027c0-97600053',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794e061d550_58229867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794e061d550_58229867')) {function content_57c794e061d550_58229867($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['searchType']) ? $_smarty_tpl->tpl_vars_local['searchType']->value : null))===null||$tmp==='' ? 'topics' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'main','action'=>$_tmp1.$_tmp2,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
<?php }} ?>
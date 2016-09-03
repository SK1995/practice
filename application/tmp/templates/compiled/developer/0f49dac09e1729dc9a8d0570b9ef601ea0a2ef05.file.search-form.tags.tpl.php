<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:40:19
         compiled from "/home/you/php/practice/framework/frontend/components/tags/search-form.tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39173982557c79513be5330-66306868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f49dac09e1729dc9a8d0570b9ef601ea0a2ef05' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/tags/search-form.tags.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39173982557c79513be5330-66306868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79513c045c2_62494066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79513c045c2_62494066')) {function content_57c79513c045c2_62494066($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'tags.search.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'tags','mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null),'placeholder'=>$_tmp1,'classes'=>'js-tag-search-form','inputClasses'=>'autocomplete-tags js-tag-search','inputName'=>'tag','value'=>htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php }} ?>
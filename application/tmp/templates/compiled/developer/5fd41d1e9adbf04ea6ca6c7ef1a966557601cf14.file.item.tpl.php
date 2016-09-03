<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/property/output/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157365311257c7a41ab8b952-56335912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd41d1e9adbf04ea6ca6c7ef1a966557601cf14' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/property/output/item.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157365311257c7a41ab8b952-56335912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
    'LS' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41abceef9_23136482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41abceef9_23136482')) {function content_57c7a41abceef9_23136482($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['property'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['property']) ? $_smarty_tpl->tpl_vars_local['property']->value : null), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['property']->value){?>
    
    <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('property',"output/property.".((string)$_smarty_tpl->tpl_vars['property']->value->getType()).".".((string)$_smarty_tpl->tpl_vars['property']->value->getTargetType())), null, 0);?>

    <?php if (!$_smarty_tpl->tpl_vars['template']->value){?>
        <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('property',"output/property.".((string)$_smarty_tpl->tpl_vars['property']->value->getType())), null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['template']->value){?>
            <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('property',"output/property.default"), null, 0);?>
        <?php }?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('property'=>$_smarty_tpl->tpl_vars['property']->value), 0);?>

<?php }?><?php }} ?>
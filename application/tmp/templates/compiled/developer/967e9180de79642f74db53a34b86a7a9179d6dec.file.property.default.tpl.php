<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/property/output/property.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146303146557c7a41abd5348-14607244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967e9180de79642f74db53a34b86a7a9179d6dec' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/property/output/property.default.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146303146557c7a41abd5348-14607244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41abdcef4_90190565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41abdcef4_90190565')) {function content_57c7a41abdcef4_90190565($_smarty_tpl) {?><div class="property">
    <div class="property-list-item-label">
        <?php echo $_smarty_tpl->tpl_vars['property']->value->getTitle();?>

    </div>

    <strong class="property-list-item-content">
        <?php echo $_smarty_tpl->tpl_vars['property']->value->getValue()->getValueForDisplay();?>

    </strong>
</div><?php }} ?>
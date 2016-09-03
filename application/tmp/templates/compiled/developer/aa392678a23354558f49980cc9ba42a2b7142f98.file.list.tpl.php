<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/property/output/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62888552357c7a41ab49f70-73723076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa392678a23354558f49980cc9ba42a2b7142f98' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/property/output/list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62888552357c7a41ab49f70-73723076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41ab88a01_75671404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41ab88a01_75671404')) {function content_57c7a41ab88a01_75671404($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars_local['properties']) ? $_smarty_tpl->tpl_vars_local['properties']->value : null)){?>
    <div class="property-list">
        <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['properties']) ? $_smarty_tpl->tpl_vars_local['properties']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ('./item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('property'=>$_smarty_tpl->tpl_vars['property']->value), 0);?>

        <?php } ?>
    </div>
<?php }?><?php }} ?>
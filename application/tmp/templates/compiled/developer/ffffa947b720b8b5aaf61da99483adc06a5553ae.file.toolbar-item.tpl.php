<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:28
         compiled from "/home/you/php/practice/framework/frontend/components/toolbar/toolbar-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148535104057c794e0946714-50868113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffffa947b720b8b5aaf61da99483adc06a5553ae' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/toolbar/toolbar-item.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '815ad20964341db8a057e7c6179a5cc910d66c68' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/button/group.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148535104057c794e0946714-50868113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'role' => 0,
    'mods' => 0,
    'buttons' => 0,
    'component' => 0,
    'classes' => 0,
    'attributes' => 0,
    'button' => 0,
    'buttonParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794e09cf448_28443435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794e09cf448_28443435')) {function content_57c794e09cf448_28443435($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('button-group', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('role','buttons','buttonParams','classes','mods','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>


    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." toolbar-item", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." vertical", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['items']) ? $_smarty_tpl->tpl_vars_local['items']->value : null), null, 0);?>


<?php $_smarty_tpl->tpl_vars['role'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['role']->value)===null||$tmp==='' ? 'group' : $tmp), null, 0);?>


<?php if (!in_array('vertical',explode(' ',$_smarty_tpl->tpl_vars['mods']->value))){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." horizontal", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['buttons']->value){?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 role="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
">
        <?php if (is_array($_smarty_tpl->tpl_vars['buttons']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value){
$_smarty_tpl->tpl_vars['button']->_loop = true;
?>
                <?php if (is_array($_smarty_tpl->tpl_vars['button']->value)){?>
                    
    <?php echo smarty_function_component(array('_default_short'=>'toolbar','template'=>'button','params'=>array_merge((($tmp = @$_smarty_tpl->tpl_vars['buttonParams']->value)===null||$tmp==='' ? array() : $tmp),$_smarty_tpl->tpl_vars['button']->value)),$_smarty_tpl);?>


                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['button']->value;?>

                <?php }?>
            <?php } ?>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>

        <?php }?>
    </div>
<?php }?><?php }} ?>
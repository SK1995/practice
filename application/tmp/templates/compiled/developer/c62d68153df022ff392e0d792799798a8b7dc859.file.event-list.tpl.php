<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:32
         compiled from "/home/you/php/practice/application/frontend/components/activity/event-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51915527857c7a4981fc4c5-99216770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62d68153df022ff392e0d792799798a8b7dc859' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/activity/event-list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51915527857c7a4981fc4c5-99216770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event' => 0,
    'dateAdded' => 0,
    'dateLast' => 0,
    'dateNow' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a498231830_01165311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a498231830_01165311')) {function content_57c7a498231830_01165311($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.date_format.php';
?>


<?php ob_start();?><?php echo smarty_function_date_format(array('date'=>(isset($_smarty_tpl->tpl_vars_local['dateLast']) ? $_smarty_tpl->tpl_vars_local['dateLast']->value : null),'format'=>"Y-m-d",'notz'=>1),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['dateLast'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['dateLast']) ? $_smarty_tpl->tpl_vars_local['dateLast']->value : null) ? $_tmp1 : false, null, 0);?>
<?php ob_start();?><?php echo smarty_function_date_format(array('date'=>time(),'format'=>"Y-m-d",'notz'=>1),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['dateNow'] = new Smarty_variable($_tmp2, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['events']) ? $_smarty_tpl->tpl_vars_local['events']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['event']->value->getDateAdded(),'format'=>"Y-m-d",'notz'=>1),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['dateAdded'] = new Smarty_variable($_tmp3, null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['dateAdded']->value!=$_smarty_tpl->tpl_vars['dateLast']->value){?>
        <?php $_smarty_tpl->tpl_vars['dateLast'] = new Smarty_variable($_smarty_tpl->tpl_vars['dateAdded']->value, null, 0);?>

        <li class="activity-date">
            <?php if ($_smarty_tpl->tpl_vars['dateNow']->value==$_smarty_tpl->tpl_vars['dateLast']->value){?>
                <?php echo $_smarty_tpl->tpl_vars['aLang']->value['date']['today'];?>

            <?php }else{ ?>
                <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['event']->value->getDateAdded(),'format'=>"j F Y"),$_smarty_tpl);?>

            <?php }?>
        </li>
    <?php }?>

    
    <?php echo $_smarty_tpl->getSubTemplate ('./event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('event'=>$_smarty_tpl->tpl_vars['event']->value), 0);?>

<?php } ?><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/framework/frontend/components/alert/alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66230725357c794df4ee315-42994352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a89f1c129fcb9d5c1d994173d1eda9933b6206bc' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/alert/alert.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66230725357c794df4ee315-42994352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'component' => 0,
    'visible' => 0,
    'dismissible' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'text' => 0,
    'alert' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794df5495a9_63970820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df5495a9_63970820')) {function content_57c794df5495a9_63970820($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('alert', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('title','text','visible','dismissible','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>


<?php ob_start();?><?php echo rand(0,'10e10');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['component']->value).$_tmp1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['visible']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['dismissible']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." dismissible", null, 0);?>
<?php }?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 js-alert <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" role="alert" <?php if (!$_smarty_tpl->tpl_vars['visible']->value){?>hidden<?php }?> <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
        <h4 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
    <?php }?>

    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body">
        
            <?php if (is_array($_smarty_tpl->tpl_vars['text']->value)){?>
                <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-list">
                    <?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value){
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>
                        <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-list-item">
                            <?php if ($_smarty_tpl->tpl_vars['alert']->value['title']){?>
                                <strong><?php echo $_smarty_tpl->tpl_vars['alert']->value['title'];?>
</strong>:
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['alert']->value['msg'];?>

                        </li>
                    <?php } ?>
                </ul>
            <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            <?php }?>
        
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['dismissible']->value){?>
        <button class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-close js-alert-close" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
            <span class="icon-remove"></span>
            <span id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" aria-hidden="true" hidden><?php echo smarty_function_lang(array('_default_short'=>'common.close'),$_smarty_tpl);?>
</span>
        </button>
    <?php }?>
</div><?php }} ?>
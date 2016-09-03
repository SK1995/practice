<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:32
         compiled from "/home/you/php/practice/framework/frontend/components/item/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19595491157c7a498352fd3-82736322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fdcbee66b0eec125c7f45653cc4a3a0485b61de' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/item/item.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19595491157c7a498352fd3-82736322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'element' => 0,
    'image' => 0,
    'component' => 0,
    'classes' => 0,
    'mods' => 0,
    'attributes' => 0,
    'title' => 0,
    'titleUrl' => 0,
    'desc' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a4983d4a57_72849497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a4983d4a57_72849497')) {function content_57c7a4983d4a57_72849497($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('item', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('image','content','desc','title','titleUrl','element','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>




<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." clearfix", null, 0);?>
<?php $_smarty_tpl->tpl_vars['element'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['element']->value)===null||$tmp==='' ? 'div' : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['image']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." has-image", null, 0);?>
<?php }?>


<<?php echo $_smarty_tpl->tpl_vars['element']->value;?>
 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-left">
            <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['title'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-image <?php echo $_smarty_tpl->tpl_vars['image']->value['classes'];?>
">
            </a>
        </div>
    <?php }?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body">
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <?php if ($_smarty_tpl->tpl_vars['titleUrl']->value){?>
                <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><a href="<?php echo $_smarty_tpl->tpl_vars['titleUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h3>
            <?php }else{ ?>
                <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['desc']->value){?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-description">
                <?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

            </div>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</<?php echo $_smarty_tpl->tpl_vars['element']->value;?>
><?php }} ?>
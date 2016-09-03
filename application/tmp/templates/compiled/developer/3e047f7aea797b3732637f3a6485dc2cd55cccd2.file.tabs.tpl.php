<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:28
         compiled from "/home/you/php/practice/framework/frontend/components/tabs/tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108173248857c794e0852416-79768025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e047f7aea797b3732637f3a6485dc2cd55cccd2' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/tabs/tabs.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108173248857c794e0852416-79768025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'tabs' => 0,
    'uid' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794e08b1da5_52742250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794e08b1da5_52742250')) {function content_57c794e08b1da5_52742250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('tabs', null, 0);?>

<?php $_smarty_tpl->tpl_vars['tabs'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['tabs']) ? $_smarty_tpl->tpl_vars_local['tabs']->value : null), null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
">
    
    <ul class="tab-list clearfix" data-tab-type="tab-list">
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->index++;
 $_smarty_tpl->tpl_vars['tab']->first = $_smarty_tpl->tpl_vars['tab']->index === 0;
?>
            
            <?php ob_start();?><?php echo rand(0,'10e10');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable("tab".$_tmp1, null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('tabs', null, 0);
$_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->tpl_vars['tab']->index]['uid'] = $_smarty_tpl->tpl_vars['uid']->value;?>

            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['is_enabled'])===null||$tmp==='' ? true : $tmp)){?>
                <li class="tab <?php echo $_smarty_tpl->tpl_vars['tab']->value['classes'];?>

                    <?php if ($_smarty_tpl->tpl_vars['tab']->first){?>active<?php }?>"
                    data-tab-type="tab"
                    data-tab-target="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['url']){?>
                        data-tab-url="<?php echo $_smarty_tpl->tpl_vars['tab']->value['url'];?>
"
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['tab']->value['attributes'];?>
>

                    <?php echo $_smarty_tpl->tpl_vars['tab']->value['text'];?>

                </li>
            <?php }?>
        <?php } ?>
    </ul>

    
    <div class="tabs-panes" data-type="tab-panes">
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->index++;
 $_smarty_tpl->tpl_vars['tab']->first = $_smarty_tpl->tpl_vars['tab']->index === 0;
?>
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['is_enabled'])===null||$tmp==='' ? true : $tmp)){?>
                <div class="tab-pane" <?php if ($_smarty_tpl->tpl_vars['tab']->first){?>style="display: block"<?php }?> data-tab-type="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['uid'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['content']){?>
                        <div class="tab-pane-content">
                            <?php echo $_smarty_tpl->tpl_vars['tab']->value['content'];?>

                        </div>
                    <?php }?>

                    
                    <?php if (is_array($_smarty_tpl->tpl_vars['tab']->value['list'])){?>
                        <?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','params'=>$_smarty_tpl->tpl_vars['tab']->value['list']),$_smarty_tpl);?>

                    <?php }elseif($_smarty_tpl->tpl_vars['tab']->value['list']){?>
                        <?php echo $_smarty_tpl->tpl_vars['tab']->value['list'];?>

                    <?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['tab']->value['body'];?>

                </div>
            <?php }?>
        <?php } ?>
    </div>
</div><?php }} ?>
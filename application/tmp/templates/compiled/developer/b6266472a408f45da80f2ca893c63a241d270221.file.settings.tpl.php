<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/components/activity/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28438169457c7a494c50423-50951455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6266472a408f45da80f2ca893c63a241d270221' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/activity/settings.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28438169457c7a494c50423-50951455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a494c92100_68166140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a494c92100_68166140')) {function content_57c7a494c92100_68166140($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <div class="activity-settings js-activity-settings">
        <p class="text-help">
            <?php echo $_smarty_tpl->tpl_vars['aLang']->value['activity']['settings']['note'];?>

        </p>

        <div class="field-checkbox-group">
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars_local['types']) ? $_smarty_tpl->tpl_vars_local['types']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
                <?php if (!(Config::Get('module.stream.disable_vote_events')&&substr($_smarty_tpl->tpl_vars['type']->value,0,4)=='vote')){?>
                    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','inputClasses'=>'js-activity-settings-type-checkbox','inputAttributes'=>array('data-type'=>$_smarty_tpl->tpl_vars['type']->value),'checked'=>in_array($_smarty_tpl->tpl_vars['type']->value,(isset($_smarty_tpl->tpl_vars_local['typesActive']) ? $_smarty_tpl->tpl_vars_local['typesActive']->value : null)),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['activity']['settings']['options'][$_smarty_tpl->tpl_vars['type']->value]),$_smarty_tpl);?>

                <?php }?>
            <?php } ?>
        </div>
    </div>
<?php }?><?php }} ?>
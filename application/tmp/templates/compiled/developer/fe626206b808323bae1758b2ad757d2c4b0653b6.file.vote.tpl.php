<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/vote/vote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124096882957c7a41acf86d7-88101511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe626206b808323bae1758b2ad757d2c4b0653b6' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/vote/vote.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124096882957c7a41acf86d7-88101511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'target' => 0,
    'showRating' => 0,
    'rating' => 0,
    'vote' => 0,
    'oUserCurrent' => 0,
    'mods' => 0,
    'component' => 0,
    'showLabel' => 0,
    'aLang' => 0,
    'iconMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41adb1362_20266620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41adb1362_20266620')) {function content_57c7a41adb1362_20266620($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('vote', null, 0);?>


<?php $_smarty_tpl->tpl_vars['showRating'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['showRating']) ? $_smarty_tpl->tpl_vars_local['showRating']->value : null))===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['target'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['target']) ? $_smarty_tpl->tpl_vars_local['target']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>


<?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value->getRating(), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['showRating']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['rating']->value>0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." count-positive", null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['rating']->value<0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." count-negative", null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." count-zero", null, 0);?>
    <?php }?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['vote'])) $_smarty_tpl->tpl_vars['vote'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['vote']->value = $_smarty_tpl->tpl_vars['target']->value->getVote()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['vote']->value->getDirection()>0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted-up", null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['vote']->value->getDirection()<0){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted-down", null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." voted-zero", null, 0);?>
    <?php }?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." not-voted", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||(isset($_smarty_tpl->tpl_vars_local['isLocked']) ? $_smarty_tpl->tpl_vars_local['isLocked']->value : null)){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." locked", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['showRating']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." rating-hidden", null, 0);?>
<?php }?>


<?php $_smarty_tpl->tpl_vars['iconMod'] = new Smarty_variable(in_array('small',explode(' ',$_smarty_tpl->tpl_vars['mods']->value)) ? 'white' : '', null, 0);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" data-param-i-target-id="<?php echo $_smarty_tpl->tpl_vars['target']->value->getId();?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['showLabel']->value){?>
        <h4 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-heading"><?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value]['rating'];?>
</h4>
    <?php }?>

    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-body">
        
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating">
            <?php if ($_smarty_tpl->tpl_vars['showRating']->value){?>
                <?php echo $_smarty_tpl->tpl_vars['rating']->value;?>

            <?php }else{ ?>
                ?
            <?php }?>
        </div>

        
        <?php if ((isset($_smarty_tpl->tpl_vars_local['useAbstain']) ? $_smarty_tpl->tpl_vars_local['useAbstain']->value : null)){?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-abstain js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item" <?php if (!$_smarty_tpl->tpl_vars['vote']->value){?>title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value]['abstain'];?>
"<?php }?> data-vote-value="0">
                <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'eye-open','mods'=>$_smarty_tpl->tpl_vars['iconMod']->value),$_smarty_tpl);?>

            </div>
        <?php }?>

        
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-up js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item" <?php if (!$_smarty_tpl->tpl_vars['vote']->value){?>title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value]['up'];?>
"<?php }?> data-vote-value="1">
            <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'plus','mods'=>$_smarty_tpl->tpl_vars['iconMod']->value),$_smarty_tpl);?>

        </div>

        
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item-down js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-item" <?php if (!$_smarty_tpl->tpl_vars['vote']->value){?>title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value]['down'];?>
"<?php }?> data-vote-value="-1">
            <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'minus','mods'=>$_smarty_tpl->tpl_vars['iconMod']->value),$_smarty_tpl);?>

        </div>
    </div>
</div><?php }} ?>
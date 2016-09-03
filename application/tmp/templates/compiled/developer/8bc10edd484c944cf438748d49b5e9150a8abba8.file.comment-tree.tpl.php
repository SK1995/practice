<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/comment/comment-tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1631439957c7a41af09fa1-20322072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc10edd484c944cf438748d49b5e9150a8abba8' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/comment/comment-tree.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1631439957c7a41af09fa1-20322072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
    'maxLevel' => 0,
    'currentLevel' => 0,
    'commentLevel' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41b048ab0_19381563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41b048ab0_19381563')) {function content_57c7a41b048ab0_19381563($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['currentLevel'] = new Smarty_variable(-1, null, 0);?>


<?php $_smarty_tpl->tpl_vars['maxLevel'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['maxLevel']) ? $_smarty_tpl->tpl_vars_local['maxLevel']->value : null))===null||$tmp==='' ? Config::Get('module.comment.max_tree') : $tmp), null, 0);?>


<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['comments']) ? $_smarty_tpl->tpl_vars_local['comments']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['comment']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['comment']->iteration=0;
 $_smarty_tpl->tpl_vars['comment']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['comment']->iteration++;
 $_smarty_tpl->tpl_vars['comment']->index++;
 $_smarty_tpl->tpl_vars['comment']->first = $_smarty_tpl->tpl_vars['comment']->index === 0;
 $_smarty_tpl->tpl_vars['comment']->last = $_smarty_tpl->tpl_vars['comment']->iteration === $_smarty_tpl->tpl_vars['comment']->total;
?>
    
    <?php $_smarty_tpl->tpl_vars['commentLevel'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value->getLevel()>$_smarty_tpl->tpl_vars['maxLevel']->value ? $_smarty_tpl->tpl_vars['maxLevel']->value : $_smarty_tpl->tpl_vars['comment']->value->getLevel(), null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['currentLevel']->value>$_smarty_tpl->tpl_vars['commentLevel']->value){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['name'] = 'closewrappers1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currentLevel']->value-$_smarty_tpl->tpl_vars['commentLevel']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers1']['total']);
?></div><?php endfor; endif; ?>
    <?php }elseif($_smarty_tpl->tpl_vars['currentLevel']->value==$_smarty_tpl->tpl_vars['commentLevel']->value&&!$_smarty_tpl->tpl_vars['comment']->first){?>
        </div>
    <?php }?>

    
    <?php $_smarty_tpl->tpl_vars['currentLevel'] = new Smarty_variable($_smarty_tpl->tpl_vars['commentLevel']->value, null, 0);?>

    
    <div class="comment-wrapper js-comment-wrapper" data-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getId();?>
">

    
    
        <?php echo smarty_function_component(array('_default_short'=>'comment','comment'=>$_smarty_tpl->tpl_vars['comment']->value,'dateReadLast'=>(isset($_smarty_tpl->tpl_vars_local['dateReadLast']) ? $_smarty_tpl->tpl_vars_local['dateReadLast']->value : null),'authorId'=>(isset($_smarty_tpl->tpl_vars_local['authorId']) ? $_smarty_tpl->tpl_vars_local['authorId']->value : null),'authorText'=>(isset($_smarty_tpl->tpl_vars_local['authorText']) ? $_smarty_tpl->tpl_vars_local['authorText']->value : null),'showReply'=>!(isset($_smarty_tpl->tpl_vars_local['forbidAdd']) ? $_smarty_tpl->tpl_vars_local['forbidAdd']->value : null)||(isset($_smarty_tpl->tpl_vars_local['showReply']) ? $_smarty_tpl->tpl_vars_local['showReply']->value : null),'params'=>(isset($_smarty_tpl->tpl_vars_local['commentParams']) ? $_smarty_tpl->tpl_vars_local['commentParams']->value : null)),$_smarty_tpl);?>

    

    
    <?php if ($_smarty_tpl->tpl_vars['comment']->last){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['name'] = 'closewrappers2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currentLevel']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['closewrappers2']['total']);
?>
            </div>
        <?php endfor; endif; ?>
    <?php }?>
<?php }
if (!$_smarty_tpl->tpl_vars['comment']->_loop) {
?>
    <?php echo smarty_function_component(array('_default_short'=>'alert','mods'=>'empty','classes'=>'js-comments-empty','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty']),$_smarty_tpl);?>

<?php } ?><?php }} ?>
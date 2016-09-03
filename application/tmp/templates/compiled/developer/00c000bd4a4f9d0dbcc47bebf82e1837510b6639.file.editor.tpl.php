<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/framework/frontend/components/editor/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29308273857c79542784b74-67195475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00c000bd4a4f9d0dbcc47bebf82e1837510b6639' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/editor/editor.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29308273857c79542784b74-67195475',
  'function' => 
  array (
    'editor_textarea' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'component' => 0,
    '_uid' => 0,
    'type' => 0,
    'set' => 0,
    '_mediaUid' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7954288a685_11772684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7954288a685_11772684')) {function content_57c7954288a685_11772684($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hookb')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/block.hookb.php';
if (!is_callable('smarty_function_asset')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.asset.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('editor', null, 0);?>


<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable(((isset($_smarty_tpl->tpl_vars_local['type']) ? $_smarty_tpl->tpl_vars_local['type']->value : null) ? (isset($_smarty_tpl->tpl_vars_local['type']) ? $_smarty_tpl->tpl_vars_local['type']->value : null) : Config::Get('view.wysiwyg') ? 'visual' : 'markup'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['set'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['set']) ? $_smarty_tpl->tpl_vars_local['set']->value : null))===null||$tmp==='' ? 'default' : $tmp), null, 0);?>


<?php $_smarty_tpl->tpl_vars['_uid'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['id']) ? $_smarty_tpl->tpl_vars_local['id']->value : null))===null||$tmp==='' ? (($_smarty_tpl->tpl_vars['component']->value).(rand(0,'10e10'))) : $tmp), null, 0);?>


<?php $_smarty_tpl->tpl_vars['_mediaUid'] = new Smarty_variable("media".((string)$_smarty_tpl->tpl_vars['_uid']->value), null, 0);?>



<?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?><?php if (!function_exists('smarty_template_function_editor_textarea')) {
    function smarty_template_function_editor_textarea($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['editor_textarea']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'textarea','name'=>(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null),'value'=>(isset($_smarty_tpl->tpl_vars_local['value']) ? $_smarty_tpl->tpl_vars_local['value']->value : null),'label'=>(isset($_smarty_tpl->tpl_vars_local['label']) ? $_smarty_tpl->tpl_vars_local['label']->value : null),'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null),'classes'=>(isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null),'id'=>$_smarty_tpl->tpl_vars['_uid']->value,'attributes'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null),'rules'=>(isset($_smarty_tpl->tpl_vars_local['rules']) ? $_smarty_tpl->tpl_vars_local['rules']->value : null),'entityField'=>(isset($_smarty_tpl->tpl_vars_local['entityField']) ? $_smarty_tpl->tpl_vars_local['entityField']->value : null),'entity'=>(isset($_smarty_tpl->tpl_vars_local['entity']) ? $_smarty_tpl->tpl_vars_local['entity']->value : null),'inputClasses'=>((string)(isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null))." ".((string)(isset($_smarty_tpl->tpl_vars_local['inputClasses']) ? $_smarty_tpl->tpl_vars_local['inputClasses']->value : null)),'inputAttributes'=>array_merge((($tmp = @(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null))===null||$tmp==='' ? array() : $tmp),array('data-editor-type'=>$_smarty_tpl->tpl_vars['type']->value,'data-editor-set'=>$_smarty_tpl->tpl_vars['set']->value,'data-editor-media'=>$_smarty_tpl->tpl_vars['_mediaUid']->value)),'note'=>(isset($_smarty_tpl->tpl_vars_local['note']) ? $_smarty_tpl->tpl_vars_local['note']->value : null),'rows'=>(($tmp = @(isset($_smarty_tpl->tpl_vars_local['rows']) ? $_smarty_tpl->tpl_vars_local['rows']->value : null))===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if ($_smarty_tpl->tpl_vars['type']->value=='visual'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>'editor_visual')); $_block_repeat=true; echo smarty_block_hookb(array('run'=>'editor_visual'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo smarty_function_asset(array('type'=>'js','file'=>"Component@editor.vendor/tinymce/js/tinymce/tinymce.min"),$_smarty_tpl);?>

		<?php echo smarty_function_asset(array('type'=>'js','file'=>"Component@editor.vendor/tinymce/js/tinymce/jquery.tinymce.min"),$_smarty_tpl);?>

		<?php echo smarty_function_asset(array('type'=>'js','file'=>"Component@editor.visual"),$_smarty_tpl);?>


		<?php smarty_template_function_editor_textarea($_smarty_tpl,array());?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>'editor_visual'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php }else{ ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>'editor_markup')); $_block_repeat=true; echo smarty_block_hookb(array('run'=>'editor_markup'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo smarty_function_asset(array('type'=>'js','file'=>"Component@editor.vendor/markitup/jquery.markitup"),$_smarty_tpl);?>

		<?php echo smarty_function_asset(array('type'=>'js','file'=>"Component@editor.markup"),$_smarty_tpl);?>


		<?php echo smarty_function_asset(array('type'=>'css','file'=>"Component@editor.vendor/markitup/skins/livestreet/style"),$_smarty_tpl);?>

		<?php echo smarty_function_asset(array('type'=>'css','file'=>"Component@editor.vendor/markitup/sets/livestreet/style"),$_smarty_tpl);?>

		<?php echo smarty_function_asset(array('type'=>'css','file'=>"Component@editor.editor"),$_smarty_tpl);?>


		<?php smarty_template_function_editor_textarea($_smarty_tpl,array());?>


		<?php if ((($tmp = @(isset($_smarty_tpl->tpl_vars_local['help']) ? $_smarty_tpl->tpl_vars_local['help']->value : null))===null||$tmp==='' ? true : $tmp)){?>
			<?php echo $_smarty_tpl->getSubTemplate ('./editor.markup.help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('targetId'=>$_smarty_tpl->tpl_vars['_uid']->value), 0);?>

		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>'editor_markup'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php echo smarty_function_component(array('_default_short'=>'media','sMediaTargetType'=>(isset($_smarty_tpl->tpl_vars_local['mediaTargetType']) ? $_smarty_tpl->tpl_vars_local['mediaTargetType']->value : null),'sMediaTargetId'=>(isset($_smarty_tpl->tpl_vars_local['mediaTargetId']) ? $_smarty_tpl->tpl_vars_local['mediaTargetId']->value : null),'id'=>$_smarty_tpl->tpl_vars['_mediaUid']->value,'assign'=>'mediaModal'),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['sLayoutAfter'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['sLayoutAfter']->value)." ".((string)$_smarty_tpl->tpl_vars['mediaModal']->value), null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['sLayoutAfter'] = clone $_smarty_tpl->tpl_vars['sLayoutAfter']; $_ptr = $_ptr->parent; }?><?php }} ?>
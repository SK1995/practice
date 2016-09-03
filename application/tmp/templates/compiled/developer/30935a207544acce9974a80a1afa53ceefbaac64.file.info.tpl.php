<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:29
         compiled from "/home/you/php/practice/application/frontend/components/user/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13963556857c7959549d717-31564381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30935a207544acce9974a80a1afa53ceefbaac64' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user/info.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13963556857c7959549d717-31564381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'geoTarget' => 0,
    'items' => 0,
    'userfields' => 0,
    'field' => 0,
    'invitedByUser' => 0,
    'users' => 0,
    'userInvited' => 0,
    'blogs' => 0,
    'blog' => 0,
    'blogUser' => 0,
    'session' => 0,
    'aLang' => 0,
    'iCountFriendsUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7959562d5a1_81844622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7959562d5a1_81844622')) {function content_57c7959562d5a1_81844622($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_date_format')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_insert_block')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/insert.block.php';
?>

<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['user']) ? $_smarty_tpl->tpl_vars_local['user']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['session'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getSession(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['geoTarget'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getGeoTarget(), null, 0);?>

<?php echo smarty_function_hook(array('run'=>'user_info_begin','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>




<?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileAbout()){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('user_info_about', null, null); ob_start(); ?>
		<div class="text">
			<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileAbout();?>

		</div>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.about.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'info-group','title'=>$_tmp1,'html'=>Smarty::$_smarty_vars['capture']['user_info_about']),$_smarty_tpl);?>

<?php }?>



<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['userfields'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUserFieldValues(true,array('')), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileSex()!='other'){?>
	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.gender'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileSex()=='man'){?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.gender_male'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.gender_female'),$_smarty_tpl);?>
<?php }?><?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp2,'content'=>$_tmp3);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileBirthday()){?>
	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.birthday'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['user']->value->getProfileBirthday(),'format'=>"j F Y",'notz'=>true),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp4,'content'=>$_tmp5);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['geoTarget']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('info_private_geo', null, null); ob_start(); ?>
		<span itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
			<?php if ($_smarty_tpl->tpl_vars['geoTarget']->value->getCountryId()){?>
				<a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
country/<?php echo $_smarty_tpl->tpl_vars['geoTarget']->value->getCountryId();?>
/" itemprop="country-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->getProfileCountry(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['geoTarget']->value->getCityId()){?>,<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['geoTarget']->value->getCityId()){?>
				<a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo $_smarty_tpl->tpl_vars['geoTarget']->value->getCityId();?>
/" itemprop="locality"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->getProfileCity(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }?>
		</span>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.place'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp6,'content'=>Smarty::$_smarty_vars['capture']['info_private_geo']);?>
<?php }?>

<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.personal.title'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'info-group','title'=>$_tmp7,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>




<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['userfields'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUserFieldValues(true,array('contact')), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
	<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>"<i class=\"icon-contact icon-contact-".((string)$_smarty_tpl->tpl_vars['field']->value->getName())."\"></i> ".$_tmp8,'content'=>$_smarty_tpl->tpl_vars['field']->value->getValue(true,true));?>
<?php } ?>

<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.contact'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'info-group','name'=>'contact','title'=>$_tmp9,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>




<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['userfields'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUserFieldValues(true,array('social')), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
	<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>"<i class=\"icon-contact icon-contact-".((string)$_smarty_tpl->tpl_vars['field']->value->getName())."\"></i> ".$_tmp10,'content'=>$_smarty_tpl->tpl_vars['field']->value->getValue(true,true));?>
<?php } ?>

<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.social_networks'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'info-group','name'=>'social-networks','title'=>$_tmp11,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>





<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>


<?php if ((isset($_smarty_tpl->tpl_vars_local['invitedByUser']) ? $_smarty_tpl->tpl_vars_local['invitedByUser']->value : null)){?>
	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.invited_by'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp12,'content'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['invitedByUser']->value->getUserWebPath())."\">".((string)$_smarty_tpl->tpl_vars['invitedByUser']->value->getDisplayName())."</a>");?>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars_local['usersInvited']) ? $_smarty_tpl->tpl_vars_local['usersInvited']->value : null)){?>
	<?php $_smarty_tpl->tpl_vars['users'] = new Smarty_variable('', null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['userInvited'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userInvited']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['usersInvited']) ? $_smarty_tpl->tpl_vars_local['usersInvited']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userInvited']->key => $_smarty_tpl->tpl_vars['userInvited']->value){
$_smarty_tpl->tpl_vars['userInvited']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['users'] = new Smarty_variable(($_smarty_tpl->tpl_vars['users']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['userInvited']->value->getUserWebPath())."\">".((string)$_smarty_tpl->tpl_vars['userInvited']->value->getDisplayName())."</a>&nbsp;"), null, 0);?>
	<?php } ?>

	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.invited'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp13,'content'=>$_smarty_tpl->tpl_vars['users']->value);?>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars_local['blogsCreated']) ? $_smarty_tpl->tpl_vars_local['blogsCreated']->value : null)){?>
	<?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['blogsCreated']) ? $_smarty_tpl->tpl_vars_local['blogsCreated']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
?>
		<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blog']->last){?><?php echo ", ";?><?php }?><?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp14."</a>".$_tmp15), null, 0);?>
	<?php } ?>

	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_created'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp16,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars_local['blogsAdminister']) ? $_smarty_tpl->tpl_vars_local['blogsAdminister']->value : null)){?>
	<?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['blogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogUser']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['blogsAdminister']) ? $_smarty_tpl->tpl_vars_local['blogsAdminister']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blogUser']->key => $_smarty_tpl->tpl_vars['blogUser']->value){
$_smarty_tpl->tpl_vars['blogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['blogUser']->iteration++;
 $_smarty_tpl->tpl_vars['blogUser']->last = $_smarty_tpl->tpl_vars['blogUser']->iteration === $_smarty_tpl->tpl_vars['blogUser']->total;
?>
		<?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable($_smarty_tpl->tpl_vars['blogUser']->value->getBlog(), null, 0);?>
		<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blogUser']->last){?><?php echo ", ";?><?php }?><?php $_tmp18=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp17."</a>".$_tmp18), null, 0);?>
	<?php } ?>

	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_admin'),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp19,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars_local['blogsModerate']) ? $_smarty_tpl->tpl_vars_local['blogsModerate']->value : null)){?>
	<?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['blogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogUser']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['blogsModerate']) ? $_smarty_tpl->tpl_vars_local['blogsModerate']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blogUser']->key => $_smarty_tpl->tpl_vars['blogUser']->value){
$_smarty_tpl->tpl_vars['blogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['blogUser']->iteration++;
 $_smarty_tpl->tpl_vars['blogUser']->last = $_smarty_tpl->tpl_vars['blogUser']->iteration === $_smarty_tpl->tpl_vars['blogUser']->total;
?>
		<?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable($_smarty_tpl->tpl_vars['blogUser']->value->getBlog(), null, 0);?>
		<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp20=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blogUser']->last){?><?php echo ", ";?><?php }?><?php $_tmp21=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp20."</a>".$_tmp21), null, 0);?>
	<?php } ?>

	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_mod'),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp22,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars_local['blogsJoined']) ? $_smarty_tpl->tpl_vars_local['blogsJoined']->value : null)){?>
	<?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable('', null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['blogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogUser']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['blogsJoined']) ? $_smarty_tpl->tpl_vars_local['blogsJoined']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blogUser']->key => $_smarty_tpl->tpl_vars['blogUser']->value){
$_smarty_tpl->tpl_vars['blogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['blogUser']->iteration++;
 $_smarty_tpl->tpl_vars['blogUser']->last = $_smarty_tpl->tpl_vars['blogUser']->iteration === $_smarty_tpl->tpl_vars['blogUser']->total;
?>
		<?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable($_smarty_tpl->tpl_vars['blogUser']->value->getBlog(), null, 0);?>
		<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['blogUser']->last){?><?php echo ", ";?><?php }?><?php $_tmp24=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable(($_smarty_tpl->tpl_vars['blogs']->value).("<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp23."</a>".$_tmp24), null, 0);?>
	<?php } ?>

	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.blogs_joined'),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp25,'content'=>$_smarty_tpl->tpl_vars['blogs']->value);?>
<?php }?>


<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.date_registration'),$_smarty_tpl);?>
<?php $_tmp26=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['user']->value->getDateRegister()),$_smarty_tpl);?>
<?php $_tmp27=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp26,'content'=>$_tmp27);?>


<?php if ($_smarty_tpl->tpl_vars['session']->value){?>
	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.date_last_session'),$_smarty_tpl);?>
<?php $_tmp28=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['session']->value->getDateLast()),$_smarty_tpl);?>
<?php $_tmp29=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('label'=>$_tmp28,'content'=>$_tmp29);?>
<?php }?>

<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.activity.title'),$_smarty_tpl);?>
<?php $_tmp30=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'info-group','name'=>'activity','title'=>$_tmp30,'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>



<?php if ((isset($_smarty_tpl->tpl_vars_local['friends']) ? $_smarty_tpl->tpl_vars_local['friends']->value : null)){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('user_info_friends', null, null); ob_start(); ?>
		<?php echo smarty_function_component(array('_default_short'=>'user','template'=>'list-avatar','users'=>(isset($_smarty_tpl->tpl_vars_local['friends']) ? $_smarty_tpl->tpl_vars_local['friends']->value : null)),$_smarty_tpl);?>

	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php echo smarty_function_component(array('_default_short'=>'user','template'=>'info-group','title'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['user']->value->getUserWebPath())."friends/\">".((string)$_smarty_tpl->tpl_vars['aLang']->value['user']['friends']['title'])."</a> (".((string)$_smarty_tpl->tpl_vars['iCountFriendsUser']->value).")",'html'=>Smarty::$_smarty_vars['capture']['user_info_friends']),$_smarty_tpl);?>

<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array('user_info_wall', null, null); ob_start(); ?>
	<?php echo smarty_insert_block(array('block' => 'wall', 'params' => array('classes'=>'js-wall-default','user_id'=>$_smarty_tpl->tpl_vars['user']->value->getId())),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'wall.title'),$_smarty_tpl);?>
<?php $_tmp31=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'info-group','name'=>'wall','title'=>$_tmp31,'html'=>Smarty::$_smarty_vars['capture']['user_info_wall']),$_smarty_tpl);?>



<?php echo smarty_function_hook(array('run'=>'user_info_end','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

<?php }} ?>
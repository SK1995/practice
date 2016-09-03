<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/charts/graph.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143427149457c794f2423d85-78273684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671bb55b3127ee70e8ba969ac040e8a38ebac712' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/charts/graph.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143427149457c794f2423d85-78273684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sGraphTitle' => 0,
    'sUrl' => 0,
    'bShowGraphTypeSelect' => 0,
    'sGraphType' => 0,
    'sCurrentGraphType' => 0,
    'aLang' => 0,
    'aTemplatePathPlugin' => 0,
    'sCurrentGraphPeriod' => 0,
    'bShowCustomPeriodFields' => 0,
    '_aRequest' => 0,
    'sValueSuffix' => 0,
    'aStats' => 0,
    'aData' => 0,
    'iPointsStepForLabels' => 0,
    'sName' => 0,
    'bShowTable' => 0,
    'aStatsItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f24995a3_57002913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f24995a3_57002913')) {function content_57c794f24995a3_57002913($_smarty_tpl) {?><?php if (!is_callable('smarty_function_request_filter')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.request_filter.php';
?>

<div class="graph-wrapper">
	<?php if ($_smarty_tpl->tpl_vars['sGraphTitle']->value){?>
		<header class="graph-header">
			<h2 class="graph-title"><?php echo $_smarty_tpl->tpl_vars['sGraphTitle']->value;?>
</h2>
		</header>
	<?php }?>

	<div class="graph">
		<div class="graph-filter">
			<form action="<?php echo $_smarty_tpl->tpl_vars['sUrl']->value;?>
" enctype="application/x-www-form-urlencoded" method="get">
				
				<?php if ($_smarty_tpl->tpl_vars['bShowGraphTypeSelect']->value){?>
					<select name="filter[graph_type]" class="width-150">
						<?php  $_smarty_tpl->tpl_vars['sGraphType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sGraphType']->_loop = false;
 $_from = array(PluginAdmin_ModuleStats::DATA_TYPE_REGISTRATIONS,PluginAdmin_ModuleStats::DATA_TYPE_TOPICS,PluginAdmin_ModuleStats::DATA_TYPE_COMMENTS,PluginAdmin_ModuleStats::DATA_TYPE_VOTINGS); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sGraphType']->key => $_smarty_tpl->tpl_vars['sGraphType']->value){
$_smarty_tpl->tpl_vars['sGraphType']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['sGraphType']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sCurrentGraphType']->value==$_smarty_tpl->tpl_vars['sGraphType']->value){?>selected="selected"<?php }?>>
								<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['graph']['graph_type'][$_smarty_tpl->tpl_vars['sGraphType']->value];?>

							</option>
						<?php } ?>
					</select>

					&nbsp;
				<?php }?>


				
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/preset_interval.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sName'=>'filter[graph_period]','sCurrentPeriod'=>$_smarty_tpl->tpl_vars['sCurrentGraphPeriod']->value), 0);?>


				&nbsp;&nbsp;&nbsp;

				
				<?php if ($_smarty_tpl->tpl_vars['bShowCustomPeriodFields']->value){?>
					<input type="text" name="filter[date_start]" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['filter']['date_start'];?>
" class="input-text width-100 date-picker-php" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['from'];?>
" />
					&nbsp;&ndash;&nbsp;
					<input type="text" name="filter[date_finish]" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['filter']['date_finish'];?>
" class="input-text width-100 date-picker-php" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['to'];?>
" />
					
					<?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['filter']['date_start']){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['sUrl']->value;?>
<?php echo smarty_function_request_filter(array('name'=>array('date_start','date_finish'),'value'=>array(null,null)),$_smarty_tpl);?>
"><i class="icon-remove"></i></a>
					<?php }?>

					&nbsp;&nbsp;
				<?php }?>


				<button type="submit" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['show'];?>
</button>
			</form>
		</div>

		<div class="graph-body">
			<div id="admin_graph_container"></div>
		</div>

		<script>
			jQuery(document).ready(function($) {
				
				Highcharts.setOptions({
					lang: {
						resetZoom: '<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['reset_zoom'];?>
',
						resetZoomTitle: '<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['reset_zoom_tip'];?>
'
					}
				});
				$('#admin_graph_container').highcharts({
					chart: {
						type: 'areaspline',
						height: 200,
						
						//margin: 0,
						spacingBottom: 0,
						spacingLeft: 0,
						spacingRight: 0,
						spacingTop: 10,
						zoomType: 'x'
					},
					title: {
						text: ''
					},
					yAxis: {
						title: {
							text: ''
						},
						gridLineColor: '#f1f1f1',
						gridLineWidth: 1,
						allowDecimals: false
					},
					tooltip: {
						animation: false,
						shadow: false,
						borderWidth: 0,
						// .highcharts-tooltip
						shared: true,
						valueSuffix: ' <?php echo $_smarty_tpl->tpl_vars['sValueSuffix']->value;?>
'
					},
					credits: {
						enabled: false
					},
					legend: {
						enabled: false
					},
					plotOptions: {
						areaspline: {
							fillOpacity: 0.5
						}
					},
					xAxis: {
						categories: [
							<?php  $_smarty_tpl->tpl_vars['aData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aData']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aStats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aData']->key => $_smarty_tpl->tpl_vars['aData']->value){
$_smarty_tpl->tpl_vars['aData']->_loop = true;
?>
								'<?php echo $_smarty_tpl->tpl_vars['aData']->value['date'];?>
'<?php if (!$_smarty_tpl->tpl_vars['aData']->value['last']){?>,<?php }?>
							<?php } ?>
						],
						labels: {
							
							staggerLines: 1,
							
							step: <?php echo $_smarty_tpl->tpl_vars['iPointsStepForLabels']->value;?>

						}
					},
					series: [{
						name: '<?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
',
						color: '#8FCFEA',
						data: [
							<?php  $_smarty_tpl->tpl_vars['aData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aData']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aStats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataCycle']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['aData']->key => $_smarty_tpl->tpl_vars['aData']->value){
$_smarty_tpl->tpl_vars['aData']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['DataCycle']['index']++;
?>
								[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['DataCycle']['index'];?>
, <?php echo $_smarty_tpl->tpl_vars['aData']->value['count'];?>
]<?php if (!$_smarty_tpl->tpl_vars['aData']->value['last']){?>,<?php }?>
							<?php } ?>
						]
					}]
				});
			});
		</script>
	</div>


	

	<?php if ($_smarty_tpl->tpl_vars['bShowTable']->value){?>
		<div class="graph-table">
			<button type="button" class="button" id="admin_show_graph_data_in_table"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['graph']['values_in_table'];?>
</button>

			<div id="admin_graph_table_data" style="display: none">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['graph']['date'];?>
</th>
							<th><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['graph']['count'];?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['aStatsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aStatsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aStats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['aStatsItem']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['aStatsItem']->key => $_smarty_tpl->tpl_vars['aStatsItem']->value){
$_smarty_tpl->tpl_vars['aStatsItem']->_loop = true;
 $_smarty_tpl->tpl_vars['aStatsItem']->iteration++;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['aStatsItem']->iteration;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['aStatsItem']->value['date'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['aStatsItem']->value['count'];?>
</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	<?php }?>
</div>
<?php }} ?>
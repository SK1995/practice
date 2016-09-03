<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/new_items_table_line_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133296074157c794f261d6d3-99089355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17aa1a9c8ace73a239166e7995df53b4df5089f' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/index/new_items_table_line_stats.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133296074157c794f261d6d3-99089355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sGraphLineTitle' => 0,
    'sObjectsType' => 0,
    'sDataType' => 0,
    'aDataGrowth' => 0,
    'iNegativePercentage' => 0,
    'iNeutralPercentage' => 0,
    'iPositivePercentage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f2680c14_65495617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f2680c14_65495617')) {function content_57c794f2680c14_65495617($_smarty_tpl) {?>

<table class="table stats-line-table">
	<tbody>
		<tr>
			<td class="info-tip">
				<i class="icon-info-sign" title="<?php echo $_smarty_tpl->tpl_vars['sGraphLineTitle']->value;?>
: позитивные: <?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['positive'];?>
, негативные: <?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['negative'];?>
, нейтральные: <?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['neutral'];?>
, всего: <?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['total'];?>
"></i>
			</td>
			<td class="line-block">
				<div class="ratings-graph" title="<?php echo $_smarty_tpl->tpl_vars['sGraphLineTitle']->value;?>
">

					<?php if ($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['total']){?>
						<?php $_smarty_tpl->tpl_vars['iNegativePercentage'] = new Smarty_variable(number_format($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['negative']*100/$_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['total'],2,'.',''), null, 0);?>

						<div class="negative" style="width: <?php echo $_smarty_tpl->tpl_vars['iNegativePercentage']->value;?>
%">
							<?php if ($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['negative']){?>
								<div class="inner-value">
									<?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['negative'];?>

								</div>
							<?php }?>
						</div>

						<?php $_smarty_tpl->tpl_vars['iNeutralPercentage'] = new Smarty_variable(number_format($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['neutral']*100/$_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['total'],2,'.',''), null, 0);?>

						<div class="neutral" style="width: <?php echo $_smarty_tpl->tpl_vars['iNeutralPercentage']->value;?>
%">
							<?php if ($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['neutral']){?>
								<div class="inner-value">
									<?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['neutral'];?>

								</div>
							<?php }?>
						</div>

						<?php $_smarty_tpl->tpl_vars['iPositivePercentage'] = new Smarty_variable(number_format($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['positive']*100/$_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['total'],2,'.',''), null, 0);?>

						<div class="positive" style="width: <?php echo $_smarty_tpl->tpl_vars['iPositivePercentage']->value;?>
%">
							<?php if ($_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['positive']){?>
								<div class="inner-value">
									<?php echo $_smarty_tpl->tpl_vars['aDataGrowth']->value[$_smarty_tpl->tpl_vars['sObjectsType']->value][$_smarty_tpl->tpl_vars['sDataType']->value]['positive'];?>

								</div>
							<?php }?>
						</div>
					<?php }?>

				</div>
			</td>
		</tr>
	</tbody>
</table>
<?php }} ?>
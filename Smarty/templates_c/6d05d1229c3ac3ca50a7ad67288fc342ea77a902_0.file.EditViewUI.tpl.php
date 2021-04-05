<?php
/* Smarty version 3.1.30, created on 2021-01-21 20:01:53
  from "/var/www/html/desarrollocartera/Smarty/templates/EditViewUI.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600a3211276f25_38847563',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    '6d05d1229c3ac3ca50a7ad67288fc342ea77a902' =>
    array (
      0 => '/var/www/html/desarrollocartera/Smarty/templates/EditViewUI.tpl',
      1 => 1611280893,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
),false)) {
function content_600a3211276f25_38847563 (Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[0][0])) {?>
			<?php $_smarty_tpl->_assignInScope('uitype', $_smarty_tpl->tpl_vars['maindata']->value[0][0]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('uitype', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[1][0])) {?>
			<?php $_smarty_tpl->_assignInScope('fldlabel', $_smarty_tpl->tpl_vars['maindata']->value[1][0]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('fldlabel', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[1][1])) {?>
			<?php $_smarty_tpl->_assignInScope('fldlabel_sel', $_smarty_tpl->tpl_vars['maindata']->value[1][1]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('fldlabel_sel', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[1][2])) {?>
			<?php $_smarty_tpl->_assignInScope('fldlabel_combo', $_smarty_tpl->tpl_vars['maindata']->value[1][2]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('fldlabel_combo', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[1][3])) {?>
			<?php $_smarty_tpl->_assignInScope('fldlabel_other', $_smarty_tpl->tpl_vars['maindata']->value[1][3]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('fldlabel_other', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[2][0])) {?>
			<?php $_smarty_tpl->_assignInScope('fldname', $_smarty_tpl->tpl_vars['maindata']->value[2][0]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('fldname', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[3][0])) {?>
			<?php $_smarty_tpl->_assignInScope('fldvalue', $_smarty_tpl->tpl_vars['maindata']->value[3][0]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('fldvalue', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[3][1])) {?>
			<?php $_smarty_tpl->_assignInScope('secondvalue', $_smarty_tpl->tpl_vars['maindata']->value[3][1]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('secondvalue', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[3][2])) {?>
			<?php $_smarty_tpl->_assignInScope('thirdvalue', $_smarty_tpl->tpl_vars['maindata']->value[3][2]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('thirdvalue', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[4])) {?>
			<?php $_smarty_tpl->_assignInScope('typeofdata', $_smarty_tpl->tpl_vars['maindata']->value[4]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('typeofdata', '');
?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[5][0])) {?>
			<?php $_smarty_tpl->_assignInScope('vt_tab', $_smarty_tpl->tpl_vars['maindata']->value[5][0]);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('vt_tab', '');
?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['typeofdata']->value == 'M') {?>
			<?php $_smarty_tpl->_assignInScope('mandatory_field', "*");
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('mandatory_field', '');
?>
		<?php }?>

		<?php $_smarty_tpl->_assignInScope('usefldlabel', $_smarty_tpl->tpl_vars['fldlabel']->value);
?>
		<?php $_smarty_tpl->_assignInScope('fldhelplink', '');
?>
		<?php if (isset($_smarty_tpl->tpl_vars['FIELDHELPINFO']->value) && isset($_smarty_tpl->tpl_vars['FIELDHELPINFO']->value[$_smarty_tpl->tpl_vars['fldname']->value])) {?>
			<?php $_smarty_tpl->_assignInScope('fldhelplinkimg', vtiger_imageurl('help_icon.gif',$_smarty_tpl->tpl_vars['THEME']->value));
?>
			<?php $_smarty_tpl->_assignInScope('fldhelplink', "<img style='cursor:pointer' onclick='vtlib_field_help_show(this, \"".((string)$_smarty_tpl->tpl_vars['fldname']->value)."\");' border=0 src='".((string)$_smarty_tpl->tpl_vars['fldhelplinkimg']->value)."'>");
?>
			<?php if ($_smarty_tpl->tpl_vars['uitype']->value != '10') {?>
				<?php $_smarty_tpl->_assignInScope('usefldlabel', ((string)$_smarty_tpl->tpl_vars['fldlabel']->value)." ".((string)$_smarty_tpl->tpl_vars['fldhelplink']->value));
?>
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['uitype']->value == '10') {?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
			<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
			<?php echo $_smarty_tpl->tpl_vars['fldlabel']->value['displaylabel'];?>


			<?php $_smarty_tpl->_assignInScope('use_parentmodule', $_smarty_tpl->tpl_vars['fldlabel']->value['options'][0]);
?>
			<?php $_smarty_tpl->_assignInScope('vtui10func', getvtlib_open_popup_window_function($_smarty_tpl->tpl_vars['use_parentmodule']->value,$_smarty_tpl->tpl_vars['fldname']->value,$_smarty_tpl->tpl_vars['MODULE']->value));
?>
			<?php if (count($_smarty_tpl->tpl_vars['fldlabel']->value['options']) == 1) {?>
				<input type='hidden' class='small' name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" value="<?php echo $_smarty_tpl->tpl_vars['use_parentmodule']->value;?>
">
			<?php } else { ?>
				<br>
				<?php if ($_smarty_tpl->tpl_vars['fromlink']->value == 'qcreate') {?>
				<select id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" class="small" style="max-width:175px" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" onChange='document.QcEditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display.value=""; document.QcEditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
.value="";'>
				<?php } else { ?>
				<select id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" class="small" style="max-width:175px" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" onChange='document.EditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display.value=""; document.EditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
.value="";document.getElementById("qcform").innerHTML=""'>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldlabel']->value['options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"
					<?php if ($_smarty_tpl->tpl_vars['fldlabel']->value['selected'] == $_smarty_tpl->tpl_vars['option']->value) {?>selected<?php }?>>
					<?php echo getTranslatedString($_smarty_tpl->tpl_vars['option']->value,$_smarty_tpl->tpl_vars['option']->value);?>

					</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['fldhelplink']->value;?>


			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['entityid'];?>
">

				<div style="position: relative;">
				<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['searchfields']))) {?>
					<?php $_smarty_tpl->_assignInScope('autocomp', $_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']);
?>
					<input
						id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						type="text"
						style="border:1px solid #bababa;"
						value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['displayvalue'];?>
"
						autocomplete="off"
						class="autocomplete-input"
						data-autocomp='<?php echo json_encode($_smarty_tpl->tpl_vars['maindata']->value["extendedfieldinfo"]);?>
'>&nbsp;
				<?php } else { ?>
					<input
						id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						readonly
						type="text"
						style="border:1px solid #bababa;"
						value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['displayvalue'];?>
">&nbsp;
				<?php }?>
				<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
"
alt="<?php echo getTranslatedString('LBL_SELECT');?>
" title="<?php echo getTranslatedString('LBL_SELECT');?>
" onclick='return <?php echo $_smarty_tpl->tpl_vars['vtui10func']->value;?>
("<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
","<?php if (isset($_smarty_tpl->tpl_vars['ID']->value)) {
echo $_smarty_tpl->tpl_vars['ID']->value;
}?>");' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;
				<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"
alt="<?php echo getTranslatedString('LBL_CLEAR');?>
" title="<?php echo getTranslatedString('LBL_CLEAR');?>
" onClick="this.form.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
.value=''; this.form.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display.value=''; return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;
				<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['searchfields']))) {?>
					<div id="listbox-unique-id" role="listbox" class="">
						<ul class="slds-listbox slds-listbox_vertical slds-dropdown slds-dropdown_fluid relation-autocomplete__target" style="opacity: 0; width: 100%; list-style-type: none; width: 90%; left: 0; transform: translateX(0); max-width: none;" role="presentation"></ul>
					</div>
				<?php }?>
				</div>
			</td>
			<?php if ($_smarty_tpl->tpl_vars['use_parentmodule']->value == 'fideicomisos' && ($_smarty_tpl->tpl_vars['fldname']->value == 'cf_12372'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_12324'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_12171'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_12247'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_12095'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_13764'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_12339'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_14494'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_14473'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_13952'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_12370'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_13345'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_12347'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_13210'
                                                                                     || $_smarty_tpl->tpl_vars['fldname']->value == 'cf_13209')) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
				if ('<?php echo $_smarty_tpl->tpl_vars['use_parentmodule']->value;?>
' == 'fideicomisos') {
					var id_fideicomiso = '<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['entityid'];?>
';
					$(".lvtHeaderText").text($(".lvtHeaderText").text() + " - <?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['displayvalue'];?>
");
					<?php echo '$.ajax({
						url: "include/Ajax/Fideicomisos/fideicomisos.php",
						type: "POST",
						data: {operacion: "consulta_fideicomiso", id_fideicomiso: id_fideicomiso},
						success: function(result){
							var fideicomiso = JSON.parse(result);
							$(".lvtHeaderText").text($(".lvtHeaderText").text() + " - " + fideicomiso["cf_12048"]);
						}
					})';?>

				}
				<?php echo '</script'; ?>
>
			<?php }?>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 2) {?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small"><?php }?>
			</td>
			<td width=30% align=left class="dvtCellInfo">
				<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['searchfields']))) {?>
					<?php $_smarty_tpl->_assignInScope('autocomp', $_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']);
?>
					<div style="position: relative;">
					<input
						type="text"
						name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
"
						id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
"
						tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
"
						value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"
						tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
"
						autocomplete="off"
						class="autocomplete-input detailedViewTextBox"
						data-autocomp='<?php echo json_encode($_smarty_tpl->tpl_vars['maindata']->value["extendedfieldinfo"]);?>
' />
						<div id="listbox-unique-id" role="listbox" class="">
							<ul class="slds-listbox slds-listbox_vertical slds-dropdown slds-dropdown_fluid relation-autocomplete__target" style="opacity: 0; width: 100%; list-style-type: none; width: 90%; left: 0; transform: translateX(0); max-width: none;" role="presentation"></ul>
						</div>
					</div>
				<?php } else { ?>
					<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'">
				<?php }?>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 1025) {?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
			<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
			<?php echo $_smarty_tpl->tpl_vars['fldlabel']->value['displaylabel'];?>


			<?php $_smarty_tpl->_assignInScope('use_parentmodule', $_smarty_tpl->tpl_vars['fldlabel']->value['options'][0]);
?>
			<?php $_smarty_tpl->_assignInScope('vtui10func', getvtlib_open_popup_window_function($_smarty_tpl->tpl_vars['use_parentmodule']->value,$_smarty_tpl->tpl_vars['fldname']->value,$_smarty_tpl->tpl_vars['MODULE']->value));
?>
			<?php if (count($_smarty_tpl->tpl_vars['fldlabel']->value['options']) == 1) {?>
				<input type='hidden' class='small' name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" value="<?php echo $_smarty_tpl->tpl_vars['use_parentmodule']->value;?>
">
			<?php } else { ?>
				<br>
				<?php if ($_smarty_tpl->tpl_vars['fromlink']->value == 'qcreate') {?>
				<select id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" class="small" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" onChange='document.QcEditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display.value=""; document.QcEditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
.value="";'>
				<?php } else { ?>
				<select id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" class="small" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_type" onChange='document.EditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display.value=""; document.EditView.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
.value="";document.getElementById("qcform").innerHTML=""'>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldlabel']->value['options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"
					<?php if ($_smarty_tpl->tpl_vars['fldlabel']->value['selected'] == $_smarty_tpl->tpl_vars['option']->value) {?>selected<?php }?>>
					<?php echo getTranslatedString($_smarty_tpl->tpl_vars['option']->value,$_smarty_tpl->tpl_vars['option']->value);?>

					</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['fldhelplink']->value;?>


			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['entityid'];?>
">

				<div style="position: relative;">
				<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['searchfields']))) {?>
					<?php $_smarty_tpl->_assignInScope('autocomp', $_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']);
?>
					<input
						id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						type="text"
						style="border:1px solid #bababa;"
						value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['displayvalue'];?>
"
						autocomplete="off"
						class="autocomplete-input"
						data-autocomp='<?php echo json_encode($_smarty_tpl->tpl_vars['maindata']->value["extendedfieldinfo"]);?>
'>&nbsp;
				<?php } else { ?>
					<input
						id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display"
						type="text"
						style="border:1px solid #bababa;"
						value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['displayvalue'];?>
">&nbsp;
				<?php }?>
				<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"
alt="<?php echo getTranslatedString('LBL_CLEAR');?>
" title="<?php echo getTranslatedString('LBL_CLEAR');?>
" onClick="this.form.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
.value=''; this.form.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display.value=''; return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;
				<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['searchfields']))) {?>
					<div id="listbox-unique-id" role="listbox" class="">
						<ul class="slds-listbox slds-listbox_vertical slds-dropdown slds-dropdown_fluid relation-autocomplete__target" style="opacity: 0; width: 100%; list-style-type: none; width: 90%; left: 0; transform: translateX(0); max-width: none;" role="presentation"></ul>
					</div>
				<?php }?>
				</div>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 3 || $_smarty_tpl->tpl_vars['uitype']->value == 4) {?><!-- Non Editable field, only configured value will be loaded -->
				<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right><font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small"><?php }?></td>
				<td width=30% align=left class="dvtCellInfo"><input readonly type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id ="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODE']->value == 'edit') {?> value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" <?php } else { ?> value="<?php echo $_smarty_tpl->tpl_vars['MOD_SEQ_ID']->value;?>
" <?php }?> class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'"></td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 11 || $_smarty_tpl->tpl_vars['uitype']->value == 1 || $_smarty_tpl->tpl_vars['uitype']->value == 13 || $_smarty_tpl->tpl_vars['uitype']->value == 7) {?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right><font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?></td>
			<td width=30% align=left class="dvtCellInfo"><input type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id ="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'"></td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 9) {?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right><font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['COVERED_PERCENTAGE'];?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?></td>
			<td width=30% align=left class="dvtCellInfo"><input type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id ="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'"></td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 19 || $_smarty_tpl->tpl_vars['uitype']->value == 20) {?>
			<!-- In Add Comment we should not display anything -->
			<?php $_smarty_tpl->_assignInScope('i18nAddComment', getTranslatedString('LBL_ADD_COMMENT',$_smarty_tpl->tpl_vars['MODULE']->value));
?>
			<?php if ($_smarty_tpl->tpl_vars['fldlabel']->value == $_smarty_tpl->tpl_vars['i18nAddComment']->value) {?>
				<?php $_smarty_tpl->_assignInScope('fldvalue', '');
?>
			<?php }?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
					<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
				<?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td colspan=3 class="dvtCellInfo">
				<textarea class="detailedViewTextBox" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" onFocus="this.className='detailedViewTextBoxOn'" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" onBlur="this.className='detailedViewTextBox'" cols="90" rows="8"><?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
</textarea>
				<?php $_smarty_tpl->_assignInScope('i18nSolution', getTranslatedString('Solution',$_smarty_tpl->tpl_vars['MODULE']->value));
?>
				<?php if ($_smarty_tpl->tpl_vars['fldlabel']->value == $_smarty_tpl->tpl_vars['i18nSolution']->value) {?>
				<input type="hidden" name="helpdesk_solution" id="helpdesk_solution" value='<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
'>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['fldname']->value == 'notecontent') || (isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['RTE']) && $_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['RTE'] && vt_hasRTE())) {?>
				<?php echo '<script'; ?>
>
					CKEDITOR.replace('<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
',
					{
						extraPlugins : 'uicolor',
						uiColor: '#dfdff1',
							on : {
								instanceReady : function( ev ) {
									 this.dataProcessor.writer.setRules( 'p',  {
										indent : false,
										breakBeforeOpen : false,
										breakAfterOpen : false,
										breakBeforeClose : false,
										breakAfterClose : false
								});
							}
						}
					});
					var oCKeditor<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
 = CKEDITOR.instances[<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
];
				<?php echo '</script'; ?>
>
				<?php }?>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 21 || $_smarty_tpl->tpl_vars['uitype']->value == 24) {?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
					<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
				<?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width=30% align=left class="dvtCellInfo">
				<textarea value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'" rows=2><?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
</textarea>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 15 || $_smarty_tpl->tpl_vars['uitype']->value == 16 || $_smarty_tpl->tpl_vars['uitype']->value == '31' || $_smarty_tpl->tpl_vars['uitype']->value == '32' || $_smarty_tpl->tpl_vars['uitype']->value == '1613' || $_smarty_tpl->tpl_vars['uitype']->value == '1614') {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
				<?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Calendar') {?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small" style="width:160px;">
				<?php } else { ?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small" style="width:280px;">
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>
" <?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>
><?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
</option>
				<?php
}
} else {
?>

					<option value=""></option>
					<option value="" style='color: #777777' disabled><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NONE'];?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == '1615') {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
				<?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small" style="width:280px;">
				<option value=""><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NONE'];?>
</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<optgroup label="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value[3], 'plarr', false, 'plkey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plkey']->value => $_smarty_tpl->tpl_vars['plarr']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('plvalue', ((string)$_smarty_tpl->tpl_vars['arr']->value[1])."::".((string)$_smarty_tpl->tpl_vars['plkey']->value));
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['plvalue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['plvalue']->value == $_smarty_tpl->tpl_vars['arr']->value[2]) {?>selected<?php }?>><?php echo getTranslatedString($_smarty_tpl->tpl_vars['plarr']->value,$_smarty_tpl->tpl_vars['arr']->value[0]);?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</optgroup>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == '1616') {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
				<?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small" style="width:280px;">
				<option value=""><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NONE'];?>
</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>
" <?php echo $_smarty_tpl->tpl_vars['arr']->value[3];?>
><?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 33 || $_smarty_tpl->tpl_vars['uitype']->value == 3313 || $_smarty_tpl->tpl_vars['uitype']->value == 3314 || $_smarty_tpl->tpl_vars['uitype']->value == 1024) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['columns']))) {?>
					<?php $_smarty_tpl->_assignInScope('mplsize', $_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['columns']);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('mplsize', 4);
?>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['width']))) {?>
					<?php $_smarty_tpl->_assignInScope('mplwidth', $_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['width']);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('mplwidth', 280);
?>
				<?php }?>
				<select MULTIPLE name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" size="<?php echo $_smarty_tpl->tpl_vars['mplsize']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['mplwidth']->value;?>
px;" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>
" <?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>
><?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 53) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php $_smarty_tpl->_assignInScope('check', 1);
?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr', false, 'key_one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_one']->value => $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'sel_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sel_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value != '') {?>
							<?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['check']->value*0);
?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['check']->value*1);
?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<?php $_smarty_tpl->_assignInScope('select_user', '');
?>
				<?php $_smarty_tpl->_assignInScope('select_group', '');
?>
				<?php if ($_smarty_tpl->tpl_vars['check']->value == 0) {?>
					<?php $_smarty_tpl->_assignInScope('select_user', 'checked');
?>
					<?php $_smarty_tpl->_assignInScope('style_user', 'display:block');
?>
					<?php $_smarty_tpl->_assignInScope('style_group', 'display:none');
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('select_group', 'checked');
?>
					<?php $_smarty_tpl->_assignInScope('style_user', 'display:none');
?>
					<?php $_smarty_tpl->_assignInScope('style_group', 'display:block');
?>
				<?php }?>

				<input type="radio" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" name="assigntype" <?php echo $_smarty_tpl->tpl_vars['select_user']->value;?>
 value="U" onclick="toggleAssignType(this.value)" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_USER'];?>


				<?php if ($_smarty_tpl->tpl_vars['secondvalue']->value != '') {?>
					<input type="radio" name="assigntype" <?php echo $_smarty_tpl->tpl_vars['select_group']->value;?>
 value="T" onclick="toggleAssignType(this.value)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_GROUP'];?>

				<?php }?>

				<span id="assign_user" style="<?php echo $_smarty_tpl->tpl_vars['style_user']->value;?>
">
					<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" class="small">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr', false, 'key_one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_one']->value => $_smarty_tpl->tpl_vars['arr']->value) {
?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'sel_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sel_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key_one']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
><?php echo $_smarty_tpl->tpl_vars['sel_value']->value;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
				</span>

				<?php if ($_smarty_tpl->tpl_vars['secondvalue']->value != '') {?>
					<span id="assign_team" style="<?php echo $_smarty_tpl->tpl_vars['style_group']->value;?>
">
						<select name="assigned_group_id" id="assigned_group_id" class="small">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondvalue']->value, 'arr', false, 'key_one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_one']->value => $_smarty_tpl->tpl_vars['arr']->value) {
?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'sel_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sel_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['key_one']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
><?php echo $_smarty_tpl->tpl_vars['sel_value']->value;?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
					</span>
				<?php }?>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 52 || $_smarty_tpl->tpl_vars['uitype']->value == 77) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['uitype']->value == 52) {?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
				<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 77) {?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
				<?php } else { ?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
				<?php }?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr', false, 'key_one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_one']->value => $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'sel_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sel_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['key_one']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
><?php echo $_smarty_tpl->tpl_vars['sel_value']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 51) {?>
			<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts') {?>
				<?php $_smarty_tpl->_assignInScope('popuptype', 'specific_account_address');
?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('popuptype', 'specific_contact_account_address');
?>
			<?php }?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input readonly name="account_name" style="border:1px solid #bababa;" type="text" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">&nbsp;<img tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='return window.open("index.php?module=Accounts&action=Popup&popuptype=<?php echo $_smarty_tpl->tpl_vars['popuptype']->value;?>
&form=TasksEditView&form_submit=false&fromlink=<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
&recordid=<?php if (isset($_smarty_tpl->tpl_vars['ID']->value)) {
echo $_smarty_tpl->tpl_vars['ID']->value;
}?>","test<?php if ($_smarty_tpl->tpl_vars['fromlink']->value == 'qcreate') {?>qc<?php }?>","width=640,height=602,resizable=0,scrollbars=0");' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.account_id.value=''; this.form.account_name.value='';return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 73) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input readonly name="account_name" id = "single_accountid" type="text" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">&nbsp;<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='return window.open("index.php?module=Accounts&action=Popup&popuptype=specific_account_address&form=TasksEditView&form_submit=false&fromlink=<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
","test","width=640,height=602,resizable=0,scrollbars=0");' align="absmiddle" style='cursor:hand;cursor:pointer'>
				<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.account_id.value=''; this.form.account_name.value='';return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 57) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['fromlink']->value == 'qcreate') {?>
					<input name="contact_name" readonly type="text" style="border:1px solid #bababa;" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">&nbsp;<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='selectContact("false","general",document.QcEditView)' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.contact_id.value=''; this.form.contact_name.value='';return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
				<?php } else { ?>
					<input name="contact_name" readonly type="text" style="border:1px solid #bababa;" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">&nbsp;<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='selectContact("false","general",document.EditView)' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.contact_id.value=''; this.form.contact_name.value='';return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
				<?php }?>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 80) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input name="salesorder_name" readonly type="text" style="border:1px solid #bababa;" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">&nbsp;<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='selectSalesOrder();' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.salesorder_id.value=''; this.form.salesorder_name.value='';return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 78) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small"><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input name="quote_name" readonly type="text" style="border:1px solid #bababa;" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" >&nbsp;<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='selectQuote()' align="absmiddle" style='cursor:hand;cursor:pointer' >&nbsp;<input type="image" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.quote_id.value=''; this.form.quote_name.value='';return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 76) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input name="potential_name" readonly type="text" style="border:1px solid #bababa;" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">&nbsp;<img tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='selectPotential()' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.potential_id.value=''; this.form.potential_name.value='';return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 17) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
			<input style="width:74%;" class = 'detailedViewTextBox' type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" style="border:1px solid #bababa;" size="27" onFocus="this.className='detailedViewTextBoxOn'"onBlur="this.className='detailedViewTextBox'" onkeyup="validateUrl('<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
');" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
">
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 85) {?>
            <td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
                <font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
                <?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?>
                	<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" >
                <?php }?>
            </td>
            <td width="30%" align=left class="dvtCellInfo">
				<img src="<?php echo vtiger_imageurl('skype.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="Skype" title="Skype" align="absmiddle"></img>
				<input class='detailedViewTextBox' type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" style="border:1px solid #bababa;" size="27" onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
">
            </td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 71 || $_smarty_tpl->tpl_vars['uitype']->value == 72) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['fldname']->value == "unit_price") {?>
					<span id="multiple_currencies">
						<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" type="text" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'; updateUnitPrice('unit_price', '<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value;?>
');"  value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" style="width:60%;">
					<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value != 1) {?>
						&nbsp;<a href="javascript:void(0);" onclick="updateUnitPrice('unit_price', '<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value;?>
'); toggleShowHide('currency_class','multiple_currencies');"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE_CURRENCIES'];?>
 &raquo;</a>
					<?php }?>
					</span>
					<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value != 1) {?>
					<div id="currency_class" class="multiCurrencyEditUI">
						<input type="hidden" name="base_currency" id="base_currency" value="<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value;?>
" />
						<input type="hidden" name="base_conversion_rate" id="base_currency" value="<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value;?>
" />
						<table width="100%" height="100%" class="small" cellpadding="5">
						<tr class="detailedViewHeader">
							<th colspan="4">
								<b><?php echo getTranslatedString('LBL_PRODUCT_PRICES','Products');?>
</b>
							</th>
							<th align="right">
								<img border="0" style="cursor: pointer;" onclick="toggleShowHide('multiple_currencies','currency_class');" src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"/>
							</th>
						</tr>
						<tr class="detailedViewHeader ">
							<th><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CURRENCY'];?>
</th>
							<th><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_PRICE'];?>
</th>
							<th><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CONVERSION_RATE'];?>
</th>
							<th><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_RESET_PRICE'];?>
</th>
							<th><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BASE_CURRENCY'];?>
</th>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRICE_DETAILS']->value, 'price', false, 'count');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['count']->value => $_smarty_tpl->tpl_vars['price']->value) {
?>
							<tr>
								<?php if ($_smarty_tpl->tpl_vars['price']->value['check_value'] == 1 || $_smarty_tpl->tpl_vars['price']->value['is_basecurrency'] == 1) {?>
									<?php $_smarty_tpl->_assignInScope('check_value', "checked");
?>
									<?php $_smarty_tpl->_assignInScope('disable_value', '');
?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('check_value', '');
?>
									<?php $_smarty_tpl->_assignInScope('disable_value', "disabled=true");
?>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['price']->value['is_basecurrency'] == 1) {?>
									<?php $_smarty_tpl->_assignInScope('base_cur_check', "checked");
?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('base_cur_check', '');
?>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['price']->value['curname'] == $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value) {?>
									<?php $_smarty_tpl->_assignInScope('call_js_update_func', "updateUnitPrice('".((string)$_smarty_tpl->tpl_vars['BASE_CURRENCY']->value)."', 'unit_price');");
?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('call_js_update_func', '');
?>
								<?php }?>

								<td align="right" class="dvtCellLabel">
									<?php echo getTranslatedCurrencyString($_smarty_tpl->tpl_vars['price']->value['currencylabel']);?>
 (<?php echo $_smarty_tpl->tpl_vars['price']->value['currencysymbol'];?>
)
									<input type="checkbox" name="cur_<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
_check" id="cur_<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
_check" class="small" onclick="fnenableDisable(this,'<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
'); updateCurrencyValue(this,'<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
','<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['price']->value['conversionrate'];?>
');" <?php echo $_smarty_tpl->tpl_vars['check_value']->value;?>
>
								</td>
								<td class="dvtCellInfo" align="left">
									<input <?php echo $_smarty_tpl->tpl_vars['disable_value']->value;?>
 type="text" size="10" class="small" name="<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['price']->value['curvalue'];?>
" onBlur="<?php echo $_smarty_tpl->tpl_vars['call_js_update_func']->value;?>
 fnpriceValidation('<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
');">
								</td>
								<td class="dvtCellInfo" align="left">
									<input disabled=true type="text" size="10" class="small" name="cur_conv_rate<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['price']->value['conversionrate'];?>
">
								</td>
								<td class="dvtCellInfo" align="center">
									<input <?php echo $_smarty_tpl->tpl_vars['disable_value']->value;?>
 type="button" class="crmbutton small edit" id="cur_reset<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
"  onclick="updateCurrencyValue(this,'<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
','<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['price']->value['conversionrate'];?>
');" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_RESET'];?>
"/>
								</td>
								<td class="dvtCellInfo">
									<input <?php echo $_smarty_tpl->tpl_vars['disable_value']->value;?>
 type="radio" class="detailedViewTextBox" id="base_currency<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
" name="base_currency_input" value="<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
" <?php echo $_smarty_tpl->tpl_vars['base_cur_check']->value;?>
 onchange="updateBaseCurrencyValue()" />
								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</table>
					</div>
					<?php }?>
				<?php } else { ?>
					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" type="text" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'"  value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
">
				<?php }?>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 56) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<!-- For Portal Information we need a hidden field existing_portal with the current portal value -->
			<?php if ($_smarty_tpl->tpl_vars['fldname']->value == 'portal') {?>
				<td width="30%" align=left class="dvtCellInfo">
					<input type="hidden" name="existing_portal" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
">
					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="checkbox" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fldvalue']->value == 1) {?>checked<?php }?>>
				</td>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['fldvalue']->value == 1) {?>
					<td width="30%" align=left class="dvtCellInfo">
						<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="checkbox" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" checked>
					</td>
				<?php } elseif ($_smarty_tpl->tpl_vars['fldname']->value == 'filestatus' && $_smarty_tpl->tpl_vars['MODE']->value == 'create') {?>
					<td width="30%" align=left class="dvtCellInfo">
						<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="checkbox" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" checked>
					</td>
				<?php } else { ?>
					<td width="30%" align=left class="dvtCellInfo">
						<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" type="checkbox">
					</td>
				<?php }?>
			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 23 || $_smarty_tpl->tpl_vars['uitype']->value == 5 || $_smarty_tpl->tpl_vars['uitype']->value == 6) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'time_value', false, 'date_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date_value']->value => $_smarty_tpl->tpl_vars['time_value']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('date_val', ((string)$_smarty_tpl->tpl_vars['date_value']->value));
?>
					<?php $_smarty_tpl->_assignInScope('time_val', ((string)$_smarty_tpl->tpl_vars['time_value']->value));
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" id="jscal_field_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="text" style="border:1px solid #bababa;" size="11" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['date_val']->value;?>
">
				<img src="<?php echo vtiger_imageurl('btnL3Calendar.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" id="jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" style="vertical-align:middle">

				<?php if ($_smarty_tpl->tpl_vars['uitype']->value == 6) {?>
					<input name="time_start" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" style="border:1px solid #bababa;" size="5" maxlength="5" type="text" value="<?php echo $_smarty_tpl->tpl_vars['time_val']->value;?>
">
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['uitype']->value == 6 && isset($_smarty_tpl->tpl_vars['QCMODULE']->value) && $_smarty_tpl->tpl_vars['QCMODULE']->value == 'Event') {?>
					<input name="dateFormat" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
">
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['uitype']->value == 23 && isset($_smarty_tpl->tpl_vars['QCMODULE']->value) && $_smarty_tpl->tpl_vars['QCMODULE']->value == 'Event') {?>
					<input name="time_end" style="border:1px solid #bababa;" size="5" maxlength="5" type="text" value="<?php echo $_smarty_tpl->tpl_vars['time_val']->value;?>
">
				<?php }?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondvalue']->value, 'date_str', false, 'date_format');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date_format']->value => $_smarty_tpl->tpl_vars['date_str']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('dateFormat', ((string)$_smarty_tpl->tpl_vars['date_format']->value));
?>
					<?php $_smarty_tpl->_assignInScope('dateStr', ((string)$_smarty_tpl->tpl_vars['date_str']->value));
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<?php if ($_smarty_tpl->tpl_vars['uitype']->value == 5 || $_smarty_tpl->tpl_vars['uitype']->value == 23) {?>
					<br><font size=1><em old="(yyyy-mm-dd)">(<?php echo $_smarty_tpl->tpl_vars['dateStr']->value;?>
)</em></font>
				<?php } else { ?>
					<br><font size=1><em old="(yyyy-mm-dd)">(<?php echo $_smarty_tpl->tpl_vars['dateStr']->value;?>
)</em></font>
				<?php }?>

				<?php echo '<script'; ?>
 type="text/javascript" id='massedit_calendar_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
'>
					Calendar.setup ({
						inputField : "jscal_field_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
", ifFormat : "<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
", showsTime : false, button : "jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
", singleClick : true, step : 1
					})
				<?php echo '</script'; ?>
>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 50) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'date12_value', false, 'date_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date_value']->value => $_smarty_tpl->tpl_vars['date12_value']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('date_val', ((string)$_smarty_tpl->tpl_vars['date_value']->value));
?>
					<?php $_smarty_tpl->_assignInScope('date12_val', ((string)$_smarty_tpl->tpl_vars['date12_value']->value));
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thirdvalue']->value, 'date_format', false, 'user_format');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user_format']->value => $_smarty_tpl->tpl_vars['date_format']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('userFormat', ((string)$_smarty_tpl->tpl_vars['user_format']->value));
?>
					<?php $_smarty_tpl->_assignInScope('fieldFormat', ((string)$_smarty_tpl->tpl_vars['date_format']->value));
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" id="jscal_field_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="text" style="border:1px solid #bababa;" size="16" maxlength="16" value="<?php echo $_smarty_tpl->tpl_vars['date12_val']->value;?>
">
				<input name="timefmt_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="inputtimefmt_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['fieldFormat']->value;?>
">
				<img src="<?php echo vtiger_imageurl('btnL3Calendar.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" id="jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" style="vertical-align:middle">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondvalue']->value, 'date_str', false, 'date_format');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date_format']->value => $_smarty_tpl->tpl_vars['date_str']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('dateFormat', ((string)$_smarty_tpl->tpl_vars['date_format']->value));
?>
					<?php $_smarty_tpl->_assignInScope('dateStr', ((string)$_smarty_tpl->tpl_vars['date_str']->value));
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<br><font size=1><em old="(yyyy-mm-dd)">(<?php echo $_smarty_tpl->tpl_vars['dateStr']->value;?>
)&nbsp;<span id="timefmt_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['userFormat']->value != "24") {
echo $_smarty_tpl->tpl_vars['fieldFormat']->value;
}?></span></em></font>

				<?php echo '<script'; ?>
 type="text/javascript" id='massedit_calendar_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
'>
					Calendar.setup ({
						inputField : "jscal_field_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
", ifFormat : "<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
", inputTimeFormat : "<?php echo $_smarty_tpl->tpl_vars['fieldFormat']->value;?>
",
						<?php if ($_smarty_tpl->tpl_vars['userFormat']->value != "24") {?>displayArea : "timefmt_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
", daFormat : "%p",<?php }?>
						showsTime : true, timeFormat : "<?php echo $_smarty_tpl->tpl_vars['userFormat']->value;?>
",
						button : "jscal_trigger_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
", singleClick : true, step : 1
					});
				<?php echo '</script'; ?>
>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 63) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="text" size="2" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" >&nbsp;
				<select name="duration_minutes" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondvalue']->value, 'selectval', false, 'labelval');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['labelval']->value => $_smarty_tpl->tpl_vars['selectval']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['labelval']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['selectval']->value;?>
><?php echo $_smarty_tpl->tpl_vars['labelval']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 66 || $_smarty_tpl->tpl_vars['uitype']->value == 62) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font>
				<?php if ($_smarty_tpl->tpl_vars['fromlink']->value == 'qcreate') {?>
					<select class="small" name="parent_type" onChange='document.QcEditView.parent_name.value=""; document.QcEditView.parent_id.value=""'>
				<?php } else { ?>
					<select class="small" name="parent_type" onChange='document.EditView.parent_name.value=""; document.EditView.parent_id.value=""'>
				<?php }?>
					<?php
$__section_combo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_combo']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo'] : false;
$__section_combo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['fldlabel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_combo_0_total = $__section_combo_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_combo'] = new Smarty_Variable(array());
if ($__section_combo_0_total != 0) {
for ($__section_combo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] = 0; $__section_combo_0_iteration <= $__section_combo_0_total; $__section_combo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']++){
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['fldlabel_combo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] : null)];?>
" <?php echo $_smarty_tpl->tpl_vars['fldlabel_sel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] : null)];?>
><?php echo $_smarty_tpl->tpl_vars['fldlabel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] : null)];?>
 </option>
					<?php
}
}
if ($__section_combo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_combo'] = $__section_combo_0_saved;
}
?>
				</select>
				<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="parent_id_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">
				<input name="parent_name" readonly id = "parentid" type="text" style="border:1px solid #bababa;" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
">
				&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['fromlink']->value == 'qcreate') {?>
					<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='return window.open("index.php?module="+ document.QcEditView.parent_type.value +"&action=Popup&html=Popup_picker&form=HelpDeskEditView&fromlink=<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
","test","width=640,height=602,resizable=0,scrollbars=0,top=150,left=200");' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.parent_id.value=''; this.form.parent_name.value=''; return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
				<?php } else { ?>
					<img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='return window.open("index.php?module="+ document.EditView.parent_type.value +"&action=Popup&html=Popup_picker&form=HelpDeskEditView&fromlink=<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
","test","width=640,height=602,resizable=0,scrollbars=0,top=150,left=200");' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.parent_id.value=''; this.form.parent_name.value=''; return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
				<?php }?>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 357) {?>
			<td width="20%" class="dvtCellLabel" align=right>To:&nbsp;</td>
			<td width="90%" colspan="3">
				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
">
				<textarea readonly name="parent_name" cols="70" rows="2"><?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
</textarea>&nbsp;
				<select name="parent_type" class="small">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldlabel']->value, 'selectval', false, 'labelval');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['labelval']->value => $_smarty_tpl->tpl_vars['selectval']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['labelval']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['selectval']->value;?>
><?php echo $_smarty_tpl->tpl_vars['labelval']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select>
				&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['fromlink']->value == 'qcreate') {?>
					<img tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='return window.open("index.php?module="+ document.QcEditView.parent_type.value +"&action=Popup&html=Popup_picker&form=HelpDeskEditView&fromlink=<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
","test","width=640,height=602,resizable=0,scrollbars=0,top=150,left=200");' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.parent_id.value=''; this.form.parent_name.value=''; return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
				<?php } else { ?>
					<img tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT'];?>
" onclick='return window.open("index.php?module="+ document.EditView.parent_type.value +"&action=Popup&html=Popup_picker&form=HelpDeskEditView&fromlink=<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
","test","width=640,height=602,resizable=0,scrollbars=0,top=150,left=200");' align="absmiddle" style='cursor:hand;cursor:pointer'>&nbsp;<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.parent_id.value=''; this.form.parent_name.value=''; return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
				<?php }?>
			</td>
		   <tr style="height:25px">
			<td width="20%" class="dvtCellLabel" align=right>CC:&nbsp;</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input name="ccmail" type="text" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'"  value="">
			</td>
			<td width="20%" class="dvtCellLabel" align=right>BCC:&nbsp;</td>
			<td width="30%" align=left class="dvtCellInfo">
				<input name="bccmail" type="text" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'"  value="">
			</td>
		   </tr>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 55 || $_smarty_tpl->tpl_vars['uitype']->value == 255) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
			<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1' && $_smarty_tpl->tpl_vars['fldvalue']->value != '') {?>
				<?php echo $_smarty_tpl->tpl_vars['APP']->value['Salutation'];?>
<input type="checkbox" name="salutationtype_mass_edit_check" id="salutationtype_mass_edit_check" class="small" ><br />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['uitype']->value == 55) {?>
				<?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;
if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 255) {?>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;
if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			<?php }?>
			</td>

			<td width="30%" align=left class="dvtCellInfo">
			<?php if ($_smarty_tpl->tpl_vars['fldvalue']->value != '') {?>
			<select name="salutationtype" class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>
" <?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>
>
				<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>

				</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
			<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><br /><?php }?>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']) && isset($_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']['searchfields']))) {?>
				<?php $_smarty_tpl->_assignInScope('autocomp', $_smarty_tpl->tpl_vars['maindata']->value['extendedfieldinfo']);
?>
				<div style="position: relative;">
				<input
					type="text"
					name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
"
					id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
"
					tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
"
					value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
"
					tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
"
					autocomplete="off"
					class="autocomplete-input detailedViewTextBox"
					data-autocomp='<?php echo json_encode($_smarty_tpl->tpl_vars['maindata']->value["extendedfieldinfo"]);?>
' />
					<div id="listbox-unique-id" role="listbox" class="">
						<ul class="slds-listbox slds-listbox_vertical slds-dropdown slds-dropdown_fluid relation-autocomplete__target" style="opacity: 0; width: 100%; list-style-type: none; width: 90%; left: 0; transform: translateX(0); max-width: none;" role="presentation"></ul>
					</div>
				</div>
			<?php } else { ?>
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'" style="width:58%;" value= "<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" >
			<?php }?>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 22) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<textarea name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" cols="30" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" rows="2"><?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
</textarea>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 14) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php echo getTranslatedString("LBL_TIMEFIELD");
if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width=10% align=left class="dvtCellInfo">
				<input type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id ="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'">
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == '69m') {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small"  >
				<?php }?>
			</td>
			<td colspan="1" width="30%" align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Products') {?>
					<input name="del_file_list" type="hidden" value="">
					<div id="files_list" style="border: 1px solid grey; width: 500px; padding: 5px; background: rgb(255, 255, 255) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; font-size: x-small">
						<span id="limitmsg" style= "color:red;"> <?php echo getTranslatedString('LBL_MAX_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['UPLOADSIZE']->value;
echo getTranslatedString('LBL_FILESIZEIN_MB',$_smarty_tpl->tpl_vars['MODULE']->value);?>
, <?php echo $_smarty_tpl->tpl_vars['APP']->value['Files_Maximum'];
echo $_smarty_tpl->tpl_vars['Product_Maximum_Number_Images']->value;?>
</span>
						<input id="my_file_element" type="file" name="file_1" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
"  onchange="validateFilename(this)"/>
						<!--input type="hidden" name="file_1_hidden" value=""/-->
						<?php $_smarty_tpl->_assignInScope('image_count', 0);
?>
						<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[3][0]['name']) && $_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'] != '' && $_smarty_tpl->tpl_vars['DUPLICATE']->value != 'true') {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maindata']->value[3], 'image_details', false, 'num', 'image_loop', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['image_details']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_image_loop']->value['iteration']++;
?>
							<div align="center">
								<img src="<?php echo $_smarty_tpl->tpl_vars['image_details']->value['path'];
echo $_smarty_tpl->tpl_vars['image_details']->value['name'];?>
" height="50">&nbsp;&nbsp;[<?php echo $_smarty_tpl->tpl_vars['image_details']->value['orgname'];?>
]<input id="file_<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" value="<?php echo getTranslatedString('LBL_DELETE_BUTTON');?>
" type="button" class="crmbutton small delete" onclick='this.parentNode.parentNode.removeChild(this.parentNode);delRowEmt("<?php echo $_smarty_tpl->tpl_vars['image_details']->value['orgname'];?>
")'>
							</div>
							<?php $_smarty_tpl->_assignInScope('image_count', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_image_loop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image_loop']->value['iteration'] : null));
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<?php }?>
					</div>

					<?php echo '<script'; ?>
>

						var multi_selector = new MultiSelector( document.getElementById( 'files_list' ), <?php echo $_smarty_tpl->tpl_vars['Product_Maximum_Number_Images']->value;?>
 );
						multi_selector.count = <?php echo $_smarty_tpl->tpl_vars['image_count']->value;?>
;

						multi_selector.addElement( document.getElementById( 'my_file_element' ) );
					<?php echo '</script'; ?>
>
				<?php }?>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 69) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small"  >
				<?php }?>
			</td>
			<td colspan="1" width="30%" align=left class="dvtCellInfo">
				<div style="display: flex;flex-direction: row; width:100%">
				<div width="80%">
				<span id="limitmsg" style= "color:red;"> <?php echo getTranslatedString('LBL_MAX_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['UPLOADSIZE']->value;
echo getTranslatedString('LBL_FILESIZEIN_MB',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br /></span>
				<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[3][0]['name']) && $_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'] != '') {?>
					<?php $_smarty_tpl->_assignInScope('imagevalueexists', true);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('imagevalueexists', false);
?>
				<?php }?>
				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="file" value="<?php if ($_smarty_tpl->tpl_vars['imagevalueexists']->value) {
echo $_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'];
}?>" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" onchange="validateFilename(this);" />
				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_hidden" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_hidden" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['imagevalueexists']->value) {
echo $_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'];
}?>" />
				<?php if ($_smarty_tpl->tpl_vars['imagevalueexists']->value) {?>
					<div id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_replaceimage">[<?php echo $_smarty_tpl->tpl_vars['maindata']->value[3][0]['orgname'];?>
] <input id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_attach" value="<?php echo getTranslatedString('LBL_DELETE_BUTTON');?>
" type="button" class="crmbutton small delete" onclick='delimage(<?php if (!empty($_smarty_tpl->tpl_vars['ID']->value)) {
echo $_smarty_tpl->tpl_vars['ID']->value;
} else { ?>0<?php }?>,"<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['maindata']->value[3][0]['orgname'];?>
");'></div>
				<?php }?>
				<div id="displaySize"></div>
				</div>
				<div style="width:50px;height:50px;overflow: hidden;">
					<canvas style="border:1px solid grey;" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_canvas" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
1}"></canvas>
					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_canvas_image" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_canvas_image" type="hidden" value="" />
					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_canvas_image_set" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_canvas_image_set" type="hidden" value="0" />
					<?php echo '<script'; ?>
>var <?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_CLIPBOARD = new CLIPBOARD_CLASS("<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_canvas", true);<?php echo '</script'; ?>
>
				</div>
				</div>
			</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 61) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?>
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small"  disabled >
				<?php }?>
			</td>

			<td colspan="1" width="30%" align=left class="dvtCellInfo">
				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
"  type="file" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" onchange="validateFilename(this)"/>
				<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
"/>
				<input type="hidden" name="id" value=""/><?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>

			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 156) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
				<?php if ($_smarty_tpl->tpl_vars['fldvalue']->value == 'on') {?>
					<td width="30%" align=left class="dvtCellInfo">
						<?php if (($_smarty_tpl->tpl_vars['secondvalue']->value == 1 && isset($_REQUEST['record']) && $_smarty_tpl->tpl_vars['CURRENT_USERID']->value != $_REQUEST['record']) || ($_smarty_tpl->tpl_vars['MODE']->value == 'create')) {?>
							<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" type="checkbox" checked>
						<?php } else { ?>
							<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="on">
							<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" disabled tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" type="checkbox" checked>
						<?php }?>
					</td>
				<?php } else { ?>
					<td width="30%" align=left class="dvtCellInfo">
						<?php if (($_smarty_tpl->tpl_vars['secondvalue']->value == 1 && isset($_REQUEST['record']) && $_smarty_tpl->tpl_vars['CURRENT_USERID']->value != $_REQUEST['record']) || ($_smarty_tpl->tpl_vars['MODE']->value == 'create')) {?>
							<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" type="checkbox">
						<?php } else { ?>
							<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" disabled tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" type="checkbox">
						<?php }?>
					</td>
				<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 98) {?><!-- Role Selection Popup -->
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
			<?php if ($_smarty_tpl->tpl_vars['thirdvalue']->value == 1) {?>
				<input name="role_name" id="role_name" readonly class="txtBox" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" type="text">&nbsp;
				<a href="javascript:openPopup();"><img src="<?php echo vtiger_imageurl('select.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0"></a>
			<?php } else { ?>
				<input name="role_name" id="role_name" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="txtBox" readonly value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" type="text">&nbsp;
			<?php }?>
			<input name="user_role" id="user_role" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" type="hidden">
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 115) {?><!-- for Status field Disabled for nonadmin -->
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['secondvalue']->value == 1 && isset($_REQUEST['record']) && $_smarty_tpl->tpl_vars['CURRENT_USERID']->value != $_REQUEST['record']) {?>
					<select id="user_status" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
				<?php } else { ?>
					<select id="user_status" disabled name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" class="small">
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>
" <?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>
 ><?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 105) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['MODE']->value == 'edit' && $_smarty_tpl->tpl_vars['IMAGENAME']->value != '') {?>
					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="file" value="<?php echo $_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" onchange="validateFilename(this);" /><div id="replaceimage">[<?php echo $_smarty_tpl->tpl_vars['IMAGENAME']->value;?>
]&nbsp;<a href="javascript:;" onClick="delUserImage(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)">Del</a></div>
					<br><?php echo getTranslatedString('LBL_IMG_FORMATS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_hidden"  type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'];?>
" />
				<?php } else { ?>
					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="file" value="" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" onchange="validateFilename(this);" /><br><?php echo getTranslatedString('LBL_IMG_FORMATS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

					<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_hidden"  type="hidden" value="" />
				<?php }?>
					<div id="displaySize"></div>
					<input type="hidden" name="id" value=""/>
					<?php if (isset($_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'])) {?>
					<?php echo $_smarty_tpl->tpl_vars['maindata']->value[3][0]['name'];?>

					<?php }?>
			</td>
			<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 103) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" colspan="3" align=left class="dvtCellInfo">
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'">
			</td>
			<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 101) {?><!-- for reportsto field USERS POPUP -->
				<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
					<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
				</td>
				<td width="30%" align=left class="dvtCellInfo">
					<input id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display" readonly type="text" style="border:1px solid #bababa;" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" class="small" />&nbsp;
					<input id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" />
					&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHANGE_TITLE'];?>
" accessKey="C" type="button" class="small" value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHANGE'];?>
' name="btn1" onclick='return window.open("index.php?module=Users&action=Popup&html=Popup_picker&form=vtlibPopupView&form_submit=false&fromlink=<?php echo $_smarty_tpl->tpl_vars['fromlink']->value;?>
&recordid=<?php if (isset($_smarty_tpl->tpl_vars['ID']->value)) {
echo $_smarty_tpl->tpl_vars['ID']->value;
}?>&forfield=<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
","test","width=640,height=603,resizable=0,scrollbars=0");'>
					&nbsp;<input type="image" src="<?php echo vtiger_imageurl('clear_field.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR'];?>
" onClick="this.form.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
.value=''; this.form.<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_display.value=''; return false;" align="absmiddle" style='cursor:hand;cursor:pointer'>
				</td>
			<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 117) {?><!-- for currency in users details-->
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width="30%" align=left class="dvtCellInfo">
			   <?php if ($_smarty_tpl->tpl_vars['secondvalue']->value == 1 || $_smarty_tpl->tpl_vars['uitype']->value == 117) {?>
				<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
			   <?php } else { ?>
				<select disabled name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
			   <?php }?>
				<?php $_smarty_tpl->_assignInScope('curr_stat', '');
?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'arr', false, 'uivalueid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uivalueid']->value => $_smarty_tpl->tpl_vars['arr']->value) {
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'sel_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sel_value']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['uivalueid']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
><?php echo getTranslatedCurrencyString($_smarty_tpl->tpl_vars['sel_value']->value);?>
</option>
						<!-- code added to pass Currency field value, if Disabled for nonadmin -->
						<?php if ($_smarty_tpl->tpl_vars['value']->value == 'selected' && $_smarty_tpl->tpl_vars['secondvalue']->value != 1) {?>
							<?php $_smarty_tpl->_assignInScope('curr_stat', ((string)$_smarty_tpl->tpl_vars['uivalueid']->value));
?>
						<?php }?>
						<!--code ends -->
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			   </select>
			<!-- code added to pass Currency field value, if Disabled for nonadmin -->
			<?php if ($_smarty_tpl->tpl_vars['curr_stat']->value != '' && $_smarty_tpl->tpl_vars['uitype']->value != 117) {?>
				<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['curr_stat']->value;?>
">
			<?php }?>
			<!--code ends -->
			</td>
			<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 106) {?>
			<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td width=30% align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['MODE']->value == 'edit') {?>
				<input type="text" readonly name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'">
				<?php } else { ?>
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'">
				<?php }?>
			</td>
			<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 99) {?>
				<?php if ($_smarty_tpl->tpl_vars['MODE']->value == 'create') {?>
				<td width=20% class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
					<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
				</td>
				<td width=30% align=left class="dvtCellInfo">
					<input type="password" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value;?>
" class=detailedViewTextBox onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'">
				</td>
				<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 30) {?>
			<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
				<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
			</td>
			<td colspan="3" width="30%" align=left class="dvtCellInfo">
				<?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['secondvalue']->value[0]);
?>
				<?php $_smarty_tpl->_assignInScope('yes_val', $_smarty_tpl->tpl_vars['secondvalue']->value[1]);
?>
				<?php $_smarty_tpl->_assignInScope('no_val', $_smarty_tpl->tpl_vars['secondvalue']->value[2]);
?>

				<input type="radio" name="set_reminder" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" value="Yes" <?php echo $_smarty_tpl->tpl_vars['check']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['yes_val']->value;?>
&nbsp;
				<input type="radio" name="set_reminder" value="No">&nbsp;<?php echo $_smarty_tpl->tpl_vars['no_val']->value;?>
&nbsp;

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'val_arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val_arr']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('start', $_smarty_tpl->tpl_vars['val_arr']->value[0]);
?>
					<?php $_smarty_tpl->_assignInScope('end', $_smarty_tpl->tpl_vars['val_arr']->value[1]);
?>
					<?php $_smarty_tpl->_assignInScope('sendname', $_smarty_tpl->tpl_vars['val_arr']->value[2]);
?>
					<?php $_smarty_tpl->_assignInScope('disp_text', $_smarty_tpl->tpl_vars['val_arr']->value[3]);
?>
					<?php $_smarty_tpl->_assignInScope('sel_val', $_smarty_tpl->tpl_vars['val_arr']->value[4]);
?>
					<select name="<?php echo $_smarty_tpl->tpl_vars['sendname']->value;?>
" class="small">
						<?php
$__section_reminder_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_reminder']) ? $_smarty_tpl->tpl_vars['__smarty_section_reminder'] : false;
$__section_reminder_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['end']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_reminder_1_start = (int)@$_smarty_tpl->tpl_vars['start']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['start']->value + $__section_reminder_1_loop) : min((int)@$_smarty_tpl->tpl_vars['start']->value, $__section_reminder_1_loop);
$__section_reminder_1_total = min(($__section_reminder_1_loop - $__section_reminder_1_start), (int)@$_smarty_tpl->tpl_vars['end']->value < 0 ? $__section_reminder_1_loop : (int)@$_smarty_tpl->tpl_vars['end']->value);
$_smarty_tpl->tpl_vars['__smarty_section_reminder'] = new Smarty_Variable(array());
if ($__section_reminder_1_total != 0) {
for ($__section_reminder_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index'] = $__section_reminder_1_start; $__section_reminder_1_iteration <= $__section_reminder_1_total; $__section_reminder_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index']++){
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index'] : null) == $_smarty_tpl->tpl_vars['sel_val']->value) {?>
								<?php $_smarty_tpl->_assignInScope('sel_value', "SELECTED");
?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('sel_value', '');
?>
							<?php }?>
							<OPTION VALUE="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index'] : null);?>
" "<?php echo $_smarty_tpl->tpl_vars['sel_value']->value;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_reminder']->value['index'] : null);?>
</OPTION>
						<?php
}
}
if ($__section_reminder_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_reminder'] = $__section_reminder_1_saved;
}
?>
					</select>
					&nbsp;<?php echo $_smarty_tpl->tpl_vars['disp_text']->value;?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 26) {?>
		<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
		<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['fldlabel']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
		</td>
		<td width="30%" align=left class="dvtCellInfo">
			<select name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fldvalue']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
		</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 27) {?>
		<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align="right" >
			<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['fldlabel_other']->value;?>
&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small" ><?php }?>
        </td>
        <td width="30%" align=left class="dvtCellInfo">
			<select class="small" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" onchange="changeDldType((this.value=='I')? 'file': 'text');">
				<?php
$__section_combo_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_combo']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo'] : false;
$__section_combo_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['fldlabel']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_combo_2_total = $__section_combo_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_combo'] = new Smarty_Variable(array());
if ($__section_combo_2_total != 0) {
for ($__section_combo_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] = 0; $__section_combo_2_iteration <= $__section_combo_2_total; $__section_combo_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']++){
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['fldlabel_combo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] : null)];?>
" <?php echo $_smarty_tpl->tpl_vars['fldlabel_sel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] : null)];?>
 ><?php echo $_smarty_tpl->tpl_vars['fldlabel']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_combo']->value['index'] : null)];?>
 </option>
				<?php
}
}
if ($__section_combo_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_combo'] = $__section_combo_2_saved;
}
?>
			</select>
			<?php echo '<script'; ?>
>
				function vtiger_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
Init(){
					var d = document.getElementsByName('<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
')[0];
					var type = (d.value=='I')? 'file': 'text';

					changeDldType(type, true);
				}
				if(typeof window.onload =='function'){
					var oldOnLoad = window.onload;
					document.body.onload = function(){
						vtiger_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
Init();
						oldOnLoad();
					}
				}else{
					window.onload = function(){
						vtiger_<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
Init();
					}
				}

			<?php echo '</script'; ?>
>
		</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 28) {?>
		<td width="20%" class="dvtCellLabel<?php if ($_smarty_tpl->tpl_vars['mandatory_field']->value == '*') {?> mandatory_field_label<?php }?>" align=right>
			<font color="red"><?php echo $_smarty_tpl->tpl_vars['mandatory_field']->value;?>
</font><?php echo $_smarty_tpl->tpl_vars['usefldlabel']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MASS_EDIT']->value == '1') {?>
				<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_mass_edit_check" class="small"  disabled >
			<?php }?>
		</td>

		<td colspan="1" width="30%" align="left" class="dvtCellInfo">
		<?php echo '<script'; ?>
 type="text/javascript">
			function changeDldType(type, onInit){
				var fieldname = '<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
';
				if(!onInit){
					var dh = getObj('<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_hidden');
					if(dh) dh.value = '';
				}

				var v1 = document.getElementById(fieldname+'_E__');
				var v2 = document.getElementById(fieldname+'_I__');
				var msg = document.getElementById('limitmsg');

				var text = v1.type =="text"? v1: v2;
				var file = v1.type =="file"? v1: v2;
				var filename = document.getElementById(fieldname+'_value');

				if(type == 'file'){
					// Avoid sending two form parameters with same key to server
					file.name = fieldname;
					text.name = '_' + fieldname;

					file.style.display = '';
					text.style.display = 'none';
					text.value = '';
					filename.style.display = '';
					msg.style.display = '';
				}else{
					// Avoid sending two form parameters with same key to server
					text.name = fieldname;
					file.name = '_' + fieldname;

					file.style.display = 'none';
					text.style.display = '';
					file.value = '';
					filename.style.display = 'none';
					filename.innerHTML="";
					msg.style.display = 'none';
				}

			}
		<?php echo '</script'; ?>
>
		<div>
			<input name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_I__" type="file" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['vt_tab']->value;?>
" onchange="validateFilename(this);validateFileSize(this,'<?php echo $_smarty_tpl->tpl_vars['UPLOAD_MAXSIZE']->value;?>
');" style="display: none;"/>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_hidden" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
"/>
			<input type="hidden" name="id" value=""/>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_E__" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" class="detailedViewTextBox" onFocus="this.className='detailedViewTextBoxOn'" onBlur="this.className='detailedViewTextBox'" value="<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
" /><br>
			<div id="displaySize"></div>
			<span id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
_value" style="display:none;">
			<?php if ($_smarty_tpl->tpl_vars['secondvalue']->value != '') {?>
				[<?php echo $_smarty_tpl->tpl_vars['secondvalue']->value;?>
]
			<?php }?>
			</span>
		</div>
		<span id="limitmsg" style= "color:red; display:none;"> <?php echo getTranslatedString('LBL_MAX_SIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['UPLOADSIZE']->value;
echo getTranslatedString('LBL_FILESIZEIN_MB',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
		</td>

		<?php } elseif ($_smarty_tpl->tpl_vars['uitype']->value == 83) {?> <!-- Handle the Tax in Inventory -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAX_DETAILS']->value, 'tax', false, 'count');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['count']->value => $_smarty_tpl->tpl_vars['tax']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['tax']->value['check_value'] == 1) {?>
					<?php $_smarty_tpl->_assignInScope('check_value', "checked");
?>
					<?php $_smarty_tpl->_assignInScope('show_value', "visible");
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('check_value', '');
?>
					<?php $_smarty_tpl->_assignInScope('show_value', "hidden");
?>
				<?php }?>
				<td align="right" class="dvtCellLabel" style="border:0px solid red;">
					<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxlabel'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['COVERED_PERCENTAGE'];?>

					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['check_name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['tax']->value['check_name'];?>
" class="small" onclick="fnshowHide(this,'<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
')" <?php echo $_smarty_tpl->tpl_vars['check_value']->value;?>
>
				</td>
				<td class="dvtCellInfo" align="left" style="border:0px solid red;">
					<input type="text" class="detailedViewTextBox" name="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['percentage'];?>
" style="visibility:<?php echo $_smarty_tpl->tpl_vars['show_value']->value;?>
;" onBlur="fntaxValidation('<?php echo $_smarty_tpl->tpl_vars['tax']->value['taxname'];?>
')">
				</td>
			   </tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			<td colspan="2" class="dvtCellInfo">&nbsp;</td>
		<?php } else { ?>

			<td width=20% class="dvtCellLabel" align=right><?php echo $_smarty_tpl->tpl_vars['fldlabel']->value;?>
</td>
			<td width=30% align=left class="dvtCellInfo">
				<?php if ($_smarty_tpl->tpl_vars['fldname']->value != '') {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['fldname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['fldvalue']->value['fieldsavevalue'];?>
"><?php }
if (isset($_smarty_tpl->tpl_vars['fldvalue']->value['fieldshowvalue'])) {
echo $_smarty_tpl->tpl_vars['fldvalue']->value['fieldshowvalue'];
}?>
			</td>
		<?php }

}
#¿Es la vista de edicion?
if ($_smarty_tpl->tpl_vars['OP_MODE']->value == 'edit_view') {
  echo "<script>
  $(document).ready(function(){
    if (gVTModule == 'ejecuciondeinstrucciones') {
      if (gVTUserRoleID == 'H54') {
        restringe_campos_obligatorios();
      }
      var id_registro = $('input[name=record]').val();
      $.ajax({
        url: 'include/Ajax/Carga_Instrucciones/ejecuciondeinstrucciones.php',
        type: 'POST',
        data: {operacion: 'recupera_instruccion', id_registro: id_registro},
        success: function(result){
          var instrucciones = JSON.parse(result);
          valor_cf_14026 = instrucciones['cf_14026'];

          if (valor_cf_14026.length > 0) {
            oculta_campo('cf_14020');
            $($('#cf_14020').parent().parent().parent().prev()).css('border-right', '#fff');
            $($('#cf_14020').parent().parent().parent()).css('border-left', '#fff');
          }
        }
      })
    }
    function restringe_campos_obligatorios(){
      $('.mandatory_field_label').next().css('pointer-events', 'none');
    }
    function oculta_campo(campo){
      $($('#'+campo).parent().parent()).css('display', 'none');
      $($('#'+campo).parent().parent().parent().prev()).css('background-color', '#fff');
      $($('#'+campo).parent().parent().parent().prev()).css('color', '#fff');
    }
  })
  </script>";
} elseif ($_smarty_tpl->tpl_vars['OP_MODE']->value == 'create_view') {
  if ($_COOKIE[$_smarty_tpl->tpl_vars['ID']->value] == 1) {
    echo '<script>
    $(document).ready(function(){
        deshabilita_campos("cf_12171");
        deshabilita_campos("cf_12247");
        deshabilita_campos("cf_12095");
        deshabilita_campos("cf_13764");
        deshabilita_campos("cf_12339");
        deshabilita_campos("cf_14494");
        deshabilita_campos("cf_14473");
        deshabilita_campos("cf_12370");
        deshabilita_campos("cf_13952");
        deshabilita_campos("cf_13345");
        deshabilita_campos("cf_12347");
        deshabilita_campos("cf_13209");
        deshabilita_campos("cf_13210");
        deshabilita_campos("cf_12324");
        deshabilita_campos("cf_12372");
      function deshabilita_campos(campo){
        $($("#"+campo).parent()).css("pointer-events","none");

      }
    })
    </script>';
    unset($_COOKIE[$_smarty_tpl->tpl_vars['ID']->value]);
    setcookie($_smarty_tpl->tpl_vars['ID']->value, "", 1);
  }
}
  echo '<script>
  $(document).ready(function(){
    console.log($("input[name=rel_custom_module]").val());
    var modulo_relacionado = $("input[name=rel_custom_module]").val();
      if (modulo_relacionado == "fideicomisos") {
        deshabilita_campos("cf_12171");
        deshabilita_campos("cf_12247");
        deshabilita_campos("cf_12095");
        deshabilita_campos("cf_13764");
        deshabilita_campos("cf_12339");
        deshabilita_campos("cf_14494");
        deshabilita_campos("cf_14473");
        deshabilita_campos("cf_12370");
        deshabilita_campos("cf_13952");
        deshabilita_campos("cf_13345");
        deshabilita_campos("cf_12347");
        deshabilita_campos("cf_13209");
        deshabilita_campos("cf_13210");
        deshabilita_campos("cf_12324");
        deshabilita_campos("cf_12372");
      }
      function deshabilita_campos(campo){
        $($("#"+campo).parent()).css("pointer-events","none");
      }
  })
  </script>';

}

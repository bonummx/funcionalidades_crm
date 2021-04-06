<?php
/* Smarty version 3.1.30, created on 2021-01-29 18:15:08
  from "/var/www/html/desarrollocartera/Smarty/templates/ListViewButtons.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6014a50c8d6c39_62571910',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    '208d407fb9e6185238b5ba872762c26ef647fb9a' =>
    array (
      0 => '/var/www/html/desarrollocartera/Smarty/templates/ListViewButtons.tpl',
      1 => 1611965704,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
    'file:ListViewCustomButtons.tpl' => 1,
  ),
),false)) {
function content_6014a50c8d6c39_62571910 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BUTTONS']->value, 'button_label', false, 'button_check');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['button_check']->value => $_smarty_tpl->tpl_vars['button_label']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['button_check']->value == 'del') {?>
		<input class="crmbutton small delete" type="button" value="<?php echo $_smarty_tpl->tpl_vars['button_label']->value;?>
" onclick="return massDelete('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
')"/>
	<?php } elseif ($_smarty_tpl->tpl_vars['button_check']->value == 'mass_edit') {?>
		<input class="crmbutton small edit" type="button" value="<?php echo $_smarty_tpl->tpl_vars['button_label']->value;?>
" onclick="return mass_edit(this, 'massedit', '<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
')"/>
	<?php } elseif ($_smarty_tpl->tpl_vars['button_check']->value == 's_mail') {?>
		<input class="crmbutton small edit" type="button" value="<?php echo $_smarty_tpl->tpl_vars['button_label']->value;?>
" onclick="return eMail('<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
',this);"/>
	<?php } elseif ($_smarty_tpl->tpl_vars['button_check']->value == 'mailer_exp') {?>
		<input class="crmbutton small edit" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['button_label']->value;?>
" onclick="return mailer_export()"/>
	<?php }?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'instruccionespa' || $_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos') {?>
	<input id="exportar_registros" class="crmbutton small cancel" type="button" value="Exportar" style="display:none;"/>
<?php }
  if ($_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos') { ?>
    <input id="saldos_diarios" class="crmbutton small create" type="button" value="Carga de Saldos Diarios" style="display:none;"/>
<?php }

$_smarty_tpl->_subTemplateRender("file:ListViewCustomButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Documents') {?>
	<?php if ($_smarty_tpl->tpl_vars['CHECK']->value['EditView'] == 'yes') {?>
		<input type="button" name="move" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MOVE'];?>
" class="crmbutton small edit" onClick="fnvshNrm('movefolderlist'); posLay(this,'movefolderlist');" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MOVE_DOCUMENTS'];?>
">
		<div style="display:none;position:absolute;width:150px;" id="movefolderlist" >
			<div class="layerPopup thickborder" style="display:block;position:relative;width:250px;">
				<table  class="layerHeadingULine" border="0" cellpadding="5" cellspacing="0" width="100%">
					<tr>
						<td class="genHeaderSmall" align="left" width="90%">
							<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MOVE_TO'];?>

						</td>
						<td align="right" width="10%">
							<a onclick="fninvsh('movefolderlist')" href="javascript:void(0);">
							<img border="0" align="absmiddle" src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"/></a>
						</td>
					</tr>
				</table>
				<div style='padding: 10px;'>
					<table class="drop_down"  border="0" cellpadding="5" cellspacing="1" width="100%">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_FOLDERS']->value, 'folder');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->value) {
?>
							<tr class='lvtColData' onmouseout="this.className='lvtColData'" onmouseover="this.className='lvtColDataHover'">
								<td align="left">
									<a href="javascript:;" onClick="MoveFile('<?php echo $_smarty_tpl->tpl_vars['folder']->value['folderid'];?>
','<?php echo $_smarty_tpl->tpl_vars['folder']->value['foldername'];?>
');" > <?php echo $_smarty_tpl->tpl_vars['folder']->value['foldername'];?>
</a>
								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
				</div>
			</div>
		</div>
		<input type="button" name="add" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADD_NEW_FOLDER'];?>
" class="crmbutton small edit" onClick="fnvshobj(this,'orgLay');" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADD_NEW_FOLDER'];?>
">
		<div id="orgLay" style="display:none;width:350px;" class="layerPopup" >
			<table border=0 cellspacing=0 cellpadding=5 width=100% class=layerHeadingULine>
				<tr>
					<td class="genHeaderSmall" nowrap align="left" width="30%" id="editfolder_info"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADD_NEW_FOLDER'];?>
</td>
					<td align="right"><a href="javascript:;" onClick="closeFolderCreate();"><img src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" align="absmiddle" border="0"></a></td>
				</tr>
			</table>
			<table border=0 cellspacing=0 cellpadding=5 width=95% align=center>
				<tr>
					<td class="small">
						<table border=0 cellspacing=0 cellpadding=5 width=100% align=center bgcolor=white>
						<tr>
							<td align="right" nowrap class="cellLabel small"><font color='red'>*</font>&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FOLDER_NAME'];?>
</b></td>
							<td align="left" class="cellText small">
							<input id="folder_id" name="folderId" type="hidden" value=''>
							<input id="fldrsave_mode" name="folderId" type="hidden" value='save'>
							<input id="folder_name" name="folderName" class="txtBox" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAXIMUM_20'];?>
">
							</td>
						</tr>
						<tr>
							<td class="cellLabel small" align="right" nowrap><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FOLDER_DESC'];?>
</b></td>
							<td class="cellText small" align="left"><input id="folder_desc" name="folderDesc" class="txtBox" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAXIMUM_50'];?>
"></td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			<table border=0 cellspacing=0 cellpadding=5 width=100% class="layerPopupTransport">
				<tr>
					<td class="small" align="center">
						<input name="save" value=" &nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
&nbsp; " class="crmbutton small save" onClick="AddFolder();" type="button">&nbsp;&nbsp;
						<input name="cancel" value=" <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
 " class="crmbutton small cancel" onclick="closeFolderCreate();" type="button">
					</td>
				</tr>
			</table>
		</div>
	<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['EMPTY_FOLDERS']->value) > 0) {?>
		<input type="button" name="show" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_VIEW_EMPTY_FOLDERS'];?>
" class="crmbutton small cancel" onClick="fnvshobj(this,'emptyfolder');" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_VIEW_EMPTY_FOLDERS'];?>
">
		<div class="layerPopup thickborder" style="display:none;position:absolute; left:193px;top:106px;width:250px;z-index:1" id="emptyfolder">
			<table  class="layerHeadingULine" border="0" cellpadding="5" cellspacing="0" width="100%">
				<tr>
					<td class="genHeaderSmall" align="left">
						<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMPTY_FOLDERS'];?>

					</td>
					<td align="right" width="40%">
						<a onclick="fninvsh('emptyfolder')" href="javascript:void(0);">
						<img border="0" align="absmiddle" src="<?php echo vtiger_imageurl('close.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"/></a>
					</td>
				</tr>
			</table>
			<div style='padding: 10px;'>
				<table class="drop_down"  border=0 cellpadding=5 cellspacing=0 width=100<?php echo '%>';?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMPTY_FOLDERS']->value, 'folder');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->value) {
?>
						<tr onmouseout="this.className='lvtColData'" onmouseover="this.className='lvtColDataHover'">
							<td><?php echo $_smarty_tpl->tpl_vars['folder']->value['foldername'];?>
</td>
							<td align=right>
								<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == "on" && $_smarty_tpl->tpl_vars['folder']->value['folderid'] != "1") {?>
									<a href="javascript:;" onclick="DeleteFolderCheck(<?php echo $_smarty_tpl->tpl_vars['folder']->value['folderid'];?>
);"><img border="0" src="<?php echo vtiger_imageurl('delete.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" style="cursor: pointer;"/></a>
								<?php } else { ?>
									&nbsp;
								<?php }?>
							</td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
			</div>
		</div>
	<?php }
}
}
}

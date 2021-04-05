<?php
require 'APIs/Listo2/crm.php';
/* Smarty version 3.1.30, created on 2021-01-20 15:55:54
  from "/var/www/html/desarrollocartera/Smarty/templates/DetailView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008a6ea7e4e75_04961322',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    'b7d08a10d50f851c1e00a1ce794f3db8bb0aa52c' =>
    array (
      0 => '/var/www/html/desarrollocartera/Smarty/templates/DetailView.tpl',
      1 => 1611176850,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
    'file:Buttons_List.tpl' => 1,
    'file:applicationmessage.tpl' => 1,
    'file:RelatedPanes.tpl' => 2,
    'file:DetailViewHidden.tpl' => 1,
    'file:RelatedListNew.tpl' => 2,
    'file:DetailViewUI.tpl' => 1,
    'file:DetailViewFields.tpl' => 2,
    'file:Inventory/InventoryActions.tpl' => 1,
    'file:TagCloudDisplay.tpl' => 1,
  ),
),false)) {
function content_6008a6ea7e4e75_04961322 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/html/desarrollocartera/Smarty/libs/plugins/modifier.replace.php';
?>

<?php echo '<script'; ?>
 type="text/javascript" src="include/js/dtlviewajax.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/js/clipboard.min.js"><?php echo '</script'; ?>
>
<span id="crmspanid" style="display:none;position:absolute;" onmouseover="show('crmspanid');">
	<a class="link" id="clipcopylink" href="javascript:;" onclick="handleCopyClipboard(event);" data-clipboard-text=""><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_COPY_BUTTON'];?>
</a>
</span>
<div id="convertleaddiv" style="display:block;position:absolute;left:225px;top:150px;"></div>
<?php echo '<script'; ?>
>

var clipcopyobject = new ClipboardJS('#clipcopylink');
clipcopyobject.on('success', function(e) { clipcopyclicked = false; });
clipcopyobject.on('error', function(e) { clipcopyclicked = false; });
function showHideStatus(sId,anchorImgId, sImagePath) {
	var oObj = document.getElementById(sId);
	if (oObj.style.display == 'block') {
		oObj.style.display = 'none';
		if (anchorImgId !=null) {

			document.getElementById(anchorImgId).src = 'themes/images/inactivate.gif';
			document.getElementById(anchorImgId).alt = '<?php echo getTranslatedString('LBL_Show','Settings');?>
';
			document.getElementById(anchorImgId).title = '<?php echo getTranslatedString('LBL_Show','Settings');?>
';
			document.getElementById(anchorImgId).parentElement.className = 'exp_coll_block activate';

		}
	} else {
		oObj.style.display = 'block';
		if (anchorImgId !=null) {

			document.getElementById(anchorImgId).src = 'themes/images/activate.gif';
			document.getElementById(anchorImgId).alt = '<?php echo getTranslatedString('LBL_Hide','Settings');?>
';
			document.getElementById(anchorImgId).title = '<?php echo getTranslatedString('LBL_Hide','Settings');?>
';
			document.getElementById(anchorImgId).parentElement.className = 'exp_coll_block inactivate';

		}
	}
}

function tagvalidate() {
	if (trim(document.getElementById('txtbox_tagfields').value) != '') {
		SaveTag('txtbox_tagfields','<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
');
	} else {
		alert("<?php echo $_smarty_tpl->tpl_vars['APP']->value['PLEASE_ENTER_TAG'];?>
");
		return false;
	}
}
<?php echo '</script'; ?>
>

<div id="lstRecordLayout" class="layerPopup" style="display:none;width:325px;height:300px;"></div>
<?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>

	<?php $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];?>
		<!-- Modal Facturas -->
        <div class="modal" id="modalfact" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document" style="min-width:820px">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row">
							<div class="form-inline col-sm-12">
								<div class="col-sm-12 text-left" style="padding: 0px; margin-bottom: 16px">
								  <h6>Solicitar descarga de facturación</h6>
								</div>
								<div class="form-group col-md-5" style="padding: 0px">
									<h6 style="margin: 0px 7px;float: left;">De:</h6><br>
									<select id="mes21" style="font-size: 15px">

									<?php
									for ($i=0; $i < count($meses); $i++) {
										echo '<option value="'. sprintf("%02d", ($i+1)) .'">'.$meses[$i]."</option>";
									}
									?>

									</select>
									<span>&nbsp;&nbsp;</span>
									<select id="anio21" style="font-size: 15px">
									<?php
									$anio = date("Y");

				                    for ($i=$anio-3; $i <= $anio; $i++) {
				                      echo "<option value=".$i.">".$i."</option>";
				                    }
				                    ?>
				                    </select>
								</div>
								<div class="form-group col-md-5" style="padding: 0px">
									<h6 style="margin: 0px 7px;float: left;">A:</h6><br>
									<select id="mes22" style="font-size: 15px">
									<?php
									for ($i=0; $i < count($meses); $i++) {
										echo '<option value="'.sprintf("%02d", ($i+1)).'">'.$meses[$i]."</option>";
									}
									?>
									</select>
									<span>&nbsp;&nbsp;</span>
									<select id="anio22" style="font-size: 15px">
									<?php
									$anio = date("Y");

				                    for ($i=$anio; $i >= $anio-3  ; $i--) {
				                      echo '<option value="'.$i.'">'.$i."</option>";
				                    }
				                    ?>
				                    </select>
								</div>
								<div class="form-group col-md-2" style="padding: 0px">
								<label style="text-align: center"><input id="metadat" type="checkbox" name="metadata">Consultar solo metadatos</label>
								</div>
							</div>
							<br>
							<div id="meta" class="col-sm-12 text-left" style="margin-top:28px">
							    <h6>Metadatos</h6>
							    <table class="table table-striped">
							      <tr>
								    <td style="padding: 4px">Último periodo consultado:</td>
								    <td style="padding: 4px"><b id="fac_perid">Cargando...</b></td>
								  </tr>
							      <tr>
								   <td style="padding: 4px">Total de metadatos descargados:</td>
								   <td style="padding: 4px"><span id="fac_dowloaded">Cargando...</span></td>
								  </tr>
								  <tr>
								    <td style="padding: 4px">Total de metadatos:</td>
								    <td style="padding: 4px"><span id="fac_total">Cargando...</span></td>
								  </tr>
								  <tr>
								    <td style="padding: 4px">Porcentaje descargado:</td>
								    <td style="padding: 4px"><span id="fac_percent">Cargando...</span></td>
								  </tr>
								  <tr>
								    <td style="padding: 4px">Siguiente sincronización:</td>
								    <td style="padding: 4px"><span id="fac_sync">Cargando...</span></td>
								  </tr>
							    </table>
							    <a href="" data-toggle="collapse" data-target="#historial" >+ Historial de solicitudes</a>
								<div id="historial" class="collapse">
									<table class="table" id="reqsol">

									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer" style="padding: 0px; border-top: 0px;">
						<button type="button" class="crmbutton medium cancel" data-dismiss="modal">Cancelar</button>
						<button id="btn-factura-md" type="button" class="crmbutton medium save">Obtener facturación</button>
					</div>
				</div>
			</div>
		</div>
		<!-- cierre -->
		<!-- Modal Declaraciones -->
        <div class="modal" id="modaldec" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document" style="min-width:820px">
				<div class="modal-content">
					<div class="modal-body" style="padding: 0px;">
						<div class="row">
							<div class="form-inline col-sm-12">
								<div id="decc" class="col-sm-12 text-left" style="margin-top:9px">
									<h6>Declaraciones anuales</h6>
									<br>
								    <table class="table table-striped">
								      <tr>
								    	<th style="padding: 3px">Año</th>
								    	<th style="padding: 3px">Razón social</th>
								    	<th style="padding: 3px">Declaración</th>
								    	<th style="padding: 3px">Hoja de pago</th>
								    	<th style="padding: 3px">Detalles</th>
								      </tr>
								      <?php $crm = new CRM(); foreach ($crm->getdeclaraciones($_smarty_tpl->tpl_vars['ID']->value) as $key): ?>
								      <tr>
									    <td style="padding: 4px"><?php echo $key->anio; ?></td>
									    <td style="padding: 4px"><?php echo $key->razon; ?></td>
									    <td style="padding: 4px"><a href="<?php echo $key->url; ?>" target="_blank">Descargar PDF</a></td>
									    <td style="padding: 4px"><?php if($key->pago != null){ ?><a href="<?php echo $key->pago; ?>" target="_blank">Descargar Pago</a><?php }else{
									    	echo "No aplica";
									    } ?></td>
									    <td style="padding: 4px"><a href="/desarrollocartera/index.php?action=DetailView&module=estatusdeclaraciones&record=<?php echo $key->detalle; ?>&parenttab=ptab" target="_blank">Ir al detalle</a></td>
									  </tr>
									<?php endforeach; ?>
								    </table>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer" style="padding: 0px; border-top: 0px;">
						<button type="button" class="crmbutton medium cancel" data-dismiss="modal" style="width: 100px;">Aceptar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- cierre -->
		<!-- Modal registro-->
              <div class='modal' id='mdl-terminos' role='dialog'>
                <div class='modal-dialog' style="min-width:820px">
                  <div class='modal-content'>
                    <div class='modal-body'>
                      <h6>Registro para la solicitud de declaraciones y facturación</h6>
                      <br>
                      <div class='text-left row'>
                      	<div class="form-group col-md-6">
                      		<p style="margin-bottom: 6px;">Nombre o Razón social</p>
                      		<input id="regrazon" type="text" style="width: 100%" disabled>
                      	</div>
                      	<div class="form-group col-md-6">
                      		<p style="margin-bottom: 6px;">RFC</p>
                      		<input id="regrfc" type="text" style="width: 100%" disabled>
                      	</div>
                      </div>
                      <label id='terms-fail' style='color:red'>La clave CIEC esta vacía</label>
                    </div>
                    <div class='modal-footer' style='padding: 6px; border-top:none'>
                      <!-- <div role='status' class='pull-left slds-spinner slds-spinner_small slds-spinner_brand' style='position: absolute; left: 12%; margin-top: 82px;'>
						<div class='slds-spinner__dot-a'></div>
						<div class='slds-spinner__dot-b'></div>
					  </div> -->
                      <button type='button' class='crmbutton medium cancel' data-dismiss='modal'>Cancelar</button>
                      <button id='register' type='button' class='crmbutton medium save' data-dismiss='modal'>Aceptar</button>
                    </div>
                  </div>
                </div>
              </div>
                  <!-- Modal confirmacion-->
              <div class='modal fade' id='mdl-confirm-fac' role='dialog'>
                <div class='modal-dialog modal-sm'>
                  <div class='modal-content'>
                    <div class='modal-body'>
                      <p class='text-left'>La facturacion se descargarán en breve.</p>
                    </div>
                    <div class='modal-footer' style='padding: 6px; border-top:none'>
                      <button type='button' class='crmbutton medium save' data-dismiss='modal'>Aceptar</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Modal -->
            <div class='modal' id='mdl-grafica' role='dialog'>
                <div class='modal-dialog' style="min-width:1200px">
                  <div class='modal-content'>
                    <div class='modal-body' id="graphcont">
                      <canvas id="canvasgraph" style="width: 100%; height: 420px;"></canvas>
                    </div>
                    <div class='modal-footer' style='padding: 6px; border-top:none'>
                      <button type='button' class='crmbutton medium cancel' data-dismiss='modal' style="width: 100px">Aceptar</button>
                    </div>
                  </div>
                </div>
              </div>
<!-- Modal -->
<div class='modal' id='modal-facturacion' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg' role='document' style='max-width:1000px'>
    <div class='modal-content' style='width: 100%;'>
      <div class='modal-body'>
      <!-- <div class='row' style='color: black'>

        <div class='col-lg-3' style='text-align:start'><h6>Año</h6>
        </div>
        <div class='col-lg-4' style='text-align:start'><h6>Mes</h6>
        </div>
        <div class='col-lg-4' style='text-align:start'><h6>Tipo de Factura</h6>
        </div>
        <div class='col-lg-1' style='display:flex'>
        </div>
      </div>
 -->        <div class='row'>
	 		<div class="col-sm-12 text-left" style="padding: 0px; margin-bottom: 16px">
			  <h6 style="padding: 0px 0px 0px 14px;">Detalle de facturación</h6>
			</div>
          <div class='col-sm-3 form-inline'>
          	<h6 style="margin: 0px 7px;float: left;">Año:</h6><br>
            <select id='sel-anio-facturacion' type='text'style='width: 130px; font-size: 15px;'>
              <option value='0'>Seleccione...</option>
              <?php
				$anio = date("Y");

                for ($i=$anio; $i >= $anio-4  ; $i--) {
                  echo '<option value="'.$i.'">'.$i."</option>";
                }
                ?>
              <!-- <option value='2020'>2020</option>
              <option value='2019'>2019</option>
              <option value='2018'>2018</option>
              <option value='2017'>2017</option> -->
            </select>
          </div>
          <div class='col-sm-3 form-inline'>
          	<h6 style="margin: 0px 7px;float: left;">Mes:</h6><br>
            <select id='sel-mes-facturacion' type='text'style='width: 150px; font-size: 15px;'>
              <option value='0'>Seleccione...</option>
              <option value='01'>Enero</option>
              <option value='02'>Febrero</option>
              <option value='03'>Marzo</option>
              <option value='04'>Abril</option>
              <option value='05'>Mayo</option>
              <option value='06'>Junio</option>
              <option value='07'>Julio</option>
              <option value='08'>Agosto</option>
              <option value='09'>Septiembre</option>
              <option value='10'>Octubre</option>
              <option value='11'>Noviembre</option>
              <option value='12'>Diciembre</option>
            </select>
          </div>
          <div class='col-sm-4 form-inline'>
          	<h6 style="margin: 0px 7px;float: left;">Tipo:</h6><br>
            <select id='sel-tipo-factura-facturacion' type='text' style='width: 150px; font-size: 15px;'>
              <option value='0'>Seleccione...</option>
              <option value='INGRESO'>Ingresos</option>
              <option value='EGRESO'>Egresos</option>
              <option value='NOMINA'>Nómina</option>
            </select>
          </div>
          <div class='col-sm-2' style='display:flex'>
            <button id='btn-buscar-facturacion' type='button' style="width: 100%" class='crmbutton medium create align-self-center' >Buscar</button>
          </div>
        </div>
        <hr style='margin: 15px;'>
        <div id='div-contenido-facturacion' style='font-size: larger; color: gray;'>
        <div class='row'>
          <div class='col-sm-9'>
            <div class='card' style='text-align: start'>
              <div class='card-body'>
                <h6 class='card-title'>Facturas</h6>
                <div id='contenido-facturas'></div>
              </div>
            </div>
          </div>
          <div class='col-sm-3'>
            <div class='card'>
              <div class='card-body'>
                <h6 class='card-title'>Totales</h6>
                <div id='contenido-totales-facturas'></div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class='modal-footer' style='padding-bottom: 1px;'>
        <button type='button' class='crmbutton medium cancel' style="width: 90px;" data-dismiss='modal'>Cerrar</button>
        <!-- <button id='btn-guardar_modal' type='button' class='crmbutton medium save' data-dismiss='modal'>Guardar</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal confirmacion-->
              <div class='modal fade' id='mdl-confirm' role='dialog'>
                <div class='modal-dialog modal-sm'>
                  <div class='modal-content'>
                    <div class='modal-body'>
                      <p class='text-left'>Las declaraciones se descargarán en breve.</p>
                    </div>
                    <div class='modal-footer' style='padding: 6px; border-top:none'>
                      <button type='button' class='crmbutton medium save' data-dismiss='modal'>Aceptar</button>
                    </div>
                  </div>
                </div>
              </div>


          <!-- Modal Solicitud Declaraciones -->
          <div class='modal' id='modaldecla' role='dialog' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
					<div class='modal-dialog' role='document' style='min-width:820px'>
						<div class='modal-content'>
							<div class='modal-body'>
								<div class='row'>
									<div class='col-sm-6'>
										<h6 style='float: left'>De:</h6>
                    <div class='input-group'>
                    <select id='anio1' style='font-size: 15px; width: 100%'>
                    <?php
                    $anio = date("Y");

                    for ($i=$anio; $i >= $anio-3  ; $i--) {
                      echo '<option value='.$i.'>'.$i.'</option>';
                    }

                    ?>
                    </select>
										</div>
									</div>
									<div class='col-sm-6'>
									  <h6 style='float: left'>A:</h6>
                    <div class='input-group'>
                    <select id='anio2' style='font-size: 15px; width: 100%'>
                    <?php
                    for ($i=$anio; $i >= $anio-3  ; $i--) {
                      echo '<option value='.$i.'>'.$i.'</option>';
                    }
                     ?>
                    </select>
                    </div>
                  </div>
                  <div class='col-sm-12'>
                    <br>
                    <h6 style='float:left'>Tipo de declaración:</h6>
                    <select id='tipo-decla' style='float:left; font-size: 15px; margin-left:30px; width: 200px'>
                    	<option value='anual'>Anual</option>
                    	<option value='mensual'>Mensual</option>
                    </select>
                  </div>
                  			<div ss='col-sm-12' style="margin-left: 14px; margin-top: 30px; width: 100%;">
                  				<a href="" data-toggle="collapse" data-target="#historialdec" >+ Historial de solicitudes</a>
								<div id="historialdec" class="collapse">
									<table class="table" id="reqsoldec">

									</table>
								</div>
							</div>

								</div>
							</div>
							<div class='modal-footer' style='padding: 0px; border-top: 0px;'>
								<button type='button' class='crmbutton medium cancel' data-dismiss='modal'>Cancelar</button>
								<button id='btn-obt-decla' type='button' class='crmbutton medium save'>Obtener declaraciones</button>
							</div>
						</div>
					</div>
				</div>
				<!-- cierre -->


<?php } ?>

<?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos') {?>
	<!-- Modal registro-->
              <div class='modal' id='mdlfinder' role='dialog'>
                <div class='modal-dialog' style="min-width:820px">
                  <div class='modal-content'>
                    <div class='modal-body'>
                      Modal del sistema de archivos
                    </div>
                    <div class='modal-footer' style='padding: 6px; border-top:none'>
                      <button id='register' type='button' class='crmbutton medium create' style="width: 90px;" data-dismiss='modal'>Salir</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- cierre -->
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Leads') {?>
	<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts') {?>
		<?php $_smarty_tpl->_assignInScope('address1', '$MOD.LBL_BILLING_ADDRESS');
?>
		<?php $_smarty_tpl->_assignInScope('address2', '$MOD.LBL_SHIPPING_ADDRESS');
?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>
		<?php $_smarty_tpl->_assignInScope('address1', '$MOD.LBL_PRIMARY_ADDRESS');
?>
		<?php $_smarty_tpl->_assignInScope('address2', '$MOD.LBL_ALTERNATE_ADDRESS');
?>
	<?php }?>
	<div id="locateMap" onMouseOut="fninvsh('locateMap')" onMouseOver="fnvshNrm('locateMap')">
		<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts') {?>
						<a href="javascript:;" onClick="fninvsh('locateMap'); searchMapLocation( 'Main' );" class="calMnu"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_BILLING_ADDRESS'];?>
</a>
						<a href="javascript:;" onClick="fninvsh('locateMap'); searchMapLocation( 'Other' );" class="calMnu"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SHIPPING_ADDRESS'];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>
						<a href="javascript:;" onClick="fninvsh('locateMap'); searchMapLocation( 'Main' );" class="calMnu"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PRIMARY_ADDRESS'];?>
</a>
						<a href="javascript:;" onClick="fninvsh('locateMap'); searchMapLocation( 'Other' );" class="calMnu"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALTERNATE_ADDRESS'];?>
</a>
					<?php }?>

				</td>
			</tr>
		</table>
	</div>
<?php }?>

<table width="100%" cellpadding="2" cellspacing="0" border="0" class="detailview_wrapper_table">
	<tr>
		<td class="detailview_wrapper_cell">

			<?php $_smarty_tpl->_subTemplateRender("file:Buttons_List.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			<!-- Contents -->
			<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
				<tr>
					<td valign=top><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></td>
					<td class="showPanelBg" valign=top width=100<?php echo '%>';?>
						<!-- PUBLIC CONTENTS STARTS-->
						<div class="small" style="padding:14px" onclick="hndCancelOutsideClick();";>

						<table align="center" border="0" cellpadding="0" cellspacing="0" width="95%">
							<tr><td>

								<?php $_smarty_tpl->_assignInScope('USE_ID_VALUE', $_smarty_tpl->tpl_vars['MOD_SEQ_ID']->value);
?>
								<?php if ($_smarty_tpl->tpl_vars['USE_ID_VALUE']->value == '') {?> <?php $_smarty_tpl->_assignInScope('USE_ID_VALUE', $_smarty_tpl->tpl_vars['ID']->value);
?> <?php }?>
								<span class="dvHeaderText">[ <?php echo $_smarty_tpl->tpl_vars['USE_ID_VALUE']->value;?>
 ] <?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 -  <?php echo getTranslatedString($_smarty_tpl->tpl_vars['SINGLE_MOD']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
</span>&nbsp;&nbsp;&nbsp;<span class="small"><?php echo $_smarty_tpl->tpl_vars['UPDATEINFO']->value;?>
</span>
								&nbsp;
								<span id="vtbusy_info" style="display:none;" valign="bottom">
								<div role="status" class="slds-spinner slds-spinner_brand slds-spinner_x-small" style="position:relative; top:6px;">
									<div class="slds-spinner__dot-a"></div>
									<div class="slds-spinner__dot-b"></div>
								</div>
								</span>
							</td></tr>
						</table>
						<br>
						<?php $_smarty_tpl->_subTemplateRender("file:applicationmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						<!-- Entity and More information tabs -->
						<table border=0 cellspacing=0 cellpadding=0 width=95% align=center>
							<tr>
								<td>
									<div class="small detailview_utils_table_top">
										<div class="detailview_utils_table_tabs">
											<div class="detailview_utils_table_tab detailview_utils_table_tab_selected detailview_utils_table_tab_selected_top"><?php echo getTranslatedString($_smarty_tpl->tpl_vars['SINGLE_MOD']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
</div>
											<?php if ($_smarty_tpl->tpl_vars['SinglePane_View']->value == 'false' && $_smarty_tpl->tpl_vars['IS_REL_LIST']->value != false && count($_smarty_tpl->tpl_vars['IS_REL_LIST']->value) > 0) {?>
												<?php if ($_smarty_tpl->tpl_vars['HASRELATEDPANES']->value == 'true') {?>
													<?php $_smarty_tpl->_subTemplateRender("file:RelatedPanes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabposition'=>'top','RETURN_RELATEDPANE'=>''), 0, false);
?>

												<?php } else { ?>
												<div class="detailview_utils_table_tab detailview_utils_table_tab_unselected detailview_utils_table_tab_unselected_top" onmouseout="fnHideDrop('More_Information_Modules_List');" onmouseover="fnDropDown(this,'More_Information_Modules_List');">
													<a href="index.php?action=CallRelatedList&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
</a>
													<div onmouseover="fnShowDrop('More_Information_Modules_List')" onmouseout="fnHideDrop('More_Information_Modules_List')"
														 id="More_Information_Modules_List" class="drop_mnu" style="left: 502px; top: 76px; display: none;">
														<table border="0" cellpadding="0" cellspacing="0" width="100%">
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IS_REL_LIST']->value, '_RELATED_MODULE', false, '_RELATION_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_RELATION_ID']->value => $_smarty_tpl->tpl_vars['_RELATED_MODULE']->value) {
?>
																<tr><td><a class="drop_down" href="index.php?action=CallRelatedList&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
&selected_header=<?php echo $_smarty_tpl->tpl_vars['_RELATED_MODULE']->value;?>
&relation_id=<?php echo $_smarty_tpl->tpl_vars['_RELATION_ID']->value;?>
#tbl_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['_RELATED_MODULE']->value;?>
"><?php echo getTranslatedString($_smarty_tpl->tpl_vars['_RELATED_MODULE']->value,$_smarty_tpl->tpl_vars['_RELATED_MODULE']->value);?>
</a></td></tr>
															<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

														</table>
													</div>
												</div>
												<?php }?>
											<?php }?>
										</div>
										<div class="detailview_utils_table_tabactionsep detailview_utils_table_tabactionsep_top" id="detailview_utils_table_tabactionsep_top"></div>
										<div class="detailview_utils_table_actions detailview_utils_table_actions_top" id="detailview_utils_actions">
												<?php if ($_smarty_tpl->tpl_vars['EDIT_PERMISSION']->value == 'yes') {?>
													<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="crmbutton small edit" onclick="DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; DetailView.return_action.value='DetailView'; DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
';DetailView.module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
';submitFormForAction('DetailView','EditView');" type="button" name="Edit" value="&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
&nbsp;">&nbsp;
												<?php }?>
												<?php if (((isset($_smarty_tpl->tpl_vars['CREATE_PERMISSION']->value) && $_smarty_tpl->tpl_vars['CREATE_PERMISSION']->value == 'permitted') || (isset($_smarty_tpl->tpl_vars['EDIT_PERMISSION']->value) && $_smarty_tpl->tpl_vars['EDIT_PERMISSION']->value == 'yes')) && $_smarty_tpl->tpl_vars['MODULE']->value != 'Documents') {?>
													<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="crmbutton small create" onclick="DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; DetailView.return_action.value='DetailView'; DetailView.isDuplicate.value='true';DetailView.module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; submitFormForAction('DetailView','EditView');" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
">&nbsp;
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['DELETE']->value == 'permitted') {?>
													<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="crmbutton small delete" onclick="DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; DetailView.return_action.value='index'; <?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts') {?> var confirmMsg = '<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_ACCOUNT_DELETE_CONFIRMATION'];?>
' <?php } else { ?> var confirmMsg = '<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
' <?php }?>; submitFormForActionWithConfirmation('DetailView', 'Delete', confirmMsg);" type="button" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
">&nbsp;
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['privrecord']->value != '') {?>
													<span class="detailview_utils_prev" onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&viewtype=<?php if (isset($_smarty_tpl->tpl_vars['VIEWTYPE']->value)) {
echo $_smarty_tpl->tpl_vars['VIEWTYPE']->value;
}?>&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['privrecord']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
&start=<?php echo $_smarty_tpl->tpl_vars['privrecordstart']->value;?>
'" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
"><img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
"  name="privrecord" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
" src="<?php echo vtiger_imageurl('rec_prev.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></span>&nbsp;
												<?php } else { ?>
													<img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
" src="<?php echo vtiger_imageurl('rec_prev_disabled.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
">
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['privrecord']->value != '' || $_smarty_tpl->tpl_vars['nextrecord']->value != '') {?>
													<span class="detailview_utils_jumpto" id="jumpBtnIdTop" onclick="var obj = this;var lhref = getListOfRecords(obj, '<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_JUMP_BTN'];?>
"><img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_JUMP_BTN'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_JUMP_BTN'];?>
" name="jumpBtnIdTop" id="jumpBtnIdTop" src="<?php echo vtiger_imageurl('rec_jump.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></span>&nbsp;
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['nextrecord']->value != '') {?>
													<span class="detailview_utils_next" onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&viewtype=<?php if (isset($_smarty_tpl->tpl_vars['VIEWTYPE']->value)) {
echo $_smarty_tpl->tpl_vars['VIEWTYPE']->value;
}?>&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['nextrecord']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
&start=<?php echo $_smarty_tpl->tpl_vars['nextrecordstart']->value;?>
'" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_NEXT'];?>
"><img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_NEXT'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_NEXT'];?>
"  name="nextrecord" src="<?php echo vtiger_imageurl('rec_next.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></span>&nbsp;
												<?php } else { ?>
													<img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_NEXT'];?>
" src="<?php echo vtiger_imageurl('rec_next_disabled.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
">&nbsp;
												<?php }?>
												<span class="detailview_utils_toggleactions"><img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['TOGGLE_ACTIONS'];?>
" src="<?php echo vtiger_imageurl('menu-icon.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" width="16px;" onclick="if (document.getElementById('actioncolumn').style.display=='none') {document.getElementById('actioncolumn').style.display='table-cell';}else{document.getElementById('actioncolumn').style.display='none';}window.dispatchEvent(new Event('resize'));"></span>&nbsp;
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign=top align=left >
									<table border=0 cellspacing=0 cellpadding=3 width=100% class="dvtContentSpace" style="border-bottom:0;">
										<tr valign=top>

											<td align=left>
												<!-- content cache -->

												<table border=0 cellspacing=0 cellpadding=0 width=100<?php echo '%>';?>
													<tr valign=top>
														<td style="padding:5px">
															<!-- Command Buttons -->
															<table border=0 cellspacing=0 cellpadding=0 width=100<?php echo '%>';?>
																<form action="index.php" method="post" name="DetailView" id="formDetailView">
																	<input type="hidden" id="hdtxt_IsAdmin" value="<?php if (isset($_smarty_tpl->tpl_vars['hdtxt_IsAdmin']->value)) {
echo $_smarty_tpl->tpl_vars['hdtxt_IsAdmin']->value;
} else { ?>0<?php }?>">
																	<?php $_smarty_tpl->_subTemplateRender("file:DetailViewHidden.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

																	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'detail', false, 'header', 'BLOCKS', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header']->value => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['total'];
?>
																		<tr><td style="padding:5px">
																				<!-- Detailed View Code starts here-->
																				<table border=0 cellspacing=0 cellpadding=0 width=100% class="small detailview_header_table">
																					<tr style="text-align: center;">
																						<td ></td>
																						<td
																							<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts' && (strstr($_smarty_tpl->tpl_vars['header']->value,'complementopfn') || strstr($_smarty_tpl->tpl_vars['header']->value,'poderesn') || strstr($_smarty_tpl->tpl_vars['header']->value,'pldn') || strstr($_smarty_tpl->tpl_vars['header']->value,'AFEX') || strstr($_smarty_tpl->tpl_vars['header']->value,'Mesa de Control') || $_smarty_tpl->tpl_vars['header']->value == 'Origen y Destino de los Recursos' || $_smarty_tpl->tpl_vars['header']->value == 'Datos Personales' || $_smarty_tpl->tpl_vars['header']->value == 'directivos' || $_smarty_tpl->tpl_vars['header']->value == 'princlientesn' || $_smarty_tpl->tpl_vars['header']->value == 'checklistdoc' || $_smarty_tpl->tpl_vars['header']->value == 'Persona Fisica' || strstr($_smarty_tpl->tpl_vars['header']->value,'consultaburo'))) {?>
																									<?php echo 'style="background-color:#d61f43;color: #fff; font-size:16px"';?>

																								<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'declaraciones')){
																									echo 'id="formdeclaraciones" style="background-color:#d61f43;color: #fff; font-size:16px"';
																								}elseif(strstr($_smarty_tpl->tpl_vars['header']->value,'facturacion')){
																									echo 'id="formfacturacion" style="background-color:#d61f43;color: #fff; font-size:16px"';
																								}elseif ($_smarty_tpl->tpl_vars['MODULE']->value == 'clientescartera' && (strstr($_smarty_tpl->tpl_vars['header']->value,'CobroPago') || strstr($_smarty_tpl->tpl_vars['header']->value,'fideicomisos') || strstr($_smarty_tpl->tpl_vars['header']->value,'admonarrendamiento') || strstr($_smarty_tpl->tpl_vars['header']->value,'Project') || strstr($_smarty_tpl->tpl_vars['header']->value,'Vendors') || strstr($_smarty_tpl->tpl_vars['header']->value,'ModComments'))) {?>
																									<?php echo 'style="background-color:#d61f43;color: #fff; font-size:16px"';?>

																							<?php }?>
																						>
																							<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>
																								<?php if ($_smarty_tpl->tpl_vars['header']->value == 'Origen y Destino de los Recursos') {?>
																										<?php echo 'DECLARACIONES';?>

																									<?php } elseif ($_smarty_tpl->tpl_vars['header']->value == 'Datos Personales') {?>
																										<?php echo 'DATOS PERSONALES';?>

																									<?php } elseif ($_smarty_tpl->tpl_vars['header']->value == 'directivos') {?>
																										<?php echo 'DATOS DEL CRÉDITO';?>

																									<?php } elseif ($_smarty_tpl->tpl_vars['header']->value == 'princlientesn') {?>
																										<?php echo 'REFERENCIAS';?>

																									<?php } elseif ($_smarty_tpl->tpl_vars['header']->value == 'checklistdoc') {?>
																										<?php echo 'DOCUMENTOS';?>

																									<?php } elseif ($_smarty_tpl->tpl_vars['header']->value == 'Persona Fisica') {?>
																										<?php echo 'INFORMACIÓN DE PERSONA FÍSICA';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'Mesa de Control')) {?>
																										<?php echo 'APROBACIÓN MESA DE CONTROL';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'AFEX')) {?>
																										<?php echo 'PRE-APROBACIÓN AFEX';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'complementopfn')) {?>
																										<?php echo 'COMPLEMENTOS';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'poderesn')) {?>
																										<?php echo 'INFORMACIÓN PARA EL ÁREA LEGAL';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'pldn')) {?>
																										<?php echo 'INFORMACIÓN PARA PLD';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'pldn')) {?>
																										<?php echo 'INFORMACIÓN PARA PLD';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'declaraciones')) {?>
																										<?php echo 'DECLARACIONES';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'facturacion')) {?>
																										<?php echo 'FACTURACIÓN';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'consultaburo')) {?>
																										<?php echo 'REPORTE DE BURÓ DE CREDITO';?>

																								<?php }?>
																								<?php } elseif ($_smarty_tpl->tpl_vars['MODULE']->value == 'clientescartera') {?>
																									<?php if ($_smarty_tpl->tpl_vars['header']->value == 'CobroPago') {?>
																										<?php echo 'LÍNEA DE CRÉDITO';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'fideicomisos')) {?>
																										<?php echo 'FIDEICOMISOS';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'admonarrendamiento')) {?>
																										<?php echo 'ARRENDAMIENTO';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'Project')) {?>
																										<?php echo 'CREDITOS';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'Vendors')) {?>
																										<?php echo 'FACTORAJE';?>

																									<?php } elseif (strstr($_smarty_tpl->tpl_vars['header']->value,'ModComments')) {?>
																										<?php echo 'COBRANZA';?>

																									<?php }?>
																							<?php }?></td>
																						<td></td>
																						<td align=right>
																							<?php if (isset($_smarty_tpl->tpl_vars['MOD']->value['LBL_ADDRESS_INFORMATION']) && $_smarty_tpl->tpl_vars['header']->value == $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADDRESS_INFORMATION'] && ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Leads')) {?>
																								<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Leads') {?>
																									<input name="mapbutton" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOCATE_MAP'];?>
" class="crmbutton small create" type="button" onClick="searchMapLocation( 'Main' )" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOCATE_MAP'];?>
">
																								<?php } else { ?>
																									<input name="mapbutton" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOCATE_MAP'];?>
" class="crmbutton small create" type="button" onClick="fnvshobj(this,'locateMap');" onMouseOut="fninvsh('locateMap');" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOCATE_MAP'];?>
">
																								<?php }?>
																							<?php }?>
																						</td>
																					</tr>

																					<!-- This is added to display the existing comments -->
																					<?php if ($_smarty_tpl->tpl_vars['header']->value == $_smarty_tpl->tpl_vars['APP']->value['LBL_COMMENTS'] || (isset($_smarty_tpl->tpl_vars['MOD']->value['LBL_COMMENTS']) && $_smarty_tpl->tpl_vars['header']->value == $_smarty_tpl->tpl_vars['MOD']->value['LBL_COMMENTS']) || (isset($_smarty_tpl->tpl_vars['MOD']->value['LBL_COMMENT_INFORMATION']) && $_smarty_tpl->tpl_vars['header']->value == $_smarty_tpl->tpl_vars['MOD']->value['LBL_COMMENT_INFORMATION'])) {?>
																						<tr>
																							<td colspan=4 class="dvInnerHeader">
																								<b><?php if (isset($_smarty_tpl->tpl_vars['MOD']->value['LBL_COMMENT_INFORMATION'])) {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_COMMENT_INFORMATION'];
} else {
echo $_smarty_tpl->tpl_vars['APP']->value['LBL_COMMENTS'];
}?></b>
																							</td>
																						</tr>
																						<tr>
																							<td colspan=4 class="dvtCellInfo"><?php echo $_smarty_tpl->tpl_vars['COMMENT_BLOCK']->value;?>
</td>
																						</tr>
																						<tr><td>&nbsp;</td></tr>
																					<?php }?>

																					<?php if ($_smarty_tpl->tpl_vars['header']->value != 'Comments' && (!isset($_smarty_tpl->tpl_vars['BLOCKS']->value[$_smarty_tpl->tpl_vars['header']->value]['relatedlist']) || $_smarty_tpl->tpl_vars['BLOCKS']->value[$_smarty_tpl->tpl_vars['header']->value]['relatedlist'] == 0)) {?>

																						<tr class="detailview_block_header"><td colspan=4 class="dvInnerHeader"><div style="float:left;font-weight:bold;"><div style="float:left;"><a href="javascript:showHideStatus('tbl<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['header']->value,' ','');?>
','aid<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['header']->value,' ','');?>
','<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
');"><?php if (isset($_smarty_tpl->tpl_vars['BLOCKINITIALSTATUS']->value[$_smarty_tpl->tpl_vars['header']->value]) && $_smarty_tpl->tpl_vars['BLOCKINITIALSTATUS']->value[$_smarty_tpl->tpl_vars['header']->value] == 1) {?><span class="exp_coll_block inactivate"><img id="aid<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['header']->value,' ','');?>
" src="<?php echo vtiger_imageurl('activate.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" style="border: 0px solid #000000;" alt="<?php echo getTranslatedString('LBL_Hide','Settings');?>
" title="<?php echo getTranslatedString('LBL_Hide','Settings');?>
"/></span><?php } else { ?><span class="exp_coll_block activate"><img id="aid<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['header']->value,' ','');?>
" src="<?php echo vtiger_imageurl('inactivate.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" style="border: 0px solid #000000;" alt="<?php echo getTranslatedString('LBL_Show','Settings');?>
" title="<?php echo getTranslatedString('LBL_Show','Settings');?>
"/></span><?php }?></a></div><b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</b></div></td>
																						</tr>
																					<?php }?>
																				</table>
																				<?php if ($_smarty_tpl->tpl_vars['header']->value != 'Comments') {?>
																					<?php if ((isset($_smarty_tpl->tpl_vars['BLOCKINITIALSTATUS']->value[$_smarty_tpl->tpl_vars['header']->value]) && $_smarty_tpl->tpl_vars['BLOCKINITIALSTATUS']->value[$_smarty_tpl->tpl_vars['header']->value] == 1) || !empty($_smarty_tpl->tpl_vars['BLOCKS']->value[$_smarty_tpl->tpl_vars['header']->value]['relatedlist'])) {?>
																						<div style="width:auto;display:block;" id="tbl<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['header']->value,' ','');?>
" >
																						<?php } else { ?>
																						<div style="width:auto;display:none;" id="tbl<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['header']->value,' ','');?>
" >
																						<?php }?>
																							<table border=0 cellspacing=0 cellpadding=0 width="100%" class="small detailview_table">
																							<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMBLOCKS']->value[$_smarty_tpl->tpl_vars['header']->value]['custom'])) {?>
																								<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['CUSTOMBLOCKS']->value[$_smarty_tpl->tpl_vars['header']->value]['tpl'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

																							<?php } elseif (isset($_smarty_tpl->tpl_vars['BLOCKS']->value[$_smarty_tpl->tpl_vars['header']->value]['relatedlist']) && count($_smarty_tpl->tpl_vars['IS_REL_LIST']->value) > 0) {?>
																								<?php $_smarty_tpl->_assignInScope('RELBINDEX', $_smarty_tpl->tpl_vars['BLOCKS']->value[$_smarty_tpl->tpl_vars['header']->value]['relatedlist']);
?>
																								<?php $_smarty_tpl->_subTemplateRender("file:RelatedListNew.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RELATEDLISTS'=>$_smarty_tpl->tpl_vars['RELATEDLISTBLOCK']->value[$_smarty_tpl->tpl_vars['RELBINDEX']->value],'RELLISTID'=>$_smarty_tpl->tpl_vars['RELBINDEX']->value), 0, true);
?>

																							<?php } else { ?>
																								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detail']->value, 'detailInfo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['detailInfo']->value) {
?>
																									<tr style="height:25px" class="detailview_row">
																										<?php $_smarty_tpl->_assignInScope('numfieldspainted', 0);
?>
																										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detailInfo']->value, 'data', false, 'label');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
																											<?php $_smarty_tpl->_assignInScope('numfieldspainted', $_smarty_tpl->tpl_vars['numfieldspainted']->value+1);
?>
																											<?php $_smarty_tpl->_assignInScope('keyid', $_smarty_tpl->tpl_vars['data']->value['ui']);
?>
																											<?php $_smarty_tpl->_assignInScope('keyval', $_smarty_tpl->tpl_vars['data']->value['value']);
?>
																											<?php $_smarty_tpl->_assignInScope('keytblname', $_smarty_tpl->tpl_vars['data']->value['tablename']);
?>
																											<?php $_smarty_tpl->_assignInScope('keyfldname', $_smarty_tpl->tpl_vars['data']->value['fldname']);
?>
																											<?php $_smarty_tpl->_assignInScope('keyfldid', $_smarty_tpl->tpl_vars['data']->value['fldid']);
?>
																											<?php $_smarty_tpl->_assignInScope('keyoptions', $_smarty_tpl->tpl_vars['data']->value['options']);
?>
																											<?php $_smarty_tpl->_assignInScope('keysecid', $_smarty_tpl->tpl_vars['data']->value['secid']);
?>
																											<?php $_smarty_tpl->_assignInScope('keyseclink', $_smarty_tpl->tpl_vars['data']->value['link']);
?>
																											<?php $_smarty_tpl->_assignInScope('keycursymb', $_smarty_tpl->tpl_vars['data']->value['cursymb']);
?>
																											<?php $_smarty_tpl->_assignInScope('keysalut', $_smarty_tpl->tpl_vars['data']->value['salut']);
?>
																											<?php $_smarty_tpl->_assignInScope('keyaccess', $_smarty_tpl->tpl_vars['data']->value['notaccess']);
?>
																											<?php $_smarty_tpl->_assignInScope('keycntimage', $_smarty_tpl->tpl_vars['data']->value['cntimage']);
?>
																											<?php $_smarty_tpl->_assignInScope('keyadmin', $_smarty_tpl->tpl_vars['data']->value['isadmin']);
?>
																											<?php $_smarty_tpl->_assignInScope('display_type', $_smarty_tpl->tpl_vars['data']->value['displaytype']);
?>
																											<?php $_smarty_tpl->_assignInScope('_readonly', $_smarty_tpl->tpl_vars['data']->value['readonly']);
?>
																											<?php $_smarty_tpl->_assignInScope('extendedfieldinfo', $_smarty_tpl->tpl_vars['data']->value['extendedfieldinfo']);
?>

																											<?php if ($_smarty_tpl->tpl_vars['label']->value != '') {?>
																												<td class="dvtCellLabel" align=right width=25% style="white-space: normal;"><?php if ($_smarty_tpl->tpl_vars['keycntimage']->value != '') {
echo $_smarty_tpl->tpl_vars['keycntimage']->value;
} elseif ($_smarty_tpl->tpl_vars['keyid']->value == '71' || $_smarty_tpl->tpl_vars['keyid']->value == '72') {?><!-- Currency symbol --><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['keycursymb']->value;?>
)<?php } elseif ($_smarty_tpl->tpl_vars['keyid']->value == '9') {
echo $_smarty_tpl->tpl_vars['label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['COVERED_PERCENTAGE'];
} elseif ($_smarty_tpl->tpl_vars['keyid']->value == '14') {
echo $_smarty_tpl->tpl_vars['label']->value;?>
 <?php echo getTranslatedString("LBL_TIMEFIELD");
} else {
echo $_smarty_tpl->tpl_vars['label']->value;
}?></td>
																												<?php if ($_smarty_tpl->tpl_vars['EDIT_PERMISSION']->value == 'yes' && $_smarty_tpl->tpl_vars['display_type']->value != '2' && $_smarty_tpl->tpl_vars['display_type']->value != '4' && $_smarty_tpl->tpl_vars['display_type']->value != '5' && $_smarty_tpl->tpl_vars['_readonly']->value == '0') {?>

																													<?php if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_AJAX_EDIT']->value)) {?>
																														<?php $_smarty_tpl->_subTemplateRender("file:DetailViewUI.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

																													<?php } else { ?>
																														<?php $_smarty_tpl->_subTemplateRender("file:DetailViewFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

																													<?php }?>

																												<?php } else { ?>
																													<?php $_smarty_tpl->_subTemplateRender("file:DetailViewFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

																												<?php }?>
																											<?php }?>
																										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

																										<?php if ($_smarty_tpl->tpl_vars['numfieldspainted']->value == 1 && $_smarty_tpl->tpl_vars['keyid']->value != 19 && $_smarty_tpl->tpl_vars['keyid']->value != 20) {?><td colspan=2></td><?php }?>
																									</tr>
																								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

																							<?php }?>
																							</table>
																						</div>
																					<?php }?>
																			</td>
																		</tr>

																	<?php if ($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value && !empty($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEWWIDGET'])) {?>
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEWWIDGET'], 'CUSTOM_LINK_DETAILVIEWWIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_LINK_DETAILVIEWWIDGET']->value) {
?>
																			<?php if (preg_match("/^block:\/\/.*/",$_smarty_tpl->tpl_vars['CUSTOM_LINK_DETAILVIEWWIDGET']->value->linkurl)) {?>
																			<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['first'] : null) && $_smarty_tpl->tpl_vars['CUSTOM_LINK_DETAILVIEWWIDGET']->value->sequence <= 1) || ($_smarty_tpl->tpl_vars['CUSTOM_LINK_DETAILVIEWWIDGET']->value->sequence == (isset($_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['iteration'] : null)+1) || ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['last'] : null) && $_smarty_tpl->tpl_vars['CUSTOM_LINK_DETAILVIEWWIDGET']->value->sequence >= (isset($_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_BLOCKS']->value['iteration'] : null)+1)) {?>
																				<tr>
																					<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'clientescartera') {?>
																					<tr style="text-align: center; display:block">
																						<td style="padding-right: 5px;"></td>
																						<td class="test" style="background-color:#d61f43;color: #fff; font-size:16px; width: 1050px;">
																							<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'clientescartera') {?>
																								<?php echo 'COBRANZA';?>

																							<?php }?></td>
																						<td style="padding-left: 5px;"></td>
																						<td></td>
																					</tr>
																					<?php }?>
																					<td style="padding:5px;"><?php echo smarty_function_process_widget(array('widgetLinkInfo'=>$_smarty_tpl->tpl_vars['CUSTOM_LINK_DETAILVIEWWIDGET']->value),$_smarty_tpl);?>
</td>
																				</tr>
																			<?php }?>
																			<?php }?>
																		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

																	<?php }?>

																	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



																	<!-- Inventory - Product Details informations -->
																	<?php if (isset($_smarty_tpl->tpl_vars['ASSOCIATED_PRODUCTS']->value)) {?>
																	<tr><td>
																		<?php echo $_smarty_tpl->tpl_vars['ASSOCIATED_PRODUCTS']->value;?>

																	</td></tr>
																	<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['SinglePane_View']->value == 'true' && count($_smarty_tpl->tpl_vars['IS_REL_LIST']->value) > 0) {?>
																	<?php $_smarty_tpl->_subTemplateRender("file:RelatedListNew.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

																<?php }?>
															</table>
														</td></tr></table>
											</td>

											<td width=22% valign=top style="border-left:1px dashed #cccccc;padding:13px;<?php echo $_smarty_tpl->tpl_vars['DEFAULT_ACTION_PANEL_STATUS']->value;?>
" class="noprint" id="actioncolumn">
												<!-- right side relevant info -->
												<!-- Action links for Event & Todo START-by Minnie -->
												<table width="100%" border="0" cellpadding="5" cellspacing="0" class="detailview_actionlinks actionlinks_events_todo">
                        <?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos'){?>
                        	<!-- <tr>
                            <p class="genHeaderSmall" style="margin-left: 5px;">Archivos</p>
                      		<div>
                      			<button id='btnfinder' class='crmbutton small create' style='vertical-align: middle; margin: 0 5px; width: 96%'>Acceso al sistema de archivos</button>
                      		</div>
                      		<br>
                          </tr>-->
													<tr>
                            <td align="left" class="genHeaderSmall">Documentos</td>
                          </tr>
                        <?php }else{ ?>
                          <tr>
                            <td align="left" class="genHeaderSmall"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ACTIONS'];?></td>
                          </tr>
                        <?php } ?>

													<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'HelpDesk') {?>
														<?php if ($_smarty_tpl->tpl_vars['CONVERTASFAQ']->value == 'permitted') {?>
															<tr class="actionlink actionlink_converttofaq">
																<td align="left" style="padding-left:10px;">
																	<a class="webMnu" href="index.php?return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&return_id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=ConvertAsFAQ"><img src="<?php echo vtiger_imageurl('convert.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle"  border="0"/></a>
																	<a class="webMnu" href="index.php?return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&return_id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=ConvertAsFAQ"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONVERT_AS_FAQ_BUTTON_LABEL'];?>
</a>
																</td>
															</tr>
														<?php }?>
													<?php } elseif ($_smarty_tpl->tpl_vars['MODULE']->value == 'Potentials') {?>
														<?php if ($_smarty_tpl->tpl_vars['CONVERTINVOICE']->value == 'permitted') {?>
															<tr class="actionlink actionlink_converttoinvoice">
																<td align="left" style="padding-left:10px;">
																	<a class="webMnu" href="index.php?return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&convertmode=<?php echo $_smarty_tpl->tpl_vars['CONVERTMODE']->value;?>
&module=Invoice&action=EditView&account_id=<?php echo $_smarty_tpl->tpl_vars['ACCOUNTID']->value;?>
"><img src="<?php echo vtiger_imageurl('actionGenerateInvoice.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle"  border="0"/></a>
																	<a class="webMnu" href="index.php?return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&convertmode=<?php echo $_smarty_tpl->tpl_vars['CONVERTMODE']->value;?>
&module=Invoice&action=EditView&account_id=<?php echo $_smarty_tpl->tpl_vars['ACCOUNTID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['Invoice'];?>
</a>
																</td>
															</tr>
														<?php }?>
													<?php } elseif ($_smarty_tpl->tpl_vars['MODULE']->value == 'Products' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Services') {?>
													<!-- Product/Services Actions starts -->
														<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Products') {?>
															<?php $_smarty_tpl->_assignInScope('module_id', 'product_id');
?>
														<?php } else { ?>
															<?php $_smarty_tpl->_assignInScope('module_id', 'parent_id');
?>
														<?php }?>
														<tr>
															<td align="left" style="padding-left:5px;">
																<a href="javascript: document.DetailView.module.value='Quotes'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><img src="<?php echo vtiger_imageurl('actionGenerateQuote.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="2" align="absmiddle" border="0"/></a>
																<a href="javascript: document.DetailView.module.value='Quotes'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['Quote'];?>
</a>
															</td>
														</tr>
														<tr>
															<td align="left" style="padding-left:5px;">
																<a href="javascript: document.DetailView.module.value='Invoice'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><img src="<?php echo vtiger_imageurl('actionGenerateInvoice.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="2" align="absmiddle" border="0"/></a>
																<a href="javascript: document.DetailView.module.value='Invoice'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['Invoice'];?>
</a>
															</td>
														</tr>
														<tr>
															<td align="left" style="padding-left:5px;">
																<a href="javascript: document.DetailView.module.value='SalesOrder'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><img src="<?php echo vtiger_imageurl('actionGenerateSalesOrder.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="2" align="absmiddle" border="0"/></a>
																<a href="javascript: document.DetailView.module.value='SalesOrder'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['SalesOrder'];?>
</a>
															</td>
														</tr>
														<tr>
															<td align="left" style="padding-left:5px;">
																<a href="javascript: document.DetailView.module.value='PurchaseOrder'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><img src="<?php echo vtiger_imageurl('actionGenPurchaseOrder.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="2" align="absmiddle" border="0"/></a>
																<a href="javascript: document.DetailView.module.value='PurchaseOrder'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['PurchaseOrder'];?>
</a>
															</td>
														</tr>
													<?php } elseif ($_smarty_tpl->tpl_vars['MODULE']->value == 'Vendors') {?>
														<tr>
															<td align="left" style="padding-left:10px;">
																<a href="javascript: document.DetailView.module.value='PurchaseOrder'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='Vendors'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.vendor_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu">	<img src="<?php echo vtiger_imageurl('actionGenPurchaseOrder.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle" border="0"/></a>
																<a href="javascript: document.DetailView.module.value='PurchaseOrder'; document.DetailView.action.value='EditView'; document.DetailView.return_module.value='Vendors'; document.DetailView.return_action.value='DetailView'; document.DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.parent_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.vendor_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'; document.DetailView.record.value=''; document.DetailView.submit();" class="webMnu"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['PurchaseOrder'];?>
</a>
															</td>
														</tr>
													<?php } elseif (in_array($_smarty_tpl->tpl_vars['MODULE']->value,getInventoryModules())) {?>
														<!-- Inventory Actions -->
														<?php $_smarty_tpl->_subTemplateRender("file:Inventory/InventoryActions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

													<?php } elseif ($_smarty_tpl->tpl_vars['TODO_PERMISSION']->value == 'true' || $_smarty_tpl->tpl_vars['EVENT_PERMISSION']->value == 'true' || $_smarty_tpl->tpl_vars['CONTACT_PERMISSION']->value == 'true' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Leads' || ($_smarty_tpl->tpl_vars['MODULE']->value == 'Documents')) {?>

														<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>
															<?php $_smarty_tpl->_assignInScope('subst', "cto_id");
?>
															<?php $_smarty_tpl->_assignInScope('acc', "&rel_id=".((string)$_smarty_tpl->tpl_vars['accountid']->value));
?>
														<?php } else { ?>
															<?php $_smarty_tpl->_assignInScope('subst', "rel_id");
?>
															<?php $_smarty_tpl->_assignInScope('acc', '');
?>
														<?php }?>

														<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Leads' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts') {?>
															  <!--Inicio Link de accion personalizado en Accounts-->
                              <?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts') {?>
                                <!-- Modal -->
                              <div class='modal' id='modal_documentos' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                              <div class='modal-dialog modal-lg' role='document' style='max-width:1400px'>
                              <div class='modal-content' style='width: 100%;'>
                              <div class='modal-header' style='font-size: 1.1rem; padding:0px; padding-bottom: 8px;'>
                                <div class="container" style='padding-right : 1px; padding-left : 1px; margin-right : 1px; margin-left : 1px;'>
                                  <div class="row" style='padding-bottom: 20px;'>
                                    <div class="col-lg-1">
                                      <label style="color:#495057;" for="Solicitudes">Solicitudes</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <select class="form-control" id="slc_solicitudes">
                                        <option>Seleccione1...</option>
                                      </select>
                                    </div>
                                  </div>
                                  <hr style='border-width: 2px;'>
                                  <div class="row">
                                    <h2 class='modal-title' id='exampleModalLabel' style='font-size: 1.3rem;'>
                                      <ul class='nav nav-tabs' style='border-bottom: 0;'>
                                        <li class='nav-item'>
                                          <a id='head-doc-externo' class='nav-link' href='#'>Documentación Cliente</a>
                                        </li>
                                        <li class='nav-item'>
                                          <a id='head-doc-interno' class='nav-link' href='#'>Documentación Exitus</a>
                                        </li>
                                      </ul>
                                    </h2>
                                  </div>
                                </div>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onClick='cerrarModal()'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='row encabezado-documentos' id='documentos-exitus'>
                                  <div class='col-3'>
                                    <div class='list-group' role='tablist' id='list-documentos'>
                                    </div>
                                  </div>
                                  <div class='col-9'>
                                    <ul class='nav nav-tabs'>
                                      <li class='nav-item'>
                                        <a id='nav-link-afex' class='nav-link' href='#nav-tabContent-afex'>Afex</a>
                                      </li>
                                      <li class='nav-item'>
                                        <a id='nav-link-bo' class='nav-link' href='#nav-tabContent-bo'>Back Office</a>
                                      </li>
                                      <li class='nav-item'>
                                        <a id='nav-link-mesa' class='nav-link' href='#nav-tabContent-mesa'>Mesa Control</a>
                                      </li>
                                    </ul>
                                    <div class='tab-content' id='nav-tabContent-afex' style='display:none;'>
                                    </div>
                                    <div class='tab-content' id='nav-tabContent-bo' style='display:none;'>
                                    </div>
                                    <div class='tab-content' id='nav-tabContent-mesa' style='display:none;'>
                                    </div>
                                  </div>
                                </div>
                                <div class='row encabezado-documentos' id='documentos-interno'>
                                  <div class='col-3'>
                                    <div class='list-group' role='tablist' id='list-documentos-interno'>
                                    </div>
                                  </div>
                                  <div class='col-9'>
                                    <div class='tab-content' id='nav-tabContent-docinterno'>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer' style='padding-bottom: 1px;'>
                              <button type='button' class='crmbutton medium cancel' onClick='cerrarModal()'>Cerrar</button>
                              <button id='btn-guardar_modal' type='button' class='crmbutton medium save' onClick='cerrarModal()'>Guardar</button>
                              </div>
                              </div>
                              </div>
                            </div><input type='hidden' id='curuserid' name='curuserid' value='<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']; ?>' />
                              <tr class="actionlink actionlink_documentos" style='display:none'>
                                <td align="left" style="padding-left:10px;">
                                  <a href="#" onclick="">
                                    <i class="fas fa-folder-open" style='font-size:15px; padding-left: 5px; padding-right: 5px; color:#9d9d79'></i><!--<img src="<?php echo vtiger_imageurl('sendmail.png',$_smarty_tpl->tpl_vars['THEME']->value);?>" hspace="5" align="absmiddle"  border="0"/>-->
                                  </a>
                                  <a href="#" class="webMnu" onclick="">Ver Documentos</a>
                                </td>
                              </tr>
                              <?php }?>

                               <!--Carpetas Fideicomisos -->

                                <?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos') {?>

                                	<p class="genHeaderSmall"><CENTER>Carpetas fideicomisos</CENTER></p>
                               <?php } ?>
                                <!-- Fin Carpetas Fideicomisos-->

                              <?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>
                                <!-- Modal -->
                              <div class='modal' id='' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            </div><input type='hidden' id='curuserid' name='curuserid' value='<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']; ?>' />
                                 <td align="left" style="padding-left:10px;">
                                  <a href="#" onclick="">
                                    <i class="far fa-file-alt" style='font-size:15px; padding-left: 5px; padding-right: 5px; color:#9d9d79'></i><!--<img src="<?php echo vtiger_imageurl('sendmail.png',$_smarty_tpl->tpl_vars['THEME']->value);?>" hspace="5" align="absmiddle"  border="0"/>-->
                                  </a>
                                  <a id='btn_fintech' href="#" class="webMnu" onclick="">
                                  	Acceso a Solicitud de Crédito
                                  </a>
                                </td>

                              <?php }?>
                               <!--Fin Link de accion personalizado en Contacts-->
                                <?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>
                                <!-- Modal -->
                  <div class='modal' id='modal_documentos' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                  <div class='modal-dialog modal-lg' role='document' style='max-width:1400px'>
                  <div class='modal-content' style='width: 100%;'>
                  <div class='modal-header' style='font-size: 1.1rem; padding:0px; padding-bottom: 8px;'>
                  <h2 class='modal-title' id='exampleModalLabel' style='font-size: 1.3rem;'><ul class='nav nav-tabs' style='border-bottom: 0;'>
                    <li class='nav-item'>
                      <a id='head-doc-externo' class='nav-link' href='#'>Documentación Cliente</a>
                    </li>
                    <li class='nav-item'>
                      <a id='head-doc-interno' class='nav-link' href='#'>Documentación Exitus</a>
                    </li></ul></h2>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close' onClick='cerrarModalDoc()'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  </div>
                  <div class='modal-body'>
                    <div class='row encabezado-documentos' id='documentos-exitus'>
                      <div class='col-3'>
                        <div class='list-group' role='tablist' id='list-documentos'>
                        </div>
                      </div>
                      <div class='col-9'>
                        <ul class='nav nav-tabs'>
                          <li class='nav-item'>
                            <a id='nav-link-afex' class='nav-link' href='#nav-tabContent-afex'>Afex</a>
                          </li>
                          <li class='nav-item'>
                            <a id='nav-link-bo' class='nav-link' href='#nav-tabContent-bo'>Back Office</a>
                          </li>
                          <li class='nav-item'>
                            <a id='nav-link-mesa' class='nav-link' href='#nav-tabContent-mesa'>Mesa Control</a>
                          </li>
                        </ul>
                        <div class='tab-content' id='nav-tabContent-afex' style='display:none;'>
                        </div>
                        <div class='tab-content' id='nav-tabContent-bo' style='display:none;'>
                        </div>
                        <div class='tab-content' id='nav-tabContent-mesa' style='display:none;'>
                        </div>
                      </div>
                    </div>
                    <div class='row encabezado-documentos' id='documentos-interno'>
                      <div class='col-3'>
                        <div class='list-group' role='tablist' id='list-documentos-interno'>
                        </div>
                      </div>
                      <div class='col-9' style='padding: 0px;'>
                        <!-- <ul class='nav nav-tabs'>
                          <li class='nav-item'>
                            <a id='nav-link-afex' class='nav-link' href='#nav-tabContent-afex'>Afex</a>
                          </li>
                          <li class='nav-item'>
                            <a id='nav-link-bo' class='nav-link' href='#nav-tabContent-bo'>Back Office</a>
                          </li>
                          <li class='nav-item'>
                            <a id='nav-link-mesa' class='nav-link' href='#nav-tabContent-mesa'>Mesa Control</a>
                          </li>
                        </ul> -->
                        <div class='tab-content' id='nav-tabContent-docinterno'>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class='modal-footer' style='padding-bottom: 1px;'>
                  <button type='button' class='crmbutton medium cancel' onClick='cerrarModalDoc()'>Cerrar</button>
                  <button id='btn-guardar_modal' type='button' class='crmbutton medium save' >Guardar</button>
                  </div>
                  </div>
                  </div>
                            </div><input type='hidden' id='curuserid' name='curuserid' value='<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']; ?>' />
                              <tr >
                                <td id='div-ver_documentos' align="left" style="padding-left:10px;">
                                    <i class="fas fa-folder-open" style='font-size:15px; padding-left: 5px; padding-right: 5px; color:#9d9d79'></i><!--<img src="<?php echo vtiger_imageurl('sendmail.png',$_smarty_tpl->tpl_vars['THEME']->value);?>" hspace="5" align="absmiddle"  border="0"/>-->

                                  <a id='btn-ver_documentos' href="#" onclick="">Expediente Digital</a>
                                </td>
                              </tr>
                              <?php }?>





                                <!--Fin Link de accion personalizado en Contacts-->
                                <?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts') {?>
                                <!-- Modal -->
                              <div class='modal' id='modal_asignacion' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                              <div class='modal-dialog modal-lg' role='document' style='max-width:1400px'>
                              <div class='modal-content' style='width: 65%;'>
                              <div class='modal-header' style='font-size: 1.1rem; padding:0px; padding-bottom: 8px;'>
                                  <div class="row" style="margin-left: 190px;">
                                    <div class="col-lg-1">
                                      <label style="color:#005fb2; margin-left: 118px; font-size: 19px;"><h1>Asignaciones</h1></label>
                                    </div>
                                  </div>
                                  <hr style='border-width: 2px;'>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close' onClick='cerrarModalS()'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class="alert alert-success" id='mensaje_guardado' style="display: none;text-align: center; font-size: 20px;" >
  								<b>Información guardada existosamente!!</b>
							  </div>
                              <div class='class row' style="margin-left: 190px;">
                                  <div class="col-lg-4">
                                        <a id='nav-link-afex' class='nav-link' style="font-size: 12px;" ><b>Usuario Back Office</b></a>
                                      <select class="form-control" id="slc_usuabak">
                                        <option>Seleccione...</option>
                                      </select>
                                    </div>
                                    <div class="col-lg-4" >
                                    	 <a id='nav-link-afex' class='nav-link' style="font-size: 12px;"><b>Usuari Afex</b></a>
                                      <select  class="form-control" id="slc_usuafex">
                                        <option>Seleccione...</option>
                                      </select>
                                </div>
                              </div>
                              <div class='modal-footer' style='padding-bottom: 1px;'>
                              <button type='button' class='crmbutton medium cancel' onClick='cerrarModalS()'>Cerrar</button>
                              <button id='guardar_asignaciones' type='button' class='crmbutton medium save' >Guardar</button>
                              </div>
                              </div>
                              </div>
                            </div><input type='hidden' id='curuserid' name='curuserid' value='<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']; ?>' />
                              <tr class="actionlink actionlink_usuarios" style='display:none'>
                                <td align="left" style="padding-left:10px;">
                                  <a href="#" onclick="">
                                    <i class="fas fa-user-tie" style='font-size:15px; padding-left: 5px; padding-right: 5px; color:#9d9d79'></i><!--<img src="<?php echo vtiger_imageurl('sendmail.png',$_smarty_tpl->tpl_vars['THEME']->value);?>" hspace="5" align="absmiddle"  border="0"/>-->
                                  </a>
                                  <a href="#" class="webMnu" onclick="">Asignaciones</a>
                                </td>
                              </tr>
                              <?php }?>

                                <!--Fin Link de accion personalizado en Accounts-->
                                <!--Sección para estados financieros Api Listo-->

                                <?php if ( $_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts' && $_smarty_tpl->tpl_vars['CURRENT_USER_ROLEID']->value == 'H22' || $_smarty_tpl->tpl_vars['CURRENT_USER_ROLEID']->value == 'H51' || $_smarty_tpl->tpl_vars['CURRENT_USER_ROLEID']->value == 'H2' || $_smarty_tpl->tpl_vars['CURRENT_USER_ROLEID']->value == 'H47') { $crm = new CRM();?>
                                	<p class="genHeaderSmall">Información para análisis de crédito</p>
                                	<span id="dtlview_cf_13520" style="display: none;"><?php echo $crm->tokenrfc($_smarty_tpl->tpl_vars['ID']->value); ?></span>
                                	<?php if($crm->tokenrfc($_smarty_tpl->tpl_vars['ID']->value) == ''){?>
                              		<div>
                              			<button id='btn-registro' class='crmbutton small create' style='vertical-align: middle; margin: 0 5px; width: 96%'>Registro para facturación y declaraciones</button>

                              		</div>
                              		<br>
									<?php }else{?>
                                	<?php $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']; ?>
                                	<div id="analisiscred">
	                                	<p style="font-weight: 900;margin-bottom: 10px;">Facturación</p>
	                                	<div>
	                                		<button id="btn-facturacion" class="crmbutton small edit" type="button" style="vertical-align: middle; margin: 0 3px;">Detalle facturación</button>
		                                	<button id='btn-factura' class='crmbutton small cancel' style='vertical-align: middle; margin: 0 3px;' data-toggle='modal' data-target='#modalfact'>Consulta facturación</button>
		                                	<!-- <br><br>
		                                	<a href="#formfacturacion" style="margin-left: 14px;">Ir a facturación</a>	         -->
		                                </div>
	                                	<br>
	                                	<hr>
	                                	<br>
	                                	<p style="font-weight: 900;margin-bottom: 10px;">Declaraciones</p>
	                                	<div>
	                                		<button id='btn-declanual' class='crmbutton small create' style='vertical-align: middle; margin: 0 3px;'>Declaración Anual</button>

	                                		<button id='btn-declaraciones' class='crmbutton small cancel' style='vertical-align: middle; margin: 0 3px;'>Consulta declaración</button>

	                                		<br><br><!--  -->
		                                	<a href="#formdeclaraciones" style="margin-left: 4px;">Ir a declaraciones</a>
	                                	</div>
	                                	<br>
	                                	<hr>
	                                	<br>
	                                	<p style="font-weight: 900;margin-bottom: 10px;">Reportes financieros</p>
	                                	<div>
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=facturacion" style="margin-left: 14px;">
	                                			<img src="themes/images/excel.png" align="abmiddle" alt="Excel" border="0">
	                                			Reporte de facturación
	                                		</a>
	                                		<br>
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=balance" style="margin-left: 14px;">
	                                			<img src="themes/images/excel.png" align="abmiddle" alt="Excel" border="0">
	                                			Balance General
	                                		</a>
	                                		<br>
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=estado" style="margin-left: 14px;">
	                                			<img src="themes/images/excel.png" align="abmiddle" alt="Excel" border="0">
	                                			Estado de Resultados
	                                		</a>
	                                		<br>
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=flujo" style="margin-left: 14px;">
	                                			<img src="themes/images/excel.png" align="abmiddle" alt="Excel" border="0">
	                                			Flujo de Efectivo
	                                		</a>
	                                		<br>
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=ventas" style="margin-left: 14px;">
	                                			<img src="themes/images/excel.png" align="abmiddle" alt="Excel" border="0">
	                                			Ventas por concepto
	                                		</a>
	                                		<br>
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=gastos" style="margin-left: 14px;">
	                                			<img src="themes/images/excel.png" align="abmiddle" alt="Excel" border="0">
	                                			Gastos por concepto
	                                		</a>
	                                		<br>
	                                		<!-- <a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=metricas" class="graphica" style="margin-left: 14px;">
	                                			<img src="themes/images/products.gif" align="abmiddle" alt="Gráfico" border="0">
	                                			Métricas
	                                		</a>
	                                		<br> -->
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=xcobrar" class="graphica" style="margin-left: 14px;" tipo="xcobrar">
	                                			<img src="themes/images/products.gif" align="abmiddle" alt="Gráfico" border="0" style="width: 14px; height: 14px;">
	                                			Cuentas por cobrar
	                                		</a>
	                                		<br>
	                                		<a href="http://exituspruebas.mirfinancial.com.mx/desarrollocartera/APIs/Listo2/reportes.php?solicitud=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>&tipo=xpagar" class="graphica" style="margin-left: 14px;" tipo="xpagar">
	                                			<img src="themes/images/products.gif" align="abmiddle" alt="Gráfico" border="0" style="width: 14px; height: 14px;">
	                                			Cuentas por pagar
	                                		</a>
	                                	</div>
	                                	<br>
	                                	<hr>
	                                	<br>
                                	</div>
                                	<?php }?>
                                <?php }?>
                                <!--Fin estados financieros Api Listo-->



															<?php if ($_smarty_tpl->tpl_vars['SENDMAILBUTTON']->value == 'permitted') {?>
																<tr class="actionlink actionlink_sendemail">
																	<td align="left" style="padding-left:10px;">
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMAILS']->value, 'email', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['email']->value) {
?>
																			<input type="hidden" name="email_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
																		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

																		<a href="javascript:void(0);" class="webMnu" onclick="<?php echo $_smarty_tpl->tpl_vars['JS']->value;?>
"><img src="<?php echo vtiger_imageurl('sendmail.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle"  border="0"/></a>
																		<a href="javascript:void(0);" class="webMnu" onclick="<?php echo $_smarty_tpl->tpl_vars['JS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SENDMAIL_BUTTON_LABEL'];?>
</a>
																	</td>
																</tr>
															<?php }?>
														<?php }?>


                          <?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos'){?>
                          <tr class="actionlink actionlink_contratos">
                            <td align="left" style="padding-left:10px;">
                              <a href="#" onclick="">
                                <i class="fas fa-folder-open" style='font-size:15px; padding-left: 5px; padding-right: 5px; color:#9d9d79'></i>
                              </a>
                              <a href="/desarrollocartera/fideicomisos/?contrato=<?php echo $_smarty_tpl->tpl_vars['ID']->value; ?>" class="webMnu" target="_blank" onclick="">Expediente Digital</a>
                            </td>
                          </tr>
                          <tr class="actionlink actionlink_asignaciones" style='display:none;'>
                            <td align="left" style="padding-left:10px;">
                              <a href="#" onclick="">
                                <i class="fas fa-user-tie" style='font-size:15px; padding-left: 5px; padding-right: 5px; color:#9d9d79'></i>
                              </a>
                              <a href="#" class="webMnu" onclick="">Asignaciones</a>
                            </td>
                          </tr>
                          <?php } ?>

														<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Contacts' || $_smarty_tpl->tpl_vars['EVENT_PERMISSION']->value == 'true') {?>
															<tr class="actionlink actionlink_addevent">
																<td align="left" style="padding-left:10px;">
																	<a href="index.php?module=cbCalendar&action=EditView&return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['subst']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['ID']->value;
echo $_smarty_tpl->tpl_vars['acc']->value;?>
&cbfromid=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
" class="webMnu"><img src="<?php echo vtiger_imageurl('AddEvent.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle"  border="0"/></a>
																	<a href="index.php?module=cbCalendar&action=EditView&return_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['subst']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['ID']->value;
echo $_smarty_tpl->tpl_vars['acc']->value;?>
&cbfromid=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
" class="webMnu"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADD_NEW'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['Event'];?>
</a>
																</td>
															</tr>
														<?php }?>

														<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Leads') {?>
															<?php if ($_smarty_tpl->tpl_vars['CONVERTLEAD']->value == 'permitted') {?>
																<tr class="actionlink actionlink_convertlead">
																	<td align="left" style="padding-left:10px;">
																		<a href="javascript:void(0);" class="webMnu" onclick="callConvertLeadDiv('<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
');"><img src="<?php echo vtiger_imageurl('Leads.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle"  border="0"/></a>
																		<a href="javascript:void(0);" class="webMnu" onclick="callConvertLeadDiv('<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CONVERT_BUTTON_LABEL'];?>
</a>
																	</td>
																</tr>
															<?php }?>
														<?php }?>

														<!-- Start: Actions for Documents Module -->
														<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Documents') {?>
															<tr class="actionlink actionlink_downloaddocument"><td align="left" style="padding-left:10px;">
																	<?php if ($_smarty_tpl->tpl_vars['DLD_TYPE']->value == 'I' && $_smarty_tpl->tpl_vars['FILE_STATUS']->value == '1' && $_smarty_tpl->tpl_vars['FILE_EXIST']->value == 'yes') {?>
																		<br><a href="index.php?module=Utilities&action=UtilitiesAjax&file=ExecuteFunctions&functiontocall=downloadfile&fileid=<?php echo $_smarty_tpl->tpl_vars['FILEID']->value;?>
&entityid=<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
"  onclick="javascript:dldCntIncrease(<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
);" class="webMnu"><img src="<?php echo vtiger_imageurl('fbDownload.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LNK_DOWNLOAD'];?>
" border="0"/></a>
																		<a href="index.php?module=Utilities&action=UtilitiesAjax&file=ExecuteFunctions&functiontocall=downloadfile&fileid=<?php echo $_smarty_tpl->tpl_vars['FILEID']->value;?>
&entityid=<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
" onclick="javascript:dldCntIncrease(<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
);"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DOWNLOAD_FILE'];?>
</a>
																	<?php } elseif ($_smarty_tpl->tpl_vars['DLD_TYPE']->value == 'E' && $_smarty_tpl->tpl_vars['FILE_STATUS']->value == '1') {?>
																		<br><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['DLD_PATH']->value;?>
" onclick="javascript:dldCntIncrease(<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
);"><img src="<?php echo vtiger_imageurl('fbDownload.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"" align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LNK_DOWNLOAD'];?>
" border="0"></a>
																		<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['DLD_PATH']->value;?>
" onclick="javascript:dldCntIncrease(<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
);"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DOWNLOAD_FILE'];?>
</a>
																	<?php }?>
																</td></tr>
																<?php if ($_smarty_tpl->tpl_vars['CHECK_INTEGRITY_PERMISSION']->value == 'yes') {?>
																<tr class="actionlink actionlink_checkdocinteg"><td align="left" style="padding-left:10px;">
																		<br><a href="javascript:;" onClick="checkFileIntegrityDetailView(<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
);"><img id="CheckIntegrity_img_id" src="<?php echo vtiger_imageurl('yes.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" alt="Check integrity of this file" title="Check integrity of this file" hspace="5" align="absmiddle" border="0"/></a>
																		<a href="javascript:;" onClick="checkFileIntegrityDetailView(<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
);"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECK_INTEGRITY'];?>
</a>&nbsp;
																		<input type="hidden" id="dldfilename" name="dldfilename" value="<?php echo $_smarty_tpl->tpl_vars['FILEID']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['FILENAME']->value;?>
">
																		<span id="vtbusy_integrity_info" style="display:none;">
																			<img src="<?php echo vtiger_imageurl('vtbusy.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0"></span>
																		<span id="integrity_result" style="display:none"></span>
																	</td></tr>
																<?php }?>
															<tr class="actionlink actionlink_emaildocument"><td align="left" style="padding-left:10px;">
																	<?php if ($_smarty_tpl->tpl_vars['DLD_TYPE']->value == 'I' && $_smarty_tpl->tpl_vars['FILE_STATUS']->value == '1' && $_smarty_tpl->tpl_vars['FILE_EXIST']->value == 'yes') {?>
																		<input type="hidden" id="dldfilename" name="dldfilename" value="<?php echo $_smarty_tpl->tpl_vars['FILEID']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['FILENAME']->value;?>
">
																		<br><a href="javascript: document.DetailView.return_module.value='Documents'; document.DetailView.return_action.value='DetailView'; document.DetailView.module.value='Documents'; document.DetailView.action.value='EmailFile'; document.DetailView.record.value=<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
; document.DetailView.return_id.value=<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
; sendfile_email();" class="webMnu"><img src="<?php echo vtiger_imageurl('attachment.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" hspace="5" align="absmiddle" border="0"/></a>
																		<a href="javascript: document.DetailView.return_module.value='Documents'; document.DetailView.return_action.value='DetailView'; document.DetailView.module.value='Documents'; document.DetailView.action.value='EmailFile'; document.DetailView.record.value=<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
; document.DetailView.return_id.value=<?php echo $_smarty_tpl->tpl_vars['NOTESID']->value;?>
; sendfile_email();"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_FILE'];?>
</a>
																	<?php }?>
																</td></tr>
															<tr><td>&nbsp;</td></tr>

														<?php }?>
													<?php }?>
												</table>

												<?php if (!isset($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value) || empty($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value)) {?>
													<br>
												<?php }?>


												<?php if ($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value && $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEWBASIC']) {?>
													<table width="100%" border="0" cellpadding="5" cellspacing="0">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEWBASIC'], 'CUSTOMLINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOMLINK']->value) {
?>
															<tr class="actionlink actionlink_customlink actionlink_<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel, 'UTF-8'),' ','_');?>
">
																<td align="left" style="padding-left:10px;">
																	<?php $_smarty_tpl->_assignInScope('customlink_href', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linkurl);
?>
																	<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel);
?>
																	<?php if ($_smarty_tpl->tpl_vars['customlink_label']->value == '') {?>
																		<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['customlink_href']->value);
?>
																	<?php } else { ?>

																		<?php $_smarty_tpl->_assignInScope('customlink_label', getTranslatedString($_smarty_tpl->tpl_vars['customlink_label']->value,$_smarty_tpl->tpl_vars['CUSTOMLINK']->value->module()));
?>
																	<?php }?>
																	<?php if ($_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linkicon) {?>
																		<a class="webMnu" href="<?php echo $_smarty_tpl->tpl_vars['customlink_href']->value;?>
"><img hspace=5 align="absmiddle" border=0 src="<?php echo $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linkicon;?>
"></a>
																	<?php } else { ?>
																		<a class="webMnu" href="<?php echo $_smarty_tpl->tpl_vars['customlink_href']->value;?>
"><img hspace=5 align="absmiddle" border=0 src="themes/images/no_icon.png"></a>
																	<?php }?>
																	<a class="webMnu" href="<?php echo $_smarty_tpl->tpl_vars['customlink_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['customlink_label']->value;?>
</a>
																</td>
															</tr>
														<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

													</table>
												<?php }?>


												<?php if ($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value && $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEW']) {?>
													<br>
													<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEW'])) {?>
														<table width="100%" border="0" cellpadding="5" cellspacing="0">
															<tr><td align="left" class="dvtUnSelectedCell dvtCellLabel">
																	<a href="javascript:;" onmouseover="fnvshobj(this,'vtlib_customLinksLay');" onclick="fnvshobj(this,'vtlib_customLinksLay');"><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ACTIONS'];?>
 &#187;</b></a>
																</td></tr>
														</table>
														<br>
														<div style="display: none; left: 193px; top: 106px;width:155px; position:absolute;" id="vtlib_customLinksLay"
															 onmouseout="fninvsh('vtlib_customLinksLay')" onmouseover="fnvshNrm('vtlib_customLinksLay')">
															<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr><td style="border-bottom: 1px solid rgb(204, 204, 204); padding: 5px;"><b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ACTIONS'];?>
 &#187;</b></td></tr>
																<tr>
																	<td>
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEW'], 'CUSTOMLINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOMLINK']->value) {
?>
																			<?php $_smarty_tpl->_assignInScope('customlink_href', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linkurl);
?>
																			<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel);
?>
																			<?php if ($_smarty_tpl->tpl_vars['customlink_label']->value == '') {?>
																				<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['customlink_href']->value);
?>
																			<?php } else { ?>

																				<?php $_smarty_tpl->_assignInScope('customlink_label', getTranslatedString($_smarty_tpl->tpl_vars['customlink_label']->value,$_smarty_tpl->tpl_vars['CUSTOMLINK']->value->module()));
?>
																			<?php }?>
																			<a href="<?php echo $_smarty_tpl->tpl_vars['customlink_href']->value;?>
" class="drop_down"><?php echo $_smarty_tpl->tpl_vars['customlink_label']->value;?>
</a>
																		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

																	</td>
																</tr>
															</table>
														</div>
													<?php }?>
												<?php }?>

												<!-- Action links END -->

												<?php $_smarty_tpl->_subTemplateRender("file:TagCloudDisplay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

												<!-- Mail Merge-->
												<br>
												<?php if (isset($_smarty_tpl->tpl_vars['MERGEBUTTON']->value) && $_smarty_tpl->tpl_vars['MERGEBUTTON']->value == 'permitted') {?>
													<form action="index.php" method="post" name="TemplateMerge" id="form">
														<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
														<input type="hidden" name="parenttab" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
">
														<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
														<input type="hidden" name="action">
														<table border=0 cellspacing=0 cellpadding=0 width=100% class="rightMailMerge">
															<tr>
																<td class="rightMailMergeHeader"><b><?php echo $_smarty_tpl->tpl_vars['WORDTEMPLATEOPTIONS']->value;?>
</b></td>
															</tr>
															<tr style="height:25px">
																<td class="rightMailMergeContent">
																	<?php if ($_smarty_tpl->tpl_vars['TEMPLATECOUNT']->value != 0) {?>
																		<select name="mergefile"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TOPTIONS']->value, 'tempflname', false, 'templid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['templid']->value => $_smarty_tpl->tpl_vars['tempflname']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['templid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tempflname']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</select>
																		<input class="crmbutton small create" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MERGE_BUTTON_LABEL'];?>
" onclick="this.form.action.value='Merge';" type="submit"></input>
																	<?php } else { ?>
																		<a href=index.php?module=Settings&action=upload&tempModule=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&parenttab=Settings><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_MERGE_TEMPLATE'];?>
</a>
																	<?php }?>
																</td>
															</tr>
														</table>
													</form>
												<?php }?>

												<!-- <p>arriba</p> -->

												<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEWWIDGET'])) {?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_LINKS']->value['DETAILVIEWWIDGET'], 'CUSTOMLINK', false, 'CUSTOMLINK_NO');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOMLINK_NO']->value => $_smarty_tpl->tpl_vars['CUSTOMLINK']->value) {
?>
														<?php $_smarty_tpl->_assignInScope('customlink_href', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linkurl);
?>
														<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel);
?>

														<?php if (!preg_match("/^block:\/\/.*/",$_smarty_tpl->tpl_vars['customlink_href']->value)) {?>
															<?php if ($_smarty_tpl->tpl_vars['customlink_label']->value == '') {?>
																<?php $_smarty_tpl->_assignInScope('customlink_label', $_smarty_tpl->tpl_vars['customlink_href']->value);
?>
															<?php } else { ?>

																<?php $_smarty_tpl->_assignInScope('customlink_label', getTranslatedString($_smarty_tpl->tpl_vars['customlink_label']->value,$_smarty_tpl->tpl_vars['CUSTOMLINK']->value->module()));
?>
															<?php }?>
															<br/>
															<table border=0 cellspacing=0 cellpadding=0 width=100% class="rightMailMerge" id="<?php echo $_smarty_tpl->tpl_vars['CUSTOMLINK']->value->linklabel;?>
">
																<tr>
																	<td class="rightMailMergeHeader">
																		<b><?php echo $_smarty_tpl->tpl_vars['customlink_label']->value;?>
</b>
																		<img id="detailview_block_<?php echo $_smarty_tpl->tpl_vars['CUSTOMLINK_NO']->value;?>
_indicator" style="display:none;" src="<?php echo vtiger_imageurl('vtbusy.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
" border="0" align="absmiddle" />
																	</td>
																</tr>
																<tr style="height:25px">
																	<td class="rightMailMergeContent"><div id="detailview_block_<?php echo $_smarty_tpl->tpl_vars['CUSTOMLINK_NO']->value;?>
"></div></td>
																</tr>
																<?php echo '<script'; ?>
 type="text/javascript">
																			vtlib_loadDetailViewWidget("<?php echo $_smarty_tpl->tpl_vars['customlink_href']->value;?>
", "detailview_block_<?php echo $_smarty_tpl->tpl_vars['CUSTOMLINK_NO']->value;?>
", "detailview_block_<?php echo $_smarty_tpl->tpl_vars['CUSTOMLINK_NO']->value;?>
_indicator");
																<?php echo '</script'; ?>
>
															</table>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

												<?php }?>
												<!-- <p>abajo</p> -->
											</td>
										</tr>
									</table>

									<!-- PUBLIC CONTENTS STOPS-->


								</td>
							</tr>
							<tr>
								<td>
									<div class="small detailview_utils_table_bottom">
										<div class="detailview_utils_table_tabs">
											<div class="detailview_utils_table_tab detailview_utils_table_tab_selected detailview_utils_table_tab_selected_bottom"><?php echo getTranslatedString($_smarty_tpl->tpl_vars['SINGLE_MOD']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
</div>
											<?php if ($_smarty_tpl->tpl_vars['SinglePane_View']->value == 'false' && $_smarty_tpl->tpl_vars['IS_REL_LIST']->value != false && count($_smarty_tpl->tpl_vars['IS_REL_LIST']->value) > 0) {?>
												<?php if ($_smarty_tpl->tpl_vars['HASRELATEDPANES']->value == 'true') {?>
													<?php $_smarty_tpl->_subTemplateRender("file:RelatedPanes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabposition'=>'bottom','RETURN_RELATEDPANE'=>''), 0, true);
?>

												<?php } else { ?>
												<div class="detailview_utils_table_tab detailview_utils_table_tab_unselected detailview_utils_table_tab_unselected_bottom"><a href="index.php?action=CallRelatedList&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MORE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_INFORMATION'];?>
</a></div>
												<?php }?>
											<?php }?>
										</div>
										<div class="detailview_utils_table_tabactionsep detailview_utils_table_tabactionsep_bottom" id="detailview_utils_table_tabactionsep_bottom"></div>
										<div class="detailview_utils_table_actions detailview_utils_table_actions_bottom" id="detailview_utils_actions">
												<?php if ($_smarty_tpl->tpl_vars['EDIT_PERMISSION']->value == 'yes') {?>
													<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="crmbutton small edit" onclick="DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; DetailView.return_action.value='DetailView'; DetailView.return_id.value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
';DetailView.module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
';submitFormForAction('DetailView','EditView');" type="submit" name="Edit" value="&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
&nbsp;">&nbsp;
												<?php }?>
												<?php if (((isset($_smarty_tpl->tpl_vars['CREATE_PERMISSION']->value) && $_smarty_tpl->tpl_vars['CREATE_PERMISSION']->value == 'permitted') || (isset($_smarty_tpl->tpl_vars['EDIT_PERMISSION']->value) && $_smarty_tpl->tpl_vars['EDIT_PERMISSION']->value == 'yes')) && $_smarty_tpl->tpl_vars['MODULE']->value != 'Documents') {?>
													<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="crmbutton small create" onclick="DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; DetailView.return_action.value='DetailView'; DetailView.isDuplicate.value='true';DetailView.module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; submitFormForAction('DetailView','EditView');" type="submit" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
">&nbsp;
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['DELETE']->value == 'permitted') {?>
													<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="crmbutton small delete" onclick="DetailView.return_module.value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
'; DetailView.return_action.value='index'; <?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Accounts') {?> var confirmMsg = '<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_ACCOUNT_DELETE_CONFIRMATION'];?>
' <?php } else { ?> var confirmMsg = '<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
' <?php }?>; submitFormForActionWithConfirmation('DetailView', 'Delete', confirmMsg);" type="button" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
">&nbsp;
												<?php }?>

												<?php if ($_smarty_tpl->tpl_vars['privrecord']->value != '') {?>
													<img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
" onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&viewtype=<?php if (isset($_smarty_tpl->tpl_vars['VIEWTYPE']->value)) {
echo $_smarty_tpl->tpl_vars['VIEWTYPE']->value;
}?>&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['privrecord']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
'" name="privrecord" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
" src="<?php echo vtiger_imageurl('rec_prev.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
">&nbsp;
												<?php } else { ?>
													<img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_PREVIOUS'];?>
" src="<?php echo vtiger_imageurl('rec_prev_disabled.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
">
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['privrecord']->value != '' || $_smarty_tpl->tpl_vars['nextrecord']->value != '') {?>
													<img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_JUMP_BTN'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_JUMP_BTN'];?>
" onclick="var obj = this;var lhref = getListOfRecords(obj, '<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
');" name="jumpBtnIdBottom" id="jumpBtnIdBottom" src="<?php echo vtiger_imageurl('rec_jump.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
">&nbsp;
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['nextrecord']->value != '') {?>
													<img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_NEXT'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_NEXT'];?>
" onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&viewtype=<?php if (isset($_smarty_tpl->tpl_vars['VIEWTYPE']->value)) {
echo $_smarty_tpl->tpl_vars['VIEWTYPE']->value;
}?>&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['nextrecord']->value;?>
&parenttab=<?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
'" name="nextrecord" src="<?php echo vtiger_imageurl('rec_next.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
">&nbsp;
												<?php } else { ?>
													<img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_LIST_NEXT'];?>
" src="<?php echo vtiger_imageurl('rec_next_disabled.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
">&nbsp;
												<?php }?>
												<span class="detailview_utils_toggleactions"><img align="absmiddle" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['TOGGLE_ACTIONS'];?>
" src="<?php echo vtiger_imageurl('menu-icon.png',$_smarty_tpl->tpl_vars['THEME']->value);?>
" width="16px;" onclick="if (document.getElementById('actioncolumn').style.display=='none') {document.getElementById('actioncolumn').style.display='table-cell';}else{document.getElementById('actioncolumn').style.display='none';}window.dispatchEvent(new Event('resize'));"></span>&nbsp;
										</div>
									</div>
								</td>
							</tr>
						</table>
<?php echo '<script'; ?>
>
	var fieldname = new Array(<?php echo $_smarty_tpl->tpl_vars['VALIDATION_DATA_FIELDNAME']->value;?>
);
	var fieldlabel = new Array(<?php echo $_smarty_tpl->tpl_vars['VALIDATION_DATA_FIELDLABEL']->value;?>
);
	var fielddatatype = new Array(<?php echo $_smarty_tpl->tpl_vars['VALIDATION_DATA_FIELDDATATYPE']->value;?>
);
<?php echo '</script'; ?>
>
</td>
	<td align=right valign=top><img src="<?php echo vtiger_imageurl('showPanelTopRight.gif',$_smarty_tpl->tpl_vars['THEME']->value);?>
"></td>
</tr></table>
<?php if (hasEmailField($_smarty_tpl->tpl_vars['MODULE']->value)) {?>
	<form name="SendMail" method="post"><div id="sendmail_cont" style="z-index:100001;position:absolute;"></div></form>
<?php }
}
}
echo '
<script>
$(document).ready(function(){
var modulo_relacionado = '.json_encode($_smarty_tpl->tpl_vars['REL_CUSTOM_MODULE']->value).';
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
    $($("#mouseArea_"+campo).parent()).css("pointer-events","none");

  }
})
</script>
';

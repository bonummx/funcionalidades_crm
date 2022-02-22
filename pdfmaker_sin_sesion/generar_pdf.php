<?php
//error_reporting(-1);
$xxx50 = "array_values";
$xxx51 = "count";
$xxx52 = "explode";
$xxx53 = "fclose";
$xxx54 = "filesize";
$xxx55 = "fopen";
$xxx56 = "fread";
$xxx57 = "fwrite";
$xxx58 = "header";
$xxx59 = "in_array";
$xxx5a = "implode";
$xxx5b = "is_dir";
$xxx5c = "md5";
$xxx5d = "mkdir";
$xxx5e = "ob_clean";
$xxx5f = "preg_match_all";
$xxx60 = "round";
$xxx61 = "rtrim";
$xxx62 = "sort";
$xxx63 = "str_replace";
$xxx64 = "str_ireplace";
$xxx65 = "strpos";
$xxx66 = "trim";
$xxx67 = "time";
$xxx68 = "unlink";
$xxx0b = "adb";
$xxx0c = "vtiger_current_version";
$xxx0d = "site_URL";
$GLOBALS['current_user'] = json_decode(json_encode(array (
    'id' => '15',
    'authenticated' => false,
    'twoFAauthenticated' => false,
    'error_string' => NULL,
    'is_admin' => 'on',
    'deleted' => NULL,
    'table_name' => 'vtiger_users',
    'table_index' => 'id',
    'list_link_field' => 'last_name',
    'list_mode' => NULL,
    'popup_type' => NULL,
    'module_name' => 'Users',
    'user_preferences' => NULL,
    '__inactive_fields_filtered' => false,
    'user_name' => 'saniceto',
    'user_password' => '$1$sa000000$y.u4L1u8D5dMDnEzSQVGl/',
    'confirm_password' => '$1$sa000000$y.u4L1u8D5dMDnEzSQVGl/',
    'first_name' => 'Saul',
    'last_name' => 'Aniceto',
    'roleid' => 'H2',
    'email1' => 'soporte@bonum.com.mx',
    'status' => 'Active',
    'activity_view' => 'Today',
    'lead_view' => 'Today',
    'hour_format' => '12',
    'end_hour' => '',
    'start_hour' => '',
    'title' => '',
    'phone_work' => '',
    'department' => '',
    'phone_mobile' => '',
    'reports_to_id' => '0',
    'phone_other' => '',
    'email2' => '',
    'phone_fax' => '',
    'secondaryemail' => '',
    'phone_home' => '',
    'date_format' => 'dd-mm-yyyy',
    'signature' => '',
    'description' => '',
    'address_street' => '',
    'address_city' => '',
    'address_state' => '',
    'address_postalcode' => '',
    'address_country' => '',
    'accesskey' => '7D31yT1pQCjxBtR',
    'time_zone' => 'America/Mexico_City',
    'currency_id' => '1',
    'currency_grouping_pattern' => '123,456,789',
    'currency_decimal_separator' => '.',
    'currency_grouping_separator' => '',
    'currency_symbol_placement' => '$1.0',
    'imagename' => '',
    'internal_mailer' => '1',
    'theme' => 'softed',
    'language' => 'es_mx',
    'reminder_interval' => 'None',
    'asterisk_extension' => '',
    'use_asterisk' => '0',
    'send_email_to_sender' => '1',
    'no_of_currency_decimals' => '2',
    'failed_login_attempts' => '0',
    'currency_name' => 'Mexico, Pesos',
    'currency_code' => 'MXN',
    'currency_symbol' => '&#36;',
    'conv_rate' => '1.000000'
  )));
  
require_once ("data/CRMEntity.php");
require_once ("modules/PDFMaker/generar_pdflib.php");
$xxx0e = new PDFMaker();
$xxx0f = CRMEntity::getInstance($_REQUEST["relmodule"]);
$xxx10 = $$xxx0b->query("SELECT license FROM vtiger_pdfmaker_version WHERE version='" . $$xxx0c . "'");

if (!$xxx10 || ($$xxx0b->query_result($xxx10, 0, "license") != $xxx5c($$xxx0d) && $$xxx0b->query_result($xxx10, 0, "license") != $xxx5c("basic/" . $$xxx0d))) {
	echo "Invalid license key! Please contact the vendor of PDF Maker.";
	exit;
} else {

	if (isset($_REQUEST["idslist"]) && $_REQUEST["idslist"] != "") {
		$xxx11 = explode(';', rtrim($_REQUEST['idslist'], ';'));
		if (isset($_SESSION[$_REQUEST["relmodule"] . "_listquery"])) {
			$xxx12 = $_SESSION[$_REQUEST["relmodule"] . "_listquery"];
			$xxx13 = $xxx0f->table_index;
			$xxx14 = $$xxx0b->query($xxx12);
			if ($xxx14) {
				$xxx15 = array();
				while ($xxx16 = $$xxx0b->fetchByAssoc($xxx14)) {
					if (isset($xxx16[$xxx13]) && $xxx59($xxx16[$xxx13], $xxx11)) {
						$xxx15[$xxx16[$xxx13]] = $xxx16[$xxx13];
					}
				}
				$xxx11 = array_values($xxx15);
			} else {
				sort($xxx11);
			}
		} else {
			sort($xxx11);
		}
	} elseif (isset($_REQUEST['record'])) {
		$xxx11 = array($_REQUEST["record"]);
	}
	$xxx17 = trim($_REQUEST['commontemplateid'], ';');
	$xxx18 = explode(';', $xxx17);
	$xxx19 = "";
	if (isset($_REQUEST['mode']) && $_REQUEST['mode'] == 'content') {
		if (isPermitted($_REQUEST['relmodule'], 'EditView') == 'no') {
		    $xxx0e->DieDuePermission();
		}
		$xxx1a = array();
		foreach ($xxx11 as $xxx1b) {
			$xxx0f->retrieve_entity_info($xxx1b, $_REQUEST["relmodule"]);
			$xxx0f->id = $xxx1b;
			foreach ($xxx18 AS $xxx1c) {
				$xxx1d = $xxx0e->GetPDFContentRef($xxx1c, $_REQUEST["relmodule"], $xxx0f, $_REQUEST["language"]);
				$xxx1e = $xxx1d->getContent();
				$xxx1f = $xxx1e["body"];
				$xxx1f = str_replace("#LISTVIEWBLOCK_START#", "", $xxx1f);
				$xxx1f = str_replace("#LISTVIEWBLOCK_END#", "", $xxx1f);
				$xxx1a[$xxx1c]["header"] = $xxx1e["header"];
				$xxx1a[$xxx1c]["body"] = $xxx1f;
				$xxx1a[$xxx1c]["footer"] = $xxx1e["footer"];
			}
		}
		include_once ("modules/PDFMaker/EditPDF.php");
		showEditPDFForm($xxx1a);
	} else {

			$xxx47 = "";
			if (isset($_REQUEST["mode"]) && $_REQUEST["mode"] == "edit") {
				$xxx47 = array();
				foreach ($xxx18 as $xxx1c) {
					$xxx47["header" . $xxx1c] = $_REQUEST["header" . $xxx1c];
					$xxx47["body" . $xxx1c] = $_REQUEST["body" . $xxx1c];
					$xxx47["footer" . $xxx1c] = $_REQUEST["footer" . $xxx1c];
				}
			}

			$xxx48 = "";

			$xxx19 = $xxx0e->GetPreparedMPDF($xxx48, $xxx11, $xxx18, $_REQUEST["relmodule"], $_REQUEST["language"], $xxx47);

			if ($_REQUEST['is_portal'] == "true") {
				$xxx49 = "cache/" . $xxx67();
				$xxx4a = $xxx49 . "/" . $xxx19 . ".pdf";
				mkdir($xxx49);
				$xxx48->Output($xxx4a, "F");
				$_SESSION["portal_pdf_name"] = $xxx4a;
			} else {
				$xxx48->Output('cache/' . $xxx19 . '.pdf');
				@ob_clean();
				$xxx58('Content-Type: application/pdf');
				$xxx58("Content-length: " . filesize("./cache/$xxx19.pdf"));
				$xxx58("Cache-Control: private");
				$xxx58("Content-Disposition: inline; filename=$xxx19.pdf");
				$xxx58("Content-Description: Complemento de solicitud");
				echo fread(fopen("./cache/$xxx19.pdf", "r"), filesize("./cache/$xxx19.pdf"));
				@unlink("cache/$xxx19.pdf");
			}


	}

}

/*header("Content-type:application/pdf");
		header("Content-Disposition: inline; filename=\"filename.pdf\"");
		header("Cache-Control: max-age=0");*/
function x0b($xxx2e) {
	global $xxx50, $xxx51, $xxx52, $xxx53, $xxx54, $xxx55, $xxx56, $xxx57, $xxx58, $xxx59, $xxx5a, $xxx5b, $xxx5c, $xxx5d, $xxx5e, $xxx5f, $xxx60, $xxx61, $xxx62, $xxx63, $xxx64, $xxx65, $xxx66, $xxx67, $xxx68;
	global $site_URL;
	$xxx4c = "http://";
	require_once ("classes/simple_html_dom.php");
	$xxx4d = str_get_html($xxx2e);
	foreach ($xxx4d->find("img") as $xxx4e) {
		if (strpos($xxx4e->src, $xxx4c) === false) {
			$xxx4f = $site_URL . "/" . $xxx4e->src;
			$xxx4e->src = $xxx4f;
		}
	}
	return $xxx4d->save();
}
 ?>

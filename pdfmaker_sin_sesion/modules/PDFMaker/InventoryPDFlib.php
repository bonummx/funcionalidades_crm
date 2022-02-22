<?php
require_once ("modules/PDFMaker/PDFMakerUtils.php");
require_once "modules/PDFMaker/generar_pdflib.php";
Debugger::GetInstance()->Init();
$memory_limit = substr(ini_get("memory_limit"), 0, -1);
if ($memory_limit < 256) {
    ini_set("memory_limit", "256M");
}
global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
$x0b = "array_reverse";
$x0c = "array_keys";
$x0d = "array_push";
$x0e = "array_merge";
$x0f = "array_sum";
$x10 = "call_user_func_array";
$x11 = "count";
$x12 = "date";
$x13 = "explode";
$x14 = "file_exists";
$x15 = "glob";
$x16 = "html_entity_decode";
$x17 = "htmlentities";
$x18 = "iconv";
$x19 = "implode";
$x1a = "in_array";
$x1b = "is_numeric";
$x1c = "is_object";
$x1d = "md5";
$x1e = "nl2br";
$x1f = "number_format";
$x20 = "preg_match_all";
$x21 = "round";
$x22 = "rtrim";
$x23 = "sprintf";
$x24 = "str_replace";
$x25 = "str_ireplace";
$x26 = "strlen";
$x27 = "strip_tags";
$x28 = "strtoupper";
$x29 = "strpos";
$x2a = "substr";
$x2b = "strtolower";
$x2c = "strstr";
$x2d = "trim";
class PDFContent {
    private $templateid;
    private $module;
    private $language;
    private $focus;
    private $db;
    private $mod_strings;
    private $def_charset;
    private $site_url;
    private $decimal_point;
    private $thousands_separator;
    private $decimals;
    public $pagebreak;
    private $rowbreak;
    private $rowPagebreak;
    private $ignored_picklist_values = array();
    private $header;
    private $footer;
    private $body;
    private $content;
    private $filename;
    private $templatename;
    private $type;
    private $section_sep = "&#%ITS%%%@@@%%%ITS%#&";
    private $replacements;
    private $inventory_table_array = Array("PurchaseOrder" => "vtiger_purchaseorder", "SalesOrder" => "vtiger_salesorder", "Quotes" => "vtiger_quotes", "Invoice" => "vtiger_invoice", "Issuecards" => "vtiger_issuecards", "Receiptcards" => "vtiger_receiptcards", "Creditnote" => "vtiger_creditnote", "StornoInvoice" => "vtiger_stornoinvoice");
    private $inventory_id_array = Array("PurchaseOrder" => "purchaseorderid", "SalesOrder" => "salesorderid", "Quotes" => "quoteid", "Invoice" => "invoiceid", "Issuecards" => "issuecardid", "Receiptcards" => "receiptcardid", "Creditnote" => "creditnote_id", "StornoInvoice" => "stornoinvoice_id");
    private $org_cols = array("organizationname" => "COMPANY_NAME", "address" => "COMPANY_ADDRESS", "city" => "COMPANY_CITY", "state" => "COMPANY_STATE", "code" => "COMPANY_ZIP", "country" => "COMPANY_COUNTRY", "phone" => "COMPANY_PHONE", "fax" => "COMPANY_FAX", "website" => "COMPANY_WEBSITE", "logo" => "COMPANY_LOGO",);
    public $bridge2mpdf = array();
    private $relBlockModules = array();
    function __construct($templateid, $module, $focus, $language) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $db = "adb";
        $mod = "mod_strings";
        $vcv = "vtiger_current_version";
        $salt = "site_URL";
        $dc = "default_charset";
        global $$db, $$mod, $$vcv, $$salt, $$dc, $PDFMaker_template_id;
        $this->db = & $$db;
        $this->mod_strings = $$mod;
        $this->def_charset = $$dc;
        $this->templateid = $templateid;
        $PDFMaker_template_id = $this->templateid;
        $this->module = $module;
        $this->focus = $focus;
        $this->language = $language;
        $result = $$db->query("SELECT license FROM vtiger_pdfmaker_version WHERE version='" . $$vcv . "'");
        if ($$db->query_result($result, 0, "license") == $this->x2a($$salt)) {
            $this->type = "professional";
        } elseif ($$db->query_result($result, 0, "license") == $this->x2a("basic/" . $$salt) && ($module == "PurchaseOrder" || $module == "SalesOrder" || $module == "Quotes" || $module == "Invoice")) {
            $this->type = "basic";
        } else {
            $this->type = "invalid";
        }
        $this->x16();
        $this->x17();
        $this->bridge2mpdf["record"] = $this->focus->id;
        $this->bridge2mpdf["templateid"] = $this->templateid;
        $this->rowbreak = "<rowbreak />";
        $this->rowPagebreak = "<rowpagebreak />";
    }
    public function getContent() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once ("classes/simple_html_dom.php");
        $img_root = "img_root_directory";
        $vcv = "vtiger_current_version";
        global $$img_root, $$vcv;
        if ($this->module == 'Calendar') $this->replacements = Array();
        if ($this->type == "professional" || $this->type == "basic") {
            $this->content = $this->body;
            $this->content = $this->header . $this->section_sep;
            $this->content.= $this->body . $this->section_sep;
            $this->content.= $this->footer;
            $this->replacements["##PAGE##"] = "{PAGENO}";
            $this->replacements["##PAGES##"] = "{nb}";
            $this->replacements["##DD-MM-YYYY##"] = $x12("d-m-Y");
            $this->replacements["##DD.MM.YYYY##"] = $x12("d.m.Y");
            $this->replacements["##MM-DD-YYYY##"] = $x12("m-d-Y");
            $this->replacements["##YYYY-MM-DD##"] = $x12("Y-m-d");
            $this->replacements["src='"] = "src='" . $$img_root;
            $this->replacements["$" . $x28($this->module) . "_CRMID$"] = $this->focus->id;

            if ($$vcv == '5.2.1') {
                $displayValueCreated = getDisplayDate($this->focus->column_fields['createdtime']);
                $displayValueModified = getDisplayDate($this->focus->column_fields['modifiedtime']);
            } else {
                $createdtime = new DateTimeField($this->focus->column_fields['createdtime']);
                $displayValueCreated = $createdtime->getDisplayDateTimeValue();
                $modifiedtime = new DateTimeField($this->focus->column_fields['modifiedtime']);
                $displayValueModified = $modifiedtime->getDisplayDateTimeValue();
            }

            $this->replacements["$" . $x28($this->module) . "_CREATEDTIME_DATETIME$"] = $displayValueCreated;
            $this->replacements["$" . $x28($this->module) . "_MODIFIEDTIME_DATETIME$"] = $displayValueModified;
            $this->replacements["$" . "TOTALAFTERDISCOUNT_SUBTOTAL$"] = "$" . "TADS$";
            $this->replacements["$" . "TOTAL_SUBTOTAL$"] = "$" . "TS$";
            $this->replacements["$" . "TOTALSUM_SUBTOTAL$"] = "$" . "TSS$";
            $this->replacements["$" . "TOTALWEIGHT_SUBTOTAL$"] = "$" . "TWS$";
            $this->x36();
            $this->x15();
            $this->content = $x16($this->content, ENT_QUOTES, $this->def_charset);
            $html = str_get_html($this->content);
            foreach ($html->find("div[style^=page-break-after]") as $div_page_break) {
                $div_page_break->outertext = $this->pagebreak;
                $this->content = $html->save();
            }
            foreach ($html->find("div[style^=PAGE-BREAK-AFTER]") as $div_page_break) {
                $div_page_break->outertext = $this->pagebreak;
                $this->content = $html->save();
            }

            $this->x2f();
            $this->x30();
            $this->x31();
            $this->x0b();
            $this->x2b();
            $this->x10($this->module, $this->focus);
            $this->x0d();
            if ($this->focus->column_fields["assigned_user_id"] == "") {
                $this->focus->column_fields["assigned_user_id"] = $this->db->query_result($this->db->query("SELECT smownerid FROM vtiger_crmentity WHERE crmid=" . $this->focus->id), 0, "smownerid");
            }

            $this->x2d();
            $this->x0e($this->rowbreak);
            $this->x0e($this->rowPagebreak);
            $this->x11();
            $this->x12();
            $this->x13();
            $this->x14();
            $this->x35();

            if ($x28($this->def_charset) != "UTF-8") {
                $this->content = $x18($this->def_charset, "UTF-8//TRANSLIT", $this->content);
            }

            if ($this->type == "professional") $this->x28();
            $PDF_content = array();
            list($PDF_content["header"], $PDF_content["body"], $PDF_content["footer"]) = $x13($this->section_sep, $this->content);
        } else {
            $error_text = "Invalid license key! Please contact the vendor of PDF Maker.";
            $PDF_content = array("header" => "<center>ERROR</center>", "body" => $error_text, "footer" => "");
        }
        return $PDF_content;
    }
    public function getSettings() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $sql = "SELECT (margin_top * 10) AS margin_top,
                     (margin_bottom * 10) AS margin_bottom,
                     (margin_left * 10) AS margin_left,
                     (margin_right*10) AS margin_right,
                     format,
                     orientation,
                     encoding,
                     disp_header, disp_footer

              FROM vtiger_pdfmaker_settings WHERE templateid = '" . $this->templateid . "'";
        $result = $this->db->query($sql);
        $Settings = $this->db->fetchByAssoc($result, 1);
        return $Settings;
    }
    private function x0b() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $vcv = "vtiger_current_version";
        global $$vcv;
        $field_inf = "_fieldinfo_cache";
        $sql = "SELECT fieldid, relmodule FROM vtiger_fieldmodulerel";
        $result = $this->db->query($sql);
        $fieldModRel = array();
        while ($row = $this->db->fetchByAssoc($result)) {
            $fieldModRel[$row["fieldid"]][] = $row["relmodule"];
        }
        $sql = "SELECT fieldid, fieldname, uitype, columnname
              FROM vtiger_field

              WHERE tabid=" . getTabId($this->module) . " AND (displaytype != 3 OR fieldid = 64)";
        $result = $this->db->query($sql);
        $num_rows = $this->db->num_rows($result);
        if ($num_rows > 0) {
            $tacModules = array();
            $tac4you = is_numeric(getTabId("Tac4you"));
            if ($tac4you == true) {
                $tacSql = "SELECT tac4you_module FROM vtiger_tac4you_module WHERE presence = 1";
                $tacResult = $this->db->query($tacSql);
                while ($tacRow = $this->db->fetchByAssoc($tacResult)) $tacModules[$tacRow["tac4you_module"]] = $tacRow["tac4you_module"];
            }
            $descModules = array();
            $desc4you = is_numeric(getTabId("Descriptions4you"));
            if ($desc4you == true) {
                $descSql = "SELECT b.name FROM vtiger_links AS a
                         INNER JOIN vtiger_tab AS b USING (tabid)
                         WHERE linktype = 'DETAILVIEWWIDGET'
                            AND linkurl = 'block://ModDescriptions4you:modules/Descriptions4you/ModDescriptions4you.php'";
                $descResult = $this->db->query($descSql);
                while ($descRow = $this->db->fetchByAssoc($descResult)) $descModules[$descRow["name"]] = $descRow["name"];
            }
            $ModCommentsModules = array();
            $ModComments = is_numeric(getTabId("ModComments"));
            if ($ModComments == true) {
                $sql = "SELECT relmodule FROM vtiger_fieldmodulerel WHERE module='ModComments' AND relmodule != 'ModComments'";
                $modCommResult = $this->db->query($sql);
                while ($row = $this->db->fetchByAssoc($modCommResult)) $ModCommentsModules[$row["relmodule"]] = $row["relmodule"];
            }
            while ($row = $this->db->fetch_array($result)) {
                $related_module = "";
                $columnname = $row["columnname"];
                $fk_record = $this->focus->column_fields[$row["fieldname"]];
                switch ($row["uitype"]) {
                    case "51":
                        $related_module = "Accounts";
                    break;
                    case "57":
                        $related_module = "Contacts";
                    break;
                    case "58":
                        $related_module = "Campaigns";
                    break;
                    case "59":
                        $related_module = "Products";
                    break;
                    case "73":
                        $related_module = "Accounts";
                    break;
                    case "75":
                        $related_module = "Vendors";
                    break;
                    case "81":
                        $related_module = "Vendors";
                    break;
                    case "76":
                        $related_module = "Potentials";
                    break;
                    case "78":
                        $related_module = "Quotes";
                    break;
                    case "80":
                        $related_module = "SalesOrder";
                    break;
                    case "68":
                    case "10":
                        $related_module = getSalesEntityType($fk_record);
                    break;
                }
                if ($related_module != "") {
                    $tabid = getTabId($related_module);
                    $temp = & VTCacheUtils::$$field_inf;
                    unset($temp[$tabid]);
                    $focus2 = CRMEntity::getInstance($related_module);
                    if ($fk_record != "" && $fk_record != "0") {
                        $result_delete = $this->db->query("SELECT deleted FROM vtiger_crmentity WHERE crmid='" . $fk_record . "' AND deleted=0");
                        if ($this->db->num_rows($result_delete) > 0) {
                            $focus2->retrieve_entity_info($fk_record, $related_module);
                            $focus2->id = $fk_record;
                        }
                    }
                    $this->replacements["$" . "R_" . strtoupper($related_module) . "_CRMID$"] = $focus2->id;
                    $this->replacements["$" . "R_" . strtoupper($columnname) . "_CRMID$"] = $focus2->id;
                    if ($$vcv == '5.2.1') {
                        $displayValueCreated = getDisplayDate($focus2->column_fields['createdtime']);
                        $displayValueModified = getDisplayDate($focus2->column_fields['modifiedtime']);
                    } else {
                        $createdtime = new DateTimeField($focus2->column_fields['createdtime']);
                        $displayValueCreated = $createdtime->getDisplayDateTimeValue();
                        $modifiedtime = new DateTimeField($focus2->column_fields['modifiedtime']);
                        $displayValueModified = $modifiedtime->getDisplayDateTimeValue();
                    }
                    $this->replacements["$" . "R_" . strtoupper($related_module) . "_CREATEDTIME_DATETIME$"] = $displayValueCreated;
                    $this->replacements["$" . "R_" . strtoupper($columnname) . "_CREATEDTIME_DATETIME$"] = $displayValueCreated;
                    $this->replacements["$" . "R_" . strtoupper($related_module) . "_MODIFIEDTIME_DATETIME$"] = $displayValueModified;
                    $this->replacements["$" . "R_" . strtoupper($columnname) . "_MODIFIEDTIME_DATETIME$"] = $displayValueModified;
                    if (isset($related_module)) {
                        $entityImg = "";
                        switch ($related_module) {
                            case "Contacts":
                                $entityImg = $this->x1b($focus2->id);
                            break;
                            case "Products":
                                $entityImg = $this->x1d($focus2->id);
                            break;
                        }
                        $this->replacements['$R_' . strtoupper($related_module) . '_IMAGENAME$'] = $entityImg;
                        $this->replacements['$R_' . strtoupper($columnname) . '_IMAGENAME$'] = $entityImg;
                    }
                    if (isset($tacModules[$related_module])) {
                        $tacSql = "SELECT text FROM vtiger_tac4you_texts WHERE id=?";
                        $tacResult = $this->db->pquery($tacSql, array($focus2->id));
                        $tacText = $this->db->query_result($tacResult, 0, "text");
                        $tacText = html_entity_decode($tacText, ENT_QUOTES, $this->def_charset);
                        $this->replacements["$" . "R_" . strtoupper($related_module) . "_TAC4YOU$"] = $tacText;
                        $this->replacements["$" . "R_" . strtoupper($columnname) . "_TAC4YOU$"] = $tacText;
                    }
                    if (isset($descModules[$related_module])) {
                        $descSql = "SELECT text FROM vtiger_descriptions4you_texts WHERE id=?";
                        $descResult = $this->db->pquery($descSql, array($focus2->id));
                        $descText = $this->db->query_result($descResult, 0, "text");
                        $descText = html_entity_decode($descText, ENT_QUOTES, $this->def_charset);
                        $this->replacements["$" . "R_" . strtoupper($related_module) . "_DESC4YOU$"] = $descText;
                        $this->replacements["$" . "R_" . strtoupper($columnname) . "_DESC4YOU$"] = $descText;
                    }
                    if (isset($ModCommentsModules[$related_module])) {
                        $modCommText = $this->x32($focus2->id);
                        $modCommText = html_entity_decode($modCommText, ENT_QUOTES, $this->def_charset);
                        $this->replacements["$" . "R_" . strtoupper($columnname) . "_MODCOMMENTS$"] = $modCommText;
                    }
                    $this->x15();
                    $this->x10($related_module, $focus2, true);
                    $this->x10($related_module, $focus2, $columnname);
                    $this->x34($related_module, $focus2, $columnname);
                    unset($focus2);
                }
                if ($row["uitype"] == "68") {
                    $fieldModRel[$row["fieldid"]][] = "Contacts";
                    $fieldModRel[$row["fieldid"]][] = "Accounts";
                }
                if (isset($fieldModRel[$row["fieldid"]])) {
                    foreach ($fieldModRel[$row["fieldid"]] as $idx => $relMod) {
                        if ($relMod == $related_module) continue;
                        $tmpTabId = getTabId($relMod);
                        $temp = & VTCacheUtils::$$field_inf;
                        unset($temp[$tmpTabId]);
                        $tmpFocus = CRMEntity::getInstance($relMod);
                        $this->replacements["$" . "R_" . strtoupper($relMod) . "_CRMID$"] = $tmpFocus->id;
                        $this->replacements["$" . "R_" . strtoupper($columnname) . "_CRMID$"] = $tmpFocus->id;
                        if ($$vcv == '5.2.1') {
                            $displayValueCreated = getDisplayDate($tmpFocus->column_fields['createdtime']);
                            $displayValueModified = getDisplayDate($tmpFocus->column_fields['modifiedtime']);
                        } else {
                            $createdtime = new DateTimeField($tmpFocus->column_fields['createdtime']);
                            $displayValueCreated = $createdtime->getDisplayDateTimeValue();
                            $modifiedtime = new DateTimeField($tmpFocus->column_fields['modifiedtime']);
                            $displayValueModified = $modifiedtime->getDisplayDateTimeValue();
                        }
                        $this->replacements["$" . "R_" . strtoupper($relMod) . "_CREATEDTIME_DATETIME$"] = $displayValueCreated;
                        $this->replacements["$" . "R_" . strtoupper($columnname) . "_CREATEDTIME_DATETIME$"] = $displayValueCreated;
                        $this->replacements["$" . "R_" . strtoupper($relMod) . "_MODIFIEDTIME_DATETIME$"] = $displayValueModified;
                        $this->replacements["$" . "R_" . strtoupper($columnname) . "_MODIFIEDTIME_DATETIME$"] = $displayValueModified;
                        $this->x10($relMod, $tmpFocus, true);
                        $this->x10($relMod, $tmpFocus, $columnname);
                        $this->x34($relMod, $tmpFocus, $columnname);
                        unset($tmpFocus);
                    }
                }
            }
        }
    }
    private function x0c() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once ("classes/simple_html_dom.php");
        $html = str_get_html($this->content);
        $tableDOM = false;
        foreach ($html->find("td") as $td) {
            if (trim($td->plaintext) == "#PRODUCTBLOC_START#") {
                $td->parent->outertext = "#PRODUCTBLOC_START#";
                $oParent = $td->parent;
                while ($oParent->tag != "table") $oParent = $oParent->parent;
                list($tag) = explode('>', $oParent->outertext, 2);
                $header = $oParent->first_child();
                if ($header->tag != "tr") $header = $header->children(0);
                if (is_object($td->parent->prev_sibling()->children[0])) {
                    $header_style = $td->parent->prev_sibling()->children[0]->getAttribute("style");
                } else {
                    $header_style = '';
                }
                $footer_tag = "<tr>";
                if (isset($header_style)) {
                    $StyleHeader = explode(';', $header_style);
                    if (isset($StyleHeader)) {
                        foreach ($StyleHeader as $style_header_tag) {
                            if (strpos($style_header_tag, 'border-top') == TRUE) {
                                $footer_tag.= "<td colspan='" . $td->getAttribute("colspan") . "' style='" . $style_header_tag . "'>&nbsp;</td>";
                            }
                        }
                    }
                } else {
                    $footer_tag.= "<td colspan='" . $td->getAttribute("colspan") . "' style='border-top:1px solid #000000;'>&nbsp;</td>";
                }
                $footer_tag.= "</tr>";
                $var = $td->parent->next_sibling()->last_child()->plaintext;
                $subtotal_tr = "";
                if (strpos($var, 'TOTAL') !== false) {
                    if (is_object($td)) {
                        $style_subtotal = $td->getAttribute("style");
                    }
                    if (isset($td->innertext)) {
                        list($style_subtotal_tag, $style_subtotal_endtag) = explode("#PRODUCTBLOC_START#", $td->innertext);
                    } else {
                        $style_subtotal_tag = "";
                        $style_subtotal_endtag = "";
                    }
                    if (isset($style_subtotal)) {
                        $StyleSubtotal = explode(";", $style_subtotal);
                        if (isset($StyleSubtotal)) {
                            foreach ($StyleSubtotal as $style_tag) {
                                if (strpos($style_tag, "border-top") == TRUE) {
                                    $tag.= " style='" . $style_tag . "'";
                                    break;
                                }
                            }
                        }
                    } else {
                        $style_subtotal = "";
                    }
                    $varArr = $x13(" ", $var, 2);
                    $var = $varArr[0];
                    $varRest = isset($varArr[1]) ? " " . $varArr[1] : "";
                    $subtotal_tr = "<tr>";
                    $subtotal_tr.= "<td colspan='" . ($td->getAttribute("colspan") - 1) . "' style='" . $style_subtotal . ";border-right:none'>" . $style_subtotal_tag . "%G_Subtotal%" . $style_subtotal_endtag . "</td>";
                    $subtotal_tr.= "<td align='right' nowrap='nowrap' style='" . $style_subtotal . "'>" . $style_subtotal_tag . "" . rtrim($var, "$") . "_SUBTOTAL$" . $style_subtotal_endtag . "</td>";
                    $subtotal_tr.= "</tr>";
                }
                $tag.= ">";
                $tableDOM["tag"] = $tag;
                $tableDOM["header"] = $header->outertext;
                $tableDOM["footer"] = $footer_tag;
                $tableDOM["subtotal"] = $subtotal_tr;
            }
            if (trim($td->plaintext) == "#PRODUCTBLOC_END#") $td->parent->outertext = "#PRODUCTBLOC_END#";
        }
        $this->content = $html->save();
        return $tableDOM; // reetp - returns header footer and subtotal sections (if you want a subtotal) (No data)
    }
    private function x0d() {
        // reetp - Substitutes Products into the placeholders
        // reetp - returns above to 'getContent'
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $query = "select * from vtiger_inventoryproductrel where id=?";
        $result = $this->db->pquery($query, array($this->focus->id));
        $num_rows = $this->db->num_rows($result);
        if ($num_rows > 0) {
            $Products = $this->x34($this->module, $this->focus);
            $var_array = array();
            if (strpos($this->content, "#PRODUCTBLOC_START#") !== false && strpos($this->content, "#PRODUCTBLOC_END#") !== false) {
                $tableTag = $this->x0c(); // Returns from xoc above with tableDOM
                $breaklines_array = $this->x19();
                $breaklines = $breaklines_array["products"];
                $show_header = $breaklines_array["show_header"];
                $show_subtotal = $breaklines_array["show_subtotal"];
                $breakline_type = "";
                if (count($breaklines) > 0) {
                    if ($tableTag !== false) {
                        $breakline_type = "</table>" . $this->pagebreak . $tableTag["tag"];
                        if ($show_header == 1) $breakline_type.= $tableTag["header"];
                        if ($show_subtotal == 1) {
                            $breakline_type = $tableTag["subtotal"] . $breakline_type;
                        } else {
                            $breakline_type = $tableTag["footer"] . $breakline_type;
                        }
                    } else {
                        $breakline_type = $this->pagebreak;
                    }
                }
                $ExplodedPdf = array();
                $Exploded = explode("#PRODUCTBLOC_START#", $this->content);
                $ExplodedPdf[] = $Exploded[0];
                for ($iterator = 1; $iterator < count($Exploded); $iterator++) {
                    $SubExploded = explode("#PRODUCTBLOC_END#", $Exploded[$iterator]);
                    foreach ($SubExploded as $part) $ExplodedPdf[] = $part;
                    $highestpartid = $iterator * 2 - 1;
                    $ProductParts[$highestpartid] = $ExplodedPdf[$highestpartid];
                    $ExplodedPdf[$highestpartid] = '';
                }
                if ($Products['P']) { // Here we have all the Quote Product details in the $Products Array["P"]["x"]
                    foreach ($Products["P"] as $Product_Details) {
                        foreach ($ProductParts as $productpartid => $productparttext) {
                            $breakline = "";
                            if ($breakline_type != "" && isset($breaklines[$Product_Details["SERVICES_RECORD_ID"] . "_" . $Product_Details["PRODUCTSEQUENCE"]]) || isset($breaklines[$Product_Details["PRODUCTS_RECORD_ID"] . "_" . $Product_Details["PRODUCTSEQUENCE"]])) {
                                $breakline = $breakline_type;
                            }
                            $productparttext.= $breakline; //reetp - here we are going to substitute each product part into the custom line
                            foreach ($Product_Details AS $coll => $value) {
                                $productparttext = str_replace("$" . strtoupper($coll) . "$", $value, $productparttext);
                            }
                            $ExplodedPdf[$productpartid].= $productparttext;
                        }
                    }
                }
                $this->content = implode('', $ExplodedPdf);
            }
        }
    } // reetp - returns above to 'getContent'
    private function x0e($breakTag) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $html = str_get_html($this->content);
        $toSkip = 0;
        foreach ($html->find($breakTag) as $pb) {
            $tmpPb = $pb;
            while ($tmpPb != null && $tmpPb->tag != "td") {
                $tmpPb = $tmpPb->parent();
            }
            if ($tmpPb->tag == "td") {
                if ($toSkip > 0) {
                    $toSkip--;
                    continue;
                }
                $prev_sibling = $tmpPb->prev_sibling();
                $prev_sibling_atts = array();
                while ($prev_sibling != null) {
                    $prev_sibling_atts[] = $this->x0f($prev_sibling);
                    $prev_sibling = $prev_sibling->prev_sibling();
                }
                $prev_sibling_atts = $x0b($prev_sibling_atts);
                $next_sibling = $tmpPb->next_sibling();
                $next_sibling_atts = array();
                while ($next_sibling != null) {
                    $next_sibling_atts[] = $this->x0f($next_sibling);
                    $next_sibling = $next_sibling->next_sibling();
                }
                $breakTagParentNode = $pb->parent();
                while ($breakTagParentNode->tag == "span" || $breakTagParentNode->tag == "small") {
                    $breakTagParentNodes[] = $breakTagParentNode;
                    $breakTagParentNode = $breakTagParentNode->parent();
                }
                $childOpenTagsString = "";
                foreach ($breakTagParentNodes as $childNode) {
                    $childOpenTagsString.= '<' . $childNode->tag . ' ' . $this->x0f($childNode) . '>';
                }
                $reversedChildNodes = $x0b($breakTagParentNodes);
                $childClosingTagsString = "";
                foreach ($reversedChildNodes as $childNode) {
                    $childClosingTagsString.= '</' . $childNode->tag . '>';
                }
                $parentTableAddition = "";
                if ($breakTag == $this->rowPagebreak) {
                    $parent_table = $tmpPb->parent();
                    while ($parent_table->tag != "table" && $parent_table != null) {
                        $parent_table = $parent_table->parent();
                    }
                    if ($parent_table == null) {
                        continue;
                    }
                    $parent_table_atts = $this->x0f($parent_table);
                    $parentTableAddition = '</table>' . $this->pagebreak . '<table ' . $parent_table_atts . '>';
                }
                $current_cell_atts = $this->x0f($tmpPb);
                $partsArr = $x13($breakTag, $tmpPb->innertext);
                for ($i = 0;$i < ($x11($partsArr) - 1);$i++) {
                    $tmpPb->innertext = $partsArr[$i];
                    $addition = $parentTableAddition . '<tr>';
                    for ($j = 0;$j < $x11($prev_sibling_atts);$j++) {
                        $addition.= '<td ' . $prev_sibling_atts[$j] . '>&nbsp;</td>';
                    }
                    $addition.= '<td ' . $current_cell_atts . '>' . $childOpenTagsString . $partsArr[$i + 1] . $childClosingTagsString . '</td>';
                    for ($j = 0;$j < $x11($next_sibling_atts);$j++) {
                        $addition.= '<td ' . $next_sibling_atts[$j] . '>&nbsp;</td>';
                    }
                    $addition.= '</tr>';
                    $tmpPb->parent()->outertext = $tmpPb->parent()->outertext . $addition;
                }
                $toSkip = count($partsArr) - 2;
            }
        }
        $this->content = $html->save();
    }
    private function x0f($elm) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $atts_string = "";
        if ($elm != null) {
            foreach ($elm->attr as $attName => $attVal) {
                $atts_string.= $attName . '="' . $attVal . '" ';
            }
        }
        return $atts_string;
    }
    private function x10($emodule, $efocus, $is_related = false, $inventory_currency = false) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $cur_usr = "current_user";
        global $$cur_usr;
        $related_fieldnames = array("related_to", "relatedto", "parent_id", "parentid", "product_id", "productid", "service_id", "serviceid", "vendor_id", "product", "account", "invoiceid", "linktoaccountscontacts", "projectid", "sc_related_to");
        if ($inventory_currency !== false) $inventory_content = array();
        $tabid = getTabid($emodule);
        $convEntity = $emodule;
        if ($is_related === false) {
            $related = "";
        } else {
            $related = "R_";
            if ($is_related !== true) $convEntity = $is_related;
        }
        $Checkboxes = array();
        $Picklists = array();
        $Textareas = array();
        $Datefields = array();
        $Multipicklists = array();
        $CurrencyFields = array();
        $NumberFields = array();
        if ($tabid == '9') {
            $sql = "SELECT fieldname, uitype, typeofdata FROM vtiger_field WHERE tabid IN (9,16)";
        } else {
            $sql = "SELECT fieldname, uitype, typeofdata FROM vtiger_field WHERE tabid = '" . $tabid . "'";
        }
        $result = $this->db->query($sql);
        while ($row = $this->db->fetchByAssoc($result)) {
            switch ($row['uitype']) {
                case '19':
                case '20':
                case '21':
                case '24':
                    $Textareas[] = $row["fieldname"];
                break;
                case '5':
                case '6':
                case '23':
                case '70':
                    $Datefields[] = $row["fieldname"];
                break;
                case '15':
                    $Picklists[] = $row["fieldname"];
                break;
                case '56':
                    $Checkboxes[] = $row["fieldname"];
                break;
                case '33':
                    $Multipicklists[] = $row["fieldname"];
                break;
                case '71':
                    $CurrencyFields[] = $row["fieldname"];
                break;
                case '9':
                    $NumberFields[] = $row["fieldname"];
                break;
                case '7':
                    if ($x2a($row["typeofdata"], 0, 1) == "N") {
                        $NumberFields[] = $row["fieldname"];
                    }
                break;
            }
            if ($row['fieldname'] == 'salutationtype') $Picklists[] = $row["fieldname"];
        }
        foreach ($efocus->column_fields as $fieldname => $value) {
            if ($fieldname == "assigned_user_id") $value = $this->x1e($value);
            elseif ($fieldname == "account_id") {
                $value = getAccountName($value);
            } elseif ($fieldname == "potential_id") $value = getPotentialName($value);
            elseif ($fieldname == "contact_id") $value = getContactName($value);
            elseif ($fieldname == "quote_id") $value = getQuoteName($value);
            elseif ($fieldname == "salesorder_id") $value = getSoName($value);
            elseif ($fieldname == "campaignid") $value = getCampaignName($value);
            elseif ($fieldname == "terms_conditions") $value = $this->x25($value);
            elseif ($fieldname == "comments") $value = $this->x26($efocus);
            elseif ($fieldname == "folderid") $value = $this->x27($value);
            elseif ($fieldname == "time_start" || $fieldname == "time_end") {
                $curr_time = DateTimeField::convertToUserTimeZone($value);
                $value = $curr_time->format('H:i');
            } elseif (in_array($fieldname, $related_fieldnames)) {
                if ($value != "") {
                    $parent_module = getSalesEntityType($value);
                    $displayValueArray = getEntityName($parent_module, $value);
                    if (!empty($displayValueArray)) {
                        foreach ($displayValueArray as $p_value) {
                            $value = $p_value;
                        }
                    }
                    if ($fieldname == "invoiceid" && $value == "0") $value = "";
                }
            }
            if (in_array($fieldname, $Datefields)) {
                if ($emodule == "Events" || $emodule == "Calendar") {
                    if ($fieldname == "date_start" && $efocus->column_fields["time_start"] != "") {
                        $curr_time = $efocus->column_fields['time_start'];
                        $value = $value . ' ' . $curr_time;
                    } elseif ($fieldname == "due_date" && $efocus->column_fields["time_end"] != "") {
                        $curr_time = $efocus->column_fields['time_end'];
                        $value = $value . ' ' . $curr_time;
                    }
                }
                if ($value != "") $value = getValidDisplayDate($value);
            } elseif (in_array($fieldname, $Picklists)) {
                if (!in_array(trim($value), $this->ignored_picklist_values)) {
                    $value = $this->x20($value, $emodule);
                } else {
                    $value = "";
                }
            } elseif (in_array($fieldname, $Checkboxes)) {
                $pdf_app_strings = return_application_language($this->language);
                if ($value == 1) {
                    $value = $pdf_app_strings["yes"];
                } else {
                    $value = $pdf_app_strings["no"];
                }
            } elseif (in_array($fieldname, $Textareas)) {
                $value = nl2br($value);
                $value = html_entity_decode($value, ENT_QUOTES, $this->def_charset);
            } elseif (in_array($fieldname, $Multipicklists)) $value = str_ireplace(' |##| ', ', ', $value);
            elseif (in_array($fieldname, $CurrencyFields)) {
                if (is_numeric($value)) {
                    if ($inventory_currency === false) {
                        $user_currency_data = getCurrencySymbolandCRate($$cur_usr->currency_id);
                        $crate = $user_currency_data["rate"];
                    } else {
                        $crate = $inventory_currency["conversion_rate"];
                    }
                    $value = convertFromMasterCurrency($value, $crate);
                }
                $value = $this->x23($value);
            } elseif (in_array($fieldname, $NumberFields)) {
                $value = $this->x23($value);
            }
            if ($inventory_currency !== false) {
                $inventory_content[strtoupper($emodule . '_' . $fieldname) ] = $value;
            } else {
                $this->replacements["$" . $related . strtoupper($convEntity . "_" . $fieldname) . "$"] = $value;
            }
        }
        if ($inventory_currency !== false) {
            return $inventory_content;
        } else {
            $this->x15();
        }
    }
    private function x11() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $cur_usr = "current_user";
        $root_dir = "root_directory";
        global $$cur_usr, $$root_dir;
        // $sql = "SELECT * FROM vtiger_organizationdetails";
        // $result = $this->db->query($sql);
        // $Org_Details = $this->db->fetchByAssoc($result, 1);
        $Org_Details = retrieveCompanyDetails();
        foreach ($Org_Details AS $coll => $value) {
            if ($coll == "logo") $value = '<img src="' . $$root_dir . $Org_Details["companylogo"] . '">';
            if (isset($this->org_cols[$coll])) {
                $this->replacements["$" . $this->org_cols[$coll] . "$"] = $value;
            }
        }
        $tandc = getTermsandConditions();
        $this->replacements["$" . "TERMS_AND_CONDITIONS$"] = $x1e($tandc);
        $user_sql = "SELECT * FROM vtiger_users WHERE id=" . $this->focus->column_fields["assigned_user_id"];
        $user_res = $this->db->query($user_sql);
        $user_row = $this->db->fetchByAssoc($user_res);
        $this->replacements["$" . "USER_CRMID$"] = $user_row["id"];
        $this->replacements["$" . "USER_USERNAME$"] = $user_row["user_name"];
        $this->replacements["$" . "USER_FIRSTNAME$"] = $user_row["first_name"];
        $this->replacements["$" . "USER_LASTNAME$"] = $user_row["last_name"];
        $this->replacements["$" . "USER_EMAIL$"] = $user_row["email1"];
        $this->replacements["$" . "USER_TITLE$"] = $user_row["title"];
        $this->replacements["$" . "USER_FAX$"] = $user_row["phone_fax"];
        $this->replacements["$" . "USER_DEPARTMENT$"] = $user_row["department"];
        $this->replacements["$" . "USER_OTHER_EMAIL$"] = $user_row["email2"];
        $this->replacements["$" . "USER_PHONE$"] = $user_row["phone_work"];
        $this->replacements["$" . "USER_MOBILE$"] = $user_row["phone_mobile"];
        $this->replacements["$" . "USER_HOME_PHONE$"] = $user_row["phone_home"];
        $this->replacements["$" . "USER_OTHER_PHONE$"] = $user_row["phone_other"];
        $this->replacements["$" . "USER_SIGHNATURE$"] = $user_row["signature"];
        $this->replacements["$" . "USER_NOTES$"] = $user_row["description"];
        $this->replacements["$" . "USER_ADDRESS$"] = $user_row["address_street"];
        $this->replacements["$" . "USER_COUNTRY$"] = $user_row["address_country"];
        $this->replacements["$" . "USER_CITY$"] = $user_row["address_city"];
        $this->replacements["$" . "USER_ZIP$"] = $user_row["address_postalcode"];
        $this->replacements["$" . "USER_STATE$"] = $user_row["address_state"];
        $this->replacements["$" . "L_USER_CRMID$"] = $$cur_usr->id;
        $this->replacements["$" . "L_USER_USERNAME$"] = $$cur_usr->column_fields["user_name"];
        $this->replacements["$" . "L_USER_FIRSTNAME$"] = $$cur_usr->column_fields["first_name"];
        $this->replacements["$" . "L_USER_LASTNAME$"] = $$cur_usr->column_fields["last_name"];
        $this->replacements["$" . "L_USER_EMAIL$"] = $$cur_usr->column_fields["email1"];
        $this->replacements["$" . "L_USER_TITLE$"] = $$cur_usr->column_fields["title"];
        $this->replacements["$" . "L_USER_FAX$"] = $$cur_usr->column_fields["phone_fax"];
        $this->replacements["$" . "L_USER_DEPARTMENT$"] = $$cur_usr->column_fields["department"];
        $this->replacements["$" . "L_USER_OTHER_EMAIL$"] = $$cur_usr->column_fields["email2"];
        $this->replacements["$" . "L_USER_PHONE$"] = $$cur_usr->column_fields["phone_work"];
        $this->replacements["$" . "L_USER_MOBILE$"] = $$cur_usr->column_fields["phone_mobile"];
        $this->replacements["$" . "L_USER_HOME_PHONE$"] = $$cur_usr->column_fields["phone_home"];
        $this->replacements["$" . "L_USER_OTHER_PHONE$"] = $$cur_usr->column_fields["phone_other"];
        $this->replacements["$" . "L_USER_SIGHNATURE$"] = $$cur_usr->column_fields["signature"];
        $this->replacements["$" . "L_USER_NOTES$"] = $$cur_usr->column_fields["description"];
        $this->replacements["$" . "L_USER_ADDRESS$"] = $$cur_usr->column_fields["address_street"];
        $this->replacements["$" . "L_USER_COUNTRY$"] = $$cur_usr->column_fields["address_country"];
        $this->replacements["$" . "L_USER_CITY$"] = $$cur_usr->column_fields["address_city"];
        $this->replacements["$" . "L_USER_ZIP$"] = $$cur_usr->column_fields["address_postalcode"];
        $this->replacements["$" . "L_USER_STATE$"] = $$cur_usr->column_fields["address_state"];
        $this->x15();
        $focus_user = CRMEntity::getInstance("Users");
        $focus_user->id = $this->focus->column_fields["assigned_user_id"];
        $this->x24($focus_user, $focus_user->id, "Users");
        $this->x10("Users", $focus_user, false);
        $curr_user_focus = CRMEntity::getInstance("Users");
        $curr_user_focus->id = $$cur_usr->id;
        $this->x24($curr_user_focus, $curr_user_focus->id, "Users");
        $this->x10("Users", $curr_user_focus, true);
        $this->replacements["$" . "USERS_CRMID$"] = $focus_user->id;
        $this->replacements["$" . "R_USERS_CRMID$"] = $curr_user_focus->id;
        $this->x15();
    }
    private function x12() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once "modules/PDFMaker/generar_pdflib.php";
        $PDFMaker = new PDFMaker();
        $app_lang = return_application_language($this->language);
        $mod_lang = return_specified_module_language($this->language, $this->module);
        list($custom_lang, $languages) = $PDFMaker->GetCustomLabels();
        $currLangId = "";
        foreach ($languages as $langId => $langVal) {
            if ($langVal["prefix"] == $this->language) {
                $currLangId = $langId;
                break;
            }
        }
        if (strpos($this->content, "%G_") !== false) {
            foreach ($app_lang as $key => $value) {
                $this->replacements["%G_" . $key . "%"] = $value;
            }
        }
        if (strpos($this->content, "%M_") !== false) {
            foreach ($mod_lang as $key => $value) {
                $this->replacements["%M_" . $key . "%"] = $value;
            }
        }
        if (strpos($this->content, "%C_") !== false) {
            foreach ($custom_lang as $key => $value) {
                $this->replacements["%" . $value->GetKey() . "%"] = $value->GetLangValue($currLangId);
            }
        }
        if (count($this->relBlockModules) > 0) {
            $services_lang = return_specified_module_language($this->language, "Services");
            $contacts_lang = return_specified_module_language($this->language, "Contacts");
            foreach ($this->relBlockModules as $relBlockModule) {
                if ($relBlockModule != "") {
                    $relMod_lang = return_specified_module_language($this->language, $relBlockModule);
                    $en_us_app_lang = return_application_language("en_us");
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Service Name%"] = $services_lang["Service Name"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Secondary Email%"] = $contacts_lang["Secondary Email"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Last Modified By%"] = $app_lang["Last Modified"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Conversion Rate%"] = $app_lang["LBL_CONVERSION_RATE"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_List Price%"] = $app_lang["LBL_LIST_PRICE"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Discount%"] = $app_lang["LBL_DISCOUNT"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Quantity%"] = $app_lang["LBL_QUANTITY"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Comments%"] = $app_lang["LBL_COMMENTS"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Currency%"] = $app_lang["LBL_CURRENCY"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Due Date%"] = $app_lang["LBL_DUE_DATE"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_End Time%"] = $app_lang["End Time"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Related to%"] = $app_lang["LBL_RELATED_TO"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Assigned To%"] = $app_lang["Assigned To"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Created Time%"] = $app_lang["Created Time"];
                    $this->replacements["%R_" . strtoupper($relBlockModule) . "_Modified Time%"] = $app_lang["Modified Time"];
                    foreach ($relMod_lang as $key => $value) {
                        $this->replacements["%R_" . strtoupper($relBlockModule) . "_" . htmlentities($key, ENT_QUOTES, $this->def_charset) . "%"] = $value;
                    }
                }
            }
        }
        $this->x15();
    }
    private function x13() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once ("classes/simple_html_dom.php");
        $this->replacements["[BARCODE|"] = "<barcode>";
        $this->replacements["|BARCODE]"] = "</barcode>";
        $this->x15();
        $html = str_get_html($this->content);
        foreach ($html->find("barcode") as $barcode) {
            $params = explode('|', $barcode->plaintext);
            list($type, $code) = explode('=', $params[0], 2);
            $barcodeAtts = 'code="' . $code . '" type="' . $type . '" ';
            for ($i = 1; $i < count($params); $i++) {
                list($attName, $attVal) = explode("=", $params[$i], 2);
                $barcodeAtts.= strtolower($attName) . '="' . $attVal . '" ';
            }
            $barcode->outertext = '<barcode ' . $barcodeAtts . '/>';
        }
        $this->content = $html->save();
    }
    private function x14() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $salt = "site_URL";
        global $$salt;
        $surl = $$salt;
        require_once ("classes/simple_html_dom.php");
        $html = str_get_html($this->content);
        foreach ($html->find("img") as $img) {
            if ($surl[strlen($surl) - 1] != "/") $surl = $surl . "/";
            if (strpos($img->src, $surl) === 0) {
                $newPath = str_replace($surl, "", $img->src);
                if (file_exists($newPath)) $img->src = $newPath;
            }
        }
        $this->content = $html->save();
    }
    private function x15() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (!empty($this->replacements)) {
            $this->content = str_replace(array_keys($this->replacements), $this->replacements, $this->content);
            $this->replacements = array();
        }
    }
    private function x16() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $salt = "site_URL";
        global $$salt;
        $this->site_url = trim($$salt, '/');
        $sql = "SELECT vtiger_pdfmaker.*, vtiger_pdfmaker_settings.*
              FROM vtiger_pdfmaker
              LEFT JOIN vtiger_pdfmaker_settings
                ON vtiger_pdfmaker_settings.templateid = vtiger_pdfmaker.templateid
              WHERE vtiger_pdfmaker.templateid=?";
        $result = $this->db->pquery($sql, array($this->templateid));
        $data = $this->db->fetch_array($result);
        $this->decimal_point = html_entity_decode($data["decimal_point"], ENT_QUOTES, $this->def_charset);
        $this->thousands_separator = html_entity_decode(($data["thousands_separator"] != "sp" ? $data["thousands_separator"] : " "), ENT_QUOTES, $this->def_charset);
        $this->decimals = $data["decimals"];
        $this->header = html_entity_decode($data["header"], ENT_QUOTES, $this->def_charset);
        $this->footer = html_entity_decode($data["footer"], ENT_QUOTES, $this->def_charset);
        $this->body = html_entity_decode($data["body"], ENT_QUOTES, $this->def_charset);
        $this->filename = $data["file_name"];
        $this->templatename = $data["filename"];
        $formatPB = $data["format"];
        if (strpos($formatPB, ";") > 0) {
            $tmpArr = explode(";", $formatPB);
            $formatPB = $tmpArr[0] . "mm " . $tmpArr[1] . "mm";
        } elseif ($data["orientation"] == "landscape") {
            $formatPB.= "-L";
        }
        $this->pagebreak = '<pagebreak sheet-size="' . $formatPB . '" orientation="' . $data["orientation"] . '" margin-left="' . ($data["margin_left"] * 10) . 'mm" margin-right="' . ($data["margin_right"] * 10) . 'mm" margin-top="0mm" margin-bottom="0mm" margin-header="' . ($data["margin_top"] * 10) . 'mm" margin-footer="' . ($data["margin_bottom"] * 10) . 'mm" />';
    }
    private function x17() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $sql = "SELECT value FROM vtiger_pdfmaker_ignorepicklistvalues";
        $result = $this->db->query($sql);
        while ($row = $this->db->fetchByAssoc($result)) {
            $this->ignored_picklist_values[] = $row["value"];
        }
    }
    private function x18($module, $focus) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $taxtype = $this->x22($module, $focus);
        $query = "select case when vtiger_products.productid != '' then vtiger_products.productname else vtiger_service.servicename end as productname," . " case when vtiger_products.productid != '' then vtiger_products.productid else vtiger_service.serviceid end as psid," . " case when vtiger_products.productid != '' then vtiger_products.product_no else vtiger_service.service_no end as psno," . " case when vtiger_products.productid != '' then 'Products' else 'Services' end as entitytype," . " case when vtiger_products.productid != '' then vtiger_products.unit_price else vtiger_service.unit_price end as unit_price," . " case when vtiger_products.productid != '' then vtiger_products.usageunit else vtiger_service.service_usageunit end as usageunit," . " case when vtiger_products.productid != '' then vtiger_products.qty_per_unit else vtiger_service.qty_per_unit end as qty_per_unit," . " case when vtiger_products.productid != '' then vtiger_products.qtyinstock else 'NA' end as qtyinstock," . " case when vtiger_products.productid != '' then c1.description else c2.description end as psdescription, vtiger_inventoryproductrel.* " . " from vtiger_inventoryproductrel" . " left join vtiger_products on vtiger_products.productid=vtiger_inventoryproductrel.productid " . " left join vtiger_crmentity as c1 on c1.crmid = vtiger_products.productid " . " left join vtiger_service on vtiger_service.serviceid=vtiger_inventoryproductrel.productid " . " left join vtiger_crmentity as c2 on c2.crmid = vtiger_service.serviceid " . " where id=? ORDER BY sequence_no";
        $result = $this->db->pquery($query, array($focus->id));
        $num_rows = $this->db->num_rows($result);
        $netTotal = "0.00";
        $totalAfterDiscount_subtotal = 0;
        $total_subtotal = 0;
        $totalsum_subtotal = 0;
        $weight_total = 0;
        $weight_subtotal = 0;
        $sumwithoutvat = 0;
        list($images, $bacImgs) = $this->x1a($focus->id);
        $mpdfSubtotalAble = array();
        $Total_Tax_Values = array();
        for ($i = 1; $i <= $num_rows; $i++) {
            $sub_prod_query = $this->db->pquery("SELECT productid from vtiger_inventorysubproductrel WHERE id=? AND sequence_no=?", array($focus->id, $i));
            $subprodname_str = '';
            if ($this->db->num_rows($sub_prod_query) > 0) {
                for ($j = 0; $j < $this->db->num_rows($sub_prod_query); $j++) {
                    $sprod_id = $this->db->query_result($sub_prod_query, $j, "productid");
                    $sprod_name = getProductName($sprod_id);
                    $str_sep = "";
                    if ($j > 0) $str_sep = ":";
                    $subprodname_str.= $str_sep . " - " . $sprod_name;
                }
            }
            $subprodname_str = str_replace(':', '<br>', $subprodname_str);
            $psid = $this->db->query_result($result, $i - 1, "psid");
            $psno = $this->db->query_result($result, $i - 1, "psno");
            $productid = $this->db->query_result($result, $i - 1, "productid");
            $entitytype = $this->db->query_result($result, $i - 1, "entitytype");
            $producttitle = $productname = $this->db->query_result($result, $i - 1, "productname");
            if ($subprodname_str != "") $productname.= "<br/><span style='color:#C0C0C0;font-style:italic;'>" . $subprodname_str . "</span>";
            $comment = $this->db->query_result($result, $i - 1, "comment");
            $psdescription = $this->db->query_result($result, $i - 1, "psdescription");
            $inventory_prodrel_desc = $this->db->query_result($result, $i - 1, "description");
            $qtyinstock = $this->db->query_result($result, $i - 1, "qtyinstock");
            $qty = $this->db->query_result($result, $i - 1, "quantity");
            $qty_per_unit = $this->db->query_result($result, $i - 1, "qty_per_unit");
            $usageunit = $this->db->query_result($result, $i - 1, "usageunit");
            $unitprice = $this->db->query_result($result, $i - 1, "unit_price");
            $listprice = $this->db->query_result($result, $i - 1, "listprice");
            $productweight = $this->db->query_result($result, $i - 1, "weight");
            $productweight_total = (float)$qty * (float)$productweight;
            $total = $qty * $listprice;
            $discount_percent = $this->db->query_result($result, $i - 1, "discount_percent");
            $discount_amount = $this->db->query_result($result, $i - 1, "discount_amount");
            $totalAfterDiscount = $total;
            $productDiscount = "0.00";
            $productDiscountPercent = "";
            if ($discount_percent != "NULL" && $discount_percent != "") {
                $productDiscount = $total * $discount_percent / 100;
                $totalAfterDiscount = $total - $productDiscount;
                $productDiscountPercent = $discount_percent;
            } elseif ($discount_amount != "NULL" && $discount_amount != "") {
                $productDiscount = $discount_amount;
                $totalAfterDiscount = $total - $productDiscount;
            }
            $netprice = $totalAfterDiscount;
            $taxtotal = '0.00';
            if ($taxtype == "individual") {
                $tax_info_message = $mod_strings["LBL_TOTAL_AFTER_DISCOUNT"] . " = $totalAfterDiscount \n";
                $tax_details = getTaxDetailsForProduct($productid, "all");
                $Tax_Values = array();
                for ($tax_count = 0; $tax_count < count($tax_details); $tax_count++) {
                    $tax_name = $tax_details[$tax_count]["taxname"];
                    $tax_label = $tax_details[$tax_count]["taxlabel"];
                    $tax_value = getInventoryProductTaxValue($focus->id, $productid, $tax_name);
                    $individual_taxamount = $totalAfterDiscount * $tax_value / 100;
                    $taxtotal = $taxtotal + $individual_taxamount;
                    if ($tax_name != "" && $tax_value > 0) {
                        $vatblock[$tax_name . "-" . $tax_value]["label"] = $tax_label;
                        $vatblock[$tax_name . "-" . $tax_value]["netto"]+= $totalAfterDiscount;
                        $vatblock[$tax_name . "-" . $tax_value]["vat"]+= round($individual_taxamount, $this->decimals);
                        $vatblock[$tax_name . "-" . $tax_value]["value"] = $tax_value;
                        array_push($Tax_Values, $tax_value);
                        array_push($Total_Tax_Values, $tax_value);
                    }
                }
                $netprice = $netprice + $taxtotal;
                if (count($Tax_Values) > 0) {
                    $tax_avg_value = array_sum($Tax_Values);
                } else {
                    $tax_avg_value = "0.00";
                }
                $Details["P"][$i]["PRODUCTVATPERCENT"] = $this->x23($tax_avg_value);
                $Details["P"][$i]["PRODUCTVATSUM"] = $this->x23($taxtotal);
            }
            if ($entitytype == "Products") {
                $Details["P"][$i]["PRODUCTS_CRMID"] = $psid;
                $Details["P"][$i]["SERVICES_CRMID"] = "";
            } else {
                $Details["P"][$i]["PRODUCTS_CRMID"] = "";
                $Details["P"][$i]["SERVICES_CRMID"] = $psid;
            }
            $Details["P"][$i]["PS_CRMID"] = $psid;
            $Details["P"][$i]["PS_NO"] = $psno;
            if ($comment != "") {
                $comment = str_replace("\n", "<br>", nl2br($comment));
                $comment = html_entity_decode($comment, ENT_QUOTES, $this->def_charset);
                $productname.= '<br /><small>' . $comment . '</small>';
            }
            $Details["P"][$i]["PRODUCTNAME"] = $productname;
            $Details["P"][$i]["PRODUCTTITLE"] = $producttitle;
            $psdescription = str_replace("\n", "<br>", nl2br($psdescription));
            $Details["P"][$i]["PRODUCTDESCRIPTION"] = html_entity_decode($psdescription, ENT_QUOTES, $this->def_charset);
            $Details["P"][$i]["PRODUCTEDITDESCRIPTION"] = $comment;
            $inventory_prodrel_desc = str_replace("\n", "<br>", nl2br($inventory_prodrel_desc));
            $Details["P"][$i]["CRMNOWPRODUCTDESCRIPTION"] = html_entity_decode($inventory_prodrel_desc, ENT_QUOTES, $this->def_charset);
            $Details["P"][$i]["PRODUCTLISTPRICE"] = $this->x23($listprice);
            $Details["P"][$i]["PRODUCTTOTAL"] = $this->x23($total);
            $Details["P"][$i]["PRODUCTQUANTITY"] = $this->x23($qty);
            $Details["P"][$i]["PRODUCTQINSTOCK"] = $this->x23($qtyinstock);
            $Details["P"][$i]["PRODUCTPRICE"] = $this->x23($unitprice);
            $Details["P"][$i]["PRODUCTPOSITION"] = $i;
            $Details["P"][$i]["PRODUCTQTYPERUNIT"] = $this->x23($qty_per_unit);
            $value = $usageunit;
            if (!in_array(trim($value), $this->ignored_picklist_values)) {
                $value = $this->x20($value, "Products/Services");
            } else {
                $value = "";
            }
            $Details["P"][$i]["PRODUCTUSAGEUNIT"] = $value;
            $Details["P"][$i]["PRODUCTDISCOUNT"] = $this->x23($productDiscount);
            $Details["P"][$i]["PRODUCTDISCOUNTPERCENT"] = $this->x23($productDiscountPercent);
            $Details["P"][$i]["PRODUCTSTOTALAFTERDISCOUNTSUM"] = $totalAfterDiscount;
            $Details["P"][$i]["PRODUCTSTOTALAFTERDISCOUNT"] = $this->x23($totalAfterDiscount);
            $Details["P"][$i]["PRODUCTTOTALSUM"] = $this->x23($totalAfterDiscount + $taxtotal);
            $Details["P"][$i]["PRODUCTWEIGHT"] = $this->x23($productweight);
            $Details["P"][$i]["PRODUCTWEIGHTTOTAL"] = $this->x23($productweight_total);
            $totalAfterDiscount_subtotal+= $totalAfterDiscount;
            $total_subtotal+= $total;
            $totalsum_subtotal+= $totalAfterDiscount + $taxtotal;
            $weight_subtotal+= $productweight_total;
            $Details["P"][$i]["PRODUCTSTOTALAFTERDISCOUNT_SUBTOTAL"] = $this->x23($totalAfterDiscount_subtotal);
            $Details["P"][$i]["PRODUCTTOTAL_SUBTOTAL"] = $this->x23($total_subtotal);
            $Details["P"][$i]["PRODUCTTOTALSUM_SUBTOTAL"] = $this->x23($totalsum_subtotal);
            $Details["P"][$i]["PRODUCTTOTALWEIGHT_SUBTOTAL"] = $this->x23($weight_subtotal);
            $mpdfSubtotalAble[$i]["$" . "TOTALAFTERDISCOUNT_SUBTOTAL$"] = $Details["P"][$i]["PRODUCTSTOTALAFTERDISCOUNT_SUBTOTAL"];
            $mpdfSubtotalAble[$i]["$" . "TOTAL_SUBTOTAL$"] = $Details["P"][$i]["PRODUCTTOTAL_SUBTOTAL"];
            $mpdfSubtotalAble[$i]["$" . "TOTALSUM_SUBTOTAL$"] = $Details["P"][$i]["PRODUCTTOTALSUM_SUBTOTAL"];
            $mpdfSubtotalAble[$i]["$" . "TADS$"] = $Details["P"][$i]["PRODUCTSTOTALAFTERDISCOUNT_SUBTOTAL"];
            $mpdfSubtotalAble[$i]["$" . "TS$"] = $Details["P"][$i]["PRODUCTTOTAL_SUBTOTAL"];
            $mpdfSubtotalAble[$i]["$" . "TSS$"] = $Details["P"][$i]["PRODUCTTOTALSUM_SUBTOTAL"];
            $mpdfSubtotalAble[$i]["$" . "TWS$"] = $Details["P"][$i]["PRODUCTTOTALWEIGHT_SUBTOTAL"];
            $sequence = $this->db->query_result($result, $i - 1, "sequence_no");
            $Details["P"][$i]["PRODUCTSEQUENCE"] = $sequence;
            if (isset($images[$productid . "_" . $sequence])) {
                $width = "";
                $height = "";
                if ($images[$productid . "_" . $sequence]["width"] > 0) $width = " width='" . $images[$productid . "_" . $sequence]["width"] . "' ";
                if ($images[$productid . "_" . $sequence]["height"] > 0) $height = " height='" . $images[$productid . "_" . $sequence]["height"] . "' ";
                $Details["P"][$i]["PRODUCTS_IMAGENAME"] = "<img src='" . $this->site_url . "/" . $images[$productid . "_" . $sequence]["src"] . "' " . $width . $height . "/>";
            } elseif (isset($bacImgs[$productid . "_" . $sequence])) {
                $Details["P"][$i]["PRODUCTS_IMAGENAME"] = "<img src='" . $this->site_url . "/" . $bacImgs[$productid . "_" . $sequence]["src"] . "' width='83' />";
            }
            $focus_p = CRMEntity::getInstance("Products");
            if ($entitytype == "Products" && $psid != "") {
                $focus_p->id = $psid;
                $this->x24($focus_p, $psid, "Products");
            }
            $currencytype = $this->x21($module, $focus);
            $Array_P = $this->x10("Products", $focus_p, false, $currencytype);
            $Details["P"][$i] = array_merge($Array_P, $Details["P"][$i]);
            unset($focus_p);
            $focus_s = CRMEntity::getInstance("Services");
            if ($entitytype == "Services" && $psid != "") {
                $focus_s->id = $psid;
                $this->x24($focus_s, $psid, "Services");
            }
            $Array_S = $this->x10("Services", $focus_s, false, $currencytype);
            $Details["P"][$i] = array_merge($Array_S, $Details["P"][$i]);
            unset($focus_s);
            $sumwithoutvat+= $totalAfterDiscount;
            $netTotal = $netTotal + $netprice;
        }
        if ($this->module == $module) $this->bridge2mpdf["subtotalsArray"] = $mpdfSubtotalAble;
        $finalDiscount = "0.00";
        $final_discount_info = "0";
        $finalDiscountPercent = "";
        if ($focus->column_fields["hdnDiscountPercent"] != "0") {
            $finalDiscount = ($netTotal * $focus->column_fields["hdnDiscountPercent"] / 100);
            $finalDiscountPercent = $focus->column_fields["hdnDiscountPercent"];
        } elseif ($focus->column_fields["hdnDiscountAmount"] != "0") {
            $finalDiscount = $focus->column_fields["hdnDiscountAmount"];
        }
        $taxtotal = "0.00";
        $total_vat_percent = 0;
        if ($taxtype == "group") {
            $final_totalAfterDiscount = $netTotal - $finalDiscount;
            $tax_details = getAllTaxes("available", "", "edit", $focus->id);
            for ($tax_count = 0; $tax_count < count($tax_details); $tax_count++) {
                $tax_name = $tax_details[$tax_count]["taxname"];
                $tax_label = $tax_details[$tax_count]["taxlabel"];
                $tax_value = $this->db->query_result($result, 0, $tax_name);
                if ($tax_value == "" || $tax_value == "NULL") $tax_value = "0.00";
                $taxamount = ($netTotal - $finalDiscount) * $tax_value / 100;
                $taxtotal = $taxtotal + $taxamount;
                if ($tax_name != "" && $tax_value > 0) {
                    $vatblock[$tax_name]["label"] = $tax_label;
                    $vatblock[$tax_name]["netto"] = $final_totalAfterDiscount;
                    if (!isset($vatblock[$tax_name]['vat'])) {
                        $vatblock[$tax_name]['vat'] = 0;
                    }
                    $vatblock[$tax_name]["vat"]+= $taxamount;
                    $vatblock[$tax_name]["value"] = $tax_value;
                }
                $total_vat_percent+= $tax_value;
            }
            $vat_value = $taxtotal;
            foreach ($Details["P"] as $keyP => $valueP) {
                $productvatsum = ($Details["P"][$keyP]["PRODUCTSTOTALAFTERDISCOUNTSUM"] * $total_vat_percent) / 100;
                $producttotalsum = $Details["P"][$keyP]["PRODUCTSTOTALAFTERDISCOUNTSUM"] + $productvatsum;
                $Details["P"][$keyP]["PRODUCTVATPERCENT"] = $this->x23($total_vat_percent);
                $Details["P"][$keyP]["PRODUCTVATSUM"] = $this->x23($productvatsum);
                $Details["P"][$keyP]["PRODUCTTOTALSUM"] = $this->x23($producttotalsum);
            }
        } else {
            if (count($vatblock) > 0) {
                foreach ($vatblock as $keyM => $valueM) $vat_value+= $valueM["vat"];
            } else {
                $vat_value = "0.00";
            }
        }
        $shAmount = ($focus->column_fields["hdnS_H_Amount"] != "") ? $focus->column_fields["hdnS_H_Amount"] : "0.00";
        $shtaxtotal = "0.00";
        $shtax_details = getAllTaxes("available", "sh", "edit", $focus->id);
        for ($shtax_count = 0; $shtax_count < count($shtax_details); $shtax_count++) {
            $shtax_name = $shtax_details[$shtax_count]["taxname"];
            $shtax_label = $shtax_details[$shtax_count]["taxlabel"];
            $shtax_percent = getInventorySHTaxPercent($focus->id, $shtax_name);
            $shtaxamount = $shAmount * $shtax_percent / 100;
            $shtaxtotal = $shtaxtotal + $shtaxamount;
        }
        $totalafterdiscount = $sumwithoutvat - $finalDiscount;
        $totalwithvat = ($sumwithoutvat - $finalDiscount) + $vat_value;
        $Details["TOTAL"]["NETTOTAL"] = $this->x23($netTotal);
        $Details["TOTAL"]["TOTALWITHOUTVAT"] = $this->x23($sumwithoutvat);
        $Details["TOTAL"]["FINALDISCOUNT"] = $this->x23($finalDiscount);
        $Details["TOTAL"]["FINALDISCOUNTPERCENT"] = $this->x23($finalDiscountPercent);
        $Details["TOTAL"]["TOTALAFTERDISCOUNT"] = $this->x23($totalafterdiscount);
        $Details["TOTAL"]["TAXTOTAL"] = $this->x23($vat_value);
        $Details["TOTAL"]["TAXTOTALPERCENT"] = $this->x23($total_vat_percent);
        $Details["TOTAL"]["TOTALWITHVAT"] = $this->x23($totalwithvat);
        $Details["TOTAL"]["SHTAXAMOUNT"] = $this->x23($shAmount);
        $Details["TOTAL"]["SHTAXTOTAL"] = $this->x23($shtaxtotal);
        $Details["TOTAL"]["VATBLOCK"] = $vatblock;
        return $Details;
    }
    private function x19() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $sql = "SELECT productid, sequence, show_header, show_subtotal FROM vtiger_pdfmaker_breakline WHERE crmid=?";
        $res = $this->db->pquery($sql, array($this->focus->id));
        $products = array();
        $show_header = 0;
        $show_subtotal = 0;
        while ($row = $this->db->fetchByAssoc($res)) {
            $products[$row["productid"] . "_" . $row["sequence"]] = $row["sequence"];
            $show_header = $row["show_header"];
            $show_subtotal = $row["show_subtotal"];
        }
        $output["products"] = $products;
        $output["show_header"] = $show_header;
        $output["show_subtotal"] = $show_subtotal;
        return $output;
    }
    private function x1a($id, $isProductModule = false) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if ($isProductModule === false) {
            $sql = "SELECT vtiger_inventoryproductrel.productid, vtiger_inventoryproductrel.sequence_no, vtiger_attachments.attachmentsid, name, path

		          FROM vtiger_inventoryproductrel

		          LEFT JOIN vtiger_seattachmentsrel
		            ON vtiger_seattachmentsrel.crmid=vtiger_inventoryproductrel.productid
		          LEFT JOIN vtiger_attachments

		            ON vtiger_attachments.attachmentsid=vtiger_seattachmentsrel.attachmentsid
				  INNER JOIN vtiger_crmentity
				    ON vtiger_attachments.attachmentsid=vtiger_crmentity.crmid

		          WHERE vtiger_crmentity.deleted=0 AND vtiger_inventoryproductrel.id=?
				  ORDER BY vtiger_inventoryproductrel.sequence_no";
        } else {
            $sql = "SELECT vtiger_products.productid, '1' AS sequence_no,
		            vtiger_attachments.attachmentsid, name, path
		          FROM vtiger_products
		          LEFT JOIN vtiger_seattachmentsrel
		            ON vtiger_seattachmentsrel.crmid=vtiger_products.productid
		          LEFT JOIN vtiger_attachments
		            ON vtiger_attachments.attachmentsid=vtiger_seattachmentsrel.attachmentsid

                  INNER JOIN vtiger_crmentity
			    	ON vtiger_attachments.attachmentsid=vtiger_crmentity.crmid
		          WHERE vtiger_crmentity.deleted=0 AND vtiger_products.productid=? ORDER BY vtiger_attachments.attachmentsid";
        }
        $mainImgs = array();
        $bacImgs = array();
        $res = $this->db->pquery($sql, array($id));
        $products = array();
        while ($row = $this->db->fetchByAssoc($res)) {
            $products[$row["productid"] . "#_#" . $row["sequence_no"]][$row["attachmentsid"]]["path"] = $row["path"];
            $products[$row["productid"] . "#_#" . $row["sequence_no"]][$row["attachmentsid"]]["name"] = $row["name"];
        }
        $saved_sql = "SELECT productid, sequence, attachmentid, width, height FROM vtiger_pdfmaker_images WHERE crmid=?";
        $saved_res = $this->db->pquery($saved_sql, array($id));
        $saved_products = array();
        $saved_wh = array();
        while ($saved_row = $this->db->fetchByAssoc($saved_res)) {
            $saved_products[$saved_row["productid"] . "_" . $saved_row["sequence"]] = $saved_row["attachmentid"];
            $saved_wh[$saved_row["productid"] . "_" . $saved_row["sequence"]]["width"] = ($saved_row["width"] > 0 ? $saved_row["width"] : "");
            $saved_wh[$saved_row["productid"] . "_" . $saved_row["sequence"]]["height"] = ($saved_row["height"] > 0 ? $saved_row["height"] : "");
        }
        foreach ($products as $productnameid => $data) {
            list($productid, $seq) = explode('#_#', $productnameid, 2);
            foreach ($data as $attid => $images) {
                if ($attid != "") {
                    if (isset($saved_products[$productid . "_" . $seq])) {
                        if ($saved_products[$productid . "_" . $seq] == $attid) {
                            $width = $saved_wh[$productid . "_" . $seq]["width"];
                            $height = $saved_wh[$productid . "_" . $seq]["height"];
                            $mainImgs[$productid . "_" . $seq]["src"] = $images["path"] . $attid . '_' . $images["name"];
                            $mainImgs[$productid . "_" . $seq]["width"] = $width;
                            $mainImgs[$productid . "_" . $seq]["height"] = $height;
                        }
                    } elseif (!isset($bacImgs[$productid . "_" . $seq])) {
                        $bacImgs[$productid . "_" . $seq]["src"] = $images["path"] . $attid . '_' . $images["name"];
                    }
                }
            }
        }
        return array($mainImgs, $bacImgs);
    }
    private function x1b($id) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (isset($id) AND $id != "") {
            $query = "SELECT vtiger_attachments.path, vtiger_attachments.name, vtiger_attachments.attachmentsid
              FROM vtiger_contactdetails
              INNER JOIN vtiger_seattachmentsrel
                ON vtiger_contactdetails.contactid=vtiger_seattachmentsrel.crmid
              INNER JOIN vtiger_attachments
                ON vtiger_attachments.attachmentsid=vtiger_seattachmentsrel.attachmentsid
              INNER JOIN vtiger_crmentity
                ON vtiger_attachments.attachmentsid=vtiger_crmentity.crmid
              WHERE deleted=0 AND vtiger_contactdetails.contactid=?";
            $result = $this->db->pquery($query, array($id));
            $num_rows = $this->db->num_rows($result);
            if ($num_rows > 0) {
                $image_src = $this->db->query_result($result, 0, "path") . $this->db->query_result($result, 0, "attachmentsid") . "_" . $this->db->query_result($result, 0, "name");
                $image = "<img src='" . $this->site_url . "/" . $image_src . "'/>";
                return $image;
            }
        } else {
            return "";
        }
    }
    private function x1c($id) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (isset($id) AND $id != "") {
            $sql = "select vtiger_attachments.* from vtiger_attachments left join vtiger_salesmanattachmentsrel on vtiger_salesmanattachmentsrel.attachmentsid = vtiger_attachments.attachmentsid where vtiger_salesmanattachmentsrel.smid=?";
            $image_res = $this->db->pquery($sql, array($id));
            $image_id = $this->db->query_result($image_res, 0, 'attachmentsid');
            $image_path = $this->db->query_result($image_res, 0, 'path');
            $image_name = $this->db->query_result($image_res, 0, 'name');
            $imgpath = $image_path . $image_id . "_" . $image_name;
            if ($image_name != '') {
                $image = '<img src="' . $imgpath . '" width="250px" border="0">';
            } else {
                $image = '';
            }
            return $image;
        } else {
            return "";
        }
    }
    private function x1d($id) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $productid = $id;
        list($images, $bacImgs) = $this->x1a($productid, true);
        $sequence = "1";
        $retImage = "";
        if (isset($images[$productid . "_" . $sequence])) {
            $width = "";
            $height = "";
            if ($images[$productid . "_" . $sequence]["width"] > 0) $width = " width='" . $images[$productid . "_" . $sequence]["width"] . "' ";
            if ($images[$productid . "_" . $sequence]["height"] > 0) $height = " height='" . $images[$productid . "_" . $sequence]["height"] . "' ";
            $retImage = "<img src='" . $this->site_url . "/" . $images[$productid . "_" . $sequence]["src"] . "' " . $width . $height . "/>";
        } elseif (isset($bacImgs[$productid . "_" . $sequence])) {
            $retImage = "<img src='" . $this->site_url . "/" . $bacImgs[$productid . "_" . $sequence]["src"] . "' width='83' />";
        }
        return $retImage;
    }
    private function x1e($id) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if ($id != "") {
            $sql = "SELECT user_name FROM vtiger_users WHERE id=?";
            $result = $this->db->pquery($sql, array($id));
            $ownername = $this->db->query_result($result, 0, "user_name");
        }
        if (empty($ownername)) {
            $sql = "SELECT groupname FROM vtiger_groups WHERE groupid=?";
            $result = $this->db->pquery($sql, array($id));
            $ownername = $this->db->query_result($result, 0, "groupname");
        } else {
            $ownername = getUserFullName($id);
        }
        return $ownername;
    }
    private function x1f($account_id) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $accountno = "";
        if ($account_id != '') {
            $sql = "SELECT account_no FROM vtiger_account WHERE accountid=?";
            $result = $this->db->pquery($sql, array($account_id));
            $accountno = $this->db->query_result($result, 0, "account_no");
        }
        return $accountno;
    }
    private function x20($str, $emodule) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once ("modules/PDFMaker/PDFMakerUtils.php");
        return getTranslatedStringInLang($str, $emodule, $this->language);
    }
    private function x21($module, $focus) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $inventory_table = $this->inventory_table_array[$module];
        $inventory_id = $this->inventory_id_array[$module];
        $res = $this->db->pquery("SELECT currency_id, " . $inventory_table . ".conversion_rate AS conv_rate, vtiger_currency_info.*
                                FROM " . $inventory_table . "
                                INNER JOIN vtiger_currency_info ON " . $inventory_table . ".currency_id = vtiger_currency_info.id

                                WHERE " . $inventory_id . "=?", array($focus->id));
        $currency_info = array();
        $currency_info["currency_id"] = $this->db->query_result($res, 0, "currency_id");
        $currency_info["conversion_rate"] = $this->db->query_result($res, 0, "conv_rate");
        $currency_info["currency_name"] = $this->db->query_result($res, 0, "currency_name");
        $currency_info["currency_code"] = $this->db->query_result($res, 0, "currency_code");
        $currency_info["currency_symbol"] = $this->db->query_result($res, 0, "currency_symbol");
        return $currency_info;
    }
    private function x22($module, $focus) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $res = $this->db->pquery("SELECT taxtype FROM " . $this->inventory_table_array[$module] . " WHERE " . $this->inventory_id_array[$module] . "=?", array($focus->id));
        $taxtype = $this->db->query_result($res, 0, 'taxtype');
        return $taxtype;
    }
    private function x23($value) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (is_numeric($value)) {
            $number = number_format($value, $this->decimals, $this->decimal_point, $this->thousands_separator);
        } else {
            $number = "";
        }
        return $number;
    }
    private function x24(&$focus, $record, $module) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $result = Array();
        foreach ($focus->tab_name_index as $table_name => $index) $result[$table_name] = $this->db->pquery("SELECT * FROM " . $table_name . " WHERE " . $index . "=?", array($record));
        $tabid = getTabid($module);
        $sql1 = "SELECT fieldname, fieldid, fieldlabel, columnname, tablename, uitype, typeofdata, presence

               FROM vtiger_field WHERE tabid=?";
        $result1 = $this->db->pquery($sql1, array($tabid));
        $noofrows = $this->db->num_rows($result1);
        if ($noofrows) {
            while ($resultrow = $this->db->fetch_array($result1)) {
                $fieldcolname = $resultrow["columnname"];
                $tablename = $resultrow["tablename"];
                $fieldname = $resultrow["fieldname"];
                $fld_value = "";
                if (isset($result[$tablename])) $fld_value = $this->db->query_result($result[$tablename], 0, $fieldcolname);
                $focus->column_fields[$fieldname] = $fld_value;
            }
        }
        $focus->column_fields["record_id"] = $record;
        $focus->column_fields["record_module"] = $module;
    }
    private function x25($value) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (file_exists('modules/Settings/EditTermDetails.php')) {
            $sql = "SELECT tandc FROM vtiger_inventory_tandc WHERE id='" . $value . "'";
            $res = $this->db->query($sql);
            $num = $this->db->num_rows($res);
            if ($num > 0) {
                $tandc = $this->db->query_result($res, 0, "tandc");
            } else {
                $tandc = $value;
            }
        } else {
            $tandc = $value;
        }
        return $tandc;
    }
    private function x26($efocus) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $commentlist = "";
        $prefix = "";
        if ($efocus->column_fields["record_module"] == "HelpDesk") {
            $prefix = "ticket";
        } elseif ($efocus->column_fields["record_module"] == "Faq") {
            $prefix = "faq";
        }
        if ($prefix != "") {
            $mod_lang = return_specified_module_language($this->language, $efocus->column_fields["record_module"]);
            $sql = "SELECT * FROM vtiger_" . $prefix . "comments WHERE " . $prefix . "id=" . $efocus->id;
            $result = $this->db->query($sql);
            while ($row = $this->db->fetchByAssoc($result)) {
                $comment = $row["comments"];
                $crtime = getValidDisplayDate($row["createdtime"]);
                $body = "";
                if ($prefix == "ticket") {
                    $author = $this->x1e($row["ownerid"]);
                    $body = $comment . "<br />" . $mod_lang["LBL_AUTHOR"] . ": " . $author . "<br />" . $mod_lang["Created Time"] . ": " . $crtime . "<br /><br />";
                } else {
                    $body = $comment . "<br />" . $mod_lang["Created Time"] . ": " . $crtime . "<br /><br />";
                }
                $commentlist.= $body;
            }
        }
        return $commentlist;
    }
    private function x27($folderid) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
		if($folderid == '')
			return $folderid;
		else{
			$sql = "SELECT foldername FROM vtiger_attachmentsfolder WHERE folderid=" . $folderid;
			return $foldername = $this->db->query_result($this->db->query($sql), 0, "foldername");
		}
    }
    private function x28() {
		// reetp - call custom functions
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (is_numeric(strpos($this->content, '[CUSTOMFUNCTION|'))) {
            require_once ("classes/simple_html_dom.php");
            foreach (glob('modules/PDFMaker/functions/*.php') as $file) {
                include_once $file;
            }
            $this->replacements["[CUSTOMFUNCTION|"] = "<customfunction>";
            $this->replacements["|CUSTOMFUNCTION]"] = "</customfunction>";
            $this->x15(); // Replace [CUSTOMFUNCTION with <customfunction>]

            // Here is the issue when we try to get an image - we want the whole img tag but it strips it
            // when we try to wrap it with a custom func
            $html = str_get_html($this->content);
            foreach ($html->find("customfunction") as $customfunction) {
                $Params = $this->x29(trim($customfunction->plaintext)); // strips the custom func name from the string
                $func = $Params[0]; // get the custom func name from the PDF template
                unset($Params[0]);
                if (is_callable($func)) {
                	$replacement = call_user_func_array($func, $Params);
                } else {
                	$replacement = '';
                }
                $customfunction->outertext = $replacement; // reetp - can only replace individual lines here, not add extras to the table
            }
            $this->content = $html->save(); // reetp - here we have the completed html with <custom function> tags
        }
    }
    private function x29($val) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $Params = array();
        $end = false;
        do {
            if (strstr($val, '|')) {
                if ($val[0] == '"') {
                    $delimiter = '"|';
                    $val = substr($val, 1);
                } elseif (substr($val, 0, 6) == '&quot;') {
                    $delimiter = '&quot;|';
                    $val = substr($val, 6);
                } else {
                    $delimiter = '|';
                }
                list($Params[], $val) = explode($delimiter, $val, 2);
            } else {
                $Params[] = $val;
                $end = true;
            }
        } while (!$end);
        return $Params;
    }
    public function getFilename() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $this->content = $this->filename;
        $this->replacements["$#TEMPLATE_NAME#$"] = $this->templatename;
        $this->replacements["$#DD-MM-YYYY#$"] = date("d-m-Y");
        $this->replacements["$#MM-DD-YYYY#$"] = date("m-d-Y");
        $this->replacements["$#YYYY-MM-DD#$"] = date("Y-m-d");
        $this->replacements["$" . strtoupper($this->module) . "_CRMID$"] = $this->focus->id;
        $this->x10($this->module, $this->focus);
        $this->replacements = array();
        $this->replacements["\r\n"] = "";
        $this->replacements["\n\r"] = "";
        $this->replacements["\n"] = "";
        $this->replacements["\r"] = "";
        $this->x15();
        return str_replace(" ", "_", substr(strip_tags(html_entity_decode($this->content, ENT_QUOTES, $this->def_charset)), 0, 255));
    }
    private function x2a($val) {
        return md5($val);
    }
    private function x2b() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        include_once ("modules/PDFMaker/RelBlockRun.php");
        if (strpos($this->content, "#RELBLOCK") !== false) {
            preg_match_all("|#RELBLOCK([0-9]+)_START#|U", $this->content, $RelatedBlocks, PREG_PATTERN_ORDER);
            if (count($RelatedBlocks[1]) > 0) {
                $ConvertRelBlock = array();
                foreach ($RelatedBlocks[1] AS $r => $relblockid) {
                    if (!in_array($relblockid, $ConvertRelBlock)) {
                        $sql_rb = "SELECT secmodule FROM vtiger_pdfmaker_relblocks WHERE relblockid = '" . $relblockid . "'";
                        $secmodule = $this->db->query_result($this->db->query($sql_rb), 0, "secmodule");
                        if (strpos($this->content, "#RELBLOCK" . $relblockid . "_START#") !== false) {
                            if (strpos($this->content, "#RELBLOCK" . $relblockid . "_END#") !== false) {
                                $tableDOM = $this->x2c($relblockid);
                                $oRelBlockRun = new RelBlockRun($this->focus->id, $relblockid, $this->module, $secmodule);
                                $oRelBlockRun->SetPDFLanguage($this->language);
                                $oRelBlockRun->SetFormatNumberAttributes($this->decimals, $this->decimal_point, $this->thousands_separator);
                                $RelBlock_Data = $oRelBlockRun->GenerateReport();
                                $ExplodedPdf = array();
                                $Exploded = explode("#RELBLOCK" . $relblockid . "_START#", $this->content);
                                $ExplodedPdf[] = $Exploded[0];
                                for ($iterator = 1; $iterator < count($Exploded); $iterator++) {
                                    $SubExploded = explode("#RELBLOCK" . $relblockid . "_END#", $Exploded[$iterator]);
                                    foreach ($SubExploded as $part) $ExplodedPdf[] = $part;
                                    $highestpartid = $iterator * 2 - 1;
                                    $ProductParts[$highestpartid] = $ExplodedPdf[$highestpartid];
                                    $ExplodedPdf[$highestpartid] = '';
                                }
                                if (count($RelBlock_Data) > 0) {
                                    $this->relBlockModules[$relblockid] = $secmodule;
                                    foreach ($RelBlock_Data as $RelBlock_Details) {
                                        foreach ($ProductParts as $productpartid => $productparttext) {
                                            $show_line = false;
                                            foreach ($RelBlock_Details AS $coll => $value) {
                                                if (trim($value) != '-' && $coll != 'listprice') {
                                                    $show_line = true;
                                                }
                                                $productparttext = str_ireplace("$" . $coll . "$", $value, $productparttext);
                                            }
                                            if ($show_line) $ExplodedPdf[$productpartid].= $productparttext;
                                        }
                                    }
                                }
                                $this->content = implode('', $ExplodedPdf);
                            }
                        }
                        $ConvertRelBlock[] = $relblockid;
                    }
                }
            }
        }
    }
    private function x2c($relblockid) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once ("classes/simple_html_dom.php");
        $html = str_get_html($this->content);
        $tableDOM = false;
        foreach ($html->find("td") as $td) {
            if (trim($td->plaintext) == "#RELBLOCK" . $relblockid . "_START#") {
                $td->parent->outertext = "#RELBLOCK" . $relblockid . "_START#";
            }
            if (trim($td->plaintext) == "#RELBLOCK" . $relblockid . "_END#") {
                $td->parent->outertext = "#RELBLOCK" . $relblockid . "_END#";
            }
        }
        $this->content = $html->save();
        return $tableDOM;
    }
    private function x2d() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once ("classes/simple_html_dom.php");
        $html = str_get_html($this->content);
        foreach ($html->find("td") as $td) {
            if (trim($td->plaintext) == "#LISTVIEWBLOCK_START#") $td->parent->outertext = "#LISTVIEWBLOCK_START#";
            if (trim($td->plaintext) == "#LISTVIEWBLOCK_END#") $td->parent->outertext = "#LISTVIEWBLOCK_END#";
        }
        $this->content = $html->save();
    }
    private function x2e() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        require_once ("classes/simple_html_dom.php");
        $html = str_get_html($this->content);
        foreach ($html->find("td") as $td) {
            if (trim($td->plaintext) == "#VATBLOCK_START#") {
                $td->parent->outertext = "#VATBLOCK_START#";
            }
            if (trim($td->plaintext) == "#VATBLOCK_END#") {
                $td->parent->outertext = "#VATBLOCK_END#";
            }
        }
        $this->content = $html->save();
    }
    private function x2f() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $tacModules = array();
        $tac4you = is_numeric(getTabId("Tac4you"));
        if ($tac4you == true) {
            $tacSql = "SELECT text FROM vtiger_tac4you_texts WHERE id=?";
            $tacResult = $this->db->pquery($tacSql, array($this->focus->id));
            $tacText = $this->db->query_result($tacResult, 0, "text");
            $this->replacements["$" . strtoupper($this->module) . "_TAC4YOU$"] = html_entity_decode($tacText, ENT_QUOTES, $this->def_charset);
        }
    }
    private function x30() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $desc4youModules = array();
        $desc4you = is_numeric(getTabId("Descriptions4you"));
        if ($desc4you == true) {
            $descSql = "SELECT text FROM vtiger_descriptions4you_texts WHERE id=?";
            $descResult = $this->db->pquery($descSql, array($this->focus->id));
            $descText = $this->db->query_result($descResult, 0, "text");
            $this->replacements["$" . strtoupper($this->module) . "_DESC4YOU$"] = html_entity_decode($descText, ENT_QUOTES, $this->def_charset);
        }
    }
    private function x31() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $ModCommentsModules = array();
        $ModComments = is_numeric(getTabId("ModComments"));
        $string_comments = "";
        if ($ModComments == true) {
            $sql = "SELECT relmodule FROM vtiger_fieldmodulerel WHERE module='ModComments' AND relmodule = ?";
            $result = $this->db->pquery($sql, array($this->module));
            if ($this->db->num_rows($result) > 0) {
                $string_comments = $this->x32($this->focus->id);
            }
        }
        $this->replacements["$" . strtoupper($this->module) . "_MODCOMMENTS$"] = html_entity_decode($string_comments, ENT_QUOTES, $this->def_charset);
    }
    private function x32($parent_id) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $string_comments = '';
        if (file_exists('modules/ModComments/ModComments.php') == true) {
            require_once ("modules/ModComments/ModComments.php");
            $moduleName = "ModComments";
            $entityInstance = CRMEntity::getInstance($moduleName);
            $queryCriteria = sprintf(" ORDER BY %s.%s DESC ", $entityInstance->table_name, $entityInstance->table_index);
            $query = $entityInstance->getListQuery($moduleName, sprintf(" AND %s.related_to=?", $entityInstance->table_name));
            $query.= $queryCriteria;
            $result = $this->db->pquery($query, array($parent_id));
            $instances = array();
            if ($this->db->num_rows($result)) {
                while ($resultrow = $this->db->fetch_array($result)) {
                    $tmpMc = new ModComments_CommentsModel($resultrow);
                    $string_comments.= "<p>[" . $tmpMc->author() . ": " . $tmpMc->timestamp() . " ]<br />" . $tmpMc->content() . "</p>";
                }
            }
        }
        return $string_comments;
    }
    private function x33($module, $focus) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (isset($focus->column_fields["currency_id"]) && isset($focus->column_fields["conversion_rate"]) && isset($focus->column_fields["hdnGrandTotal"])) {
            $this->inventory_table_array[$module] = $focus->table_name;
            $this->inventory_id_array[$module] = $focus->table_index;
        }
    }
    private function x34($module, $focus, $is_related = false) {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        if (!isset($this->inventory_table_array[$module])) $this->x33($module, $focus);
        if (!isset($this->inventory_table_array[$module])) return array();
        if (empty($focus->id)) return array();
        $prefix = "";
        if ($is_related !== false) $prefix = "R_" . strtoupper($is_related) . "_";
        $this->replacements["$" . $prefix . "SUBTOTAL$"] = $this->x23($focus->column_fields["hdnSubTotal"]);
        $this->replacements["$" . $prefix . "TOTAL$"] = $this->x23($focus->column_fields["hdnGrandTotal"]);
        $currencytype = $this->x21($module, $focus);
        $currencytype["currency_symbol"] = str_replace("â�¬", "&euro;", $currencytype["currency_symbol"]);
        $currencytype["currency_symbol"] = str_replace("\C2£", "&pound;", $currencytype["currency_symbol"]);
        $this->replacements["$" . $prefix . "CURRENCYNAME$"] = getTranslatedCurrencyString($currencytype["currency_name"]);
        $this->replacements["$" . $prefix . "CURRENCYSYMBOL$"] = $currencytype["currency_symbol"];
        $this->replacements["$" . $prefix . "CURRENCYCODE$"] = $currencytype["currency_code"];
        $this->replacements["$" . $prefix . "ADJUSTMENT$"] = $this->x23($focus->column_fields["txtAdjustment"]);
        $Products = $this->x18($module, $focus);
        $this->replacements["$" . $prefix . "TOTALWITHOUTVAT$"] = $Products["TOTAL"]["TOTALWITHOUTVAT"];
        $this->replacements["$" . $prefix . "VAT$"] = $Products["TOTAL"]["TAXTOTAL"];
        $this->replacements["$" . $prefix . "VATPERCENT$"] = $Products["TOTAL"]["TAXTOTALPERCENT"];
        $this->replacements["$" . $prefix . "TOTALWITHVAT$"] = $Products["TOTAL"]["TOTALWITHVAT"];
        $this->replacements["$" . $prefix . "SHTAXAMOUNT$"] = $Products["TOTAL"]["SHTAXAMOUNT"];
        $this->replacements["$" . $prefix . "SHTAXTOTAL$"] = $Products["TOTAL"]["SHTAXTOTAL"];
        $this->replacements["$" . $prefix . "TOTALDISCOUNT$"] = $Products["TOTAL"]["FINALDISCOUNT"];
        $this->replacements["$" . $prefix . "TOTALDISCOUNTPERCENT$"] = $Products["TOTAL"]["FINALDISCOUNTPERCENT"];
        $this->replacements["$" . $prefix . "TOTALAFTERDISCOUNT$"] = $Products["TOTAL"]["TOTALAFTERDISCOUNT"];
        $this->x15();
        if ($is_related === false) {
            if (count($Products['TOTAL']['VATBLOCK']) > 0) {
                $vattable = "<table border='1' style='border-collapse:collapse;' cellpadding='3'>";
                $vattable.= "<tr>
                                <td nowrap align='center'>" . getTranslatedString('Name') . "</td>

                                <td nowrap align='center'>" . $this->mod_strings["LBL_VATBLOCK_VAT_PERCENT"] . "</td>
                                <td nowrap align='center'>" . $this->mod_strings["LBL_VATBLOCK_SUM"] . " (" . $currencytype["currency_symbol"] . ")" . "</td>

                                <td nowrap align='center'>" . $this->mod_strings["LBL_VATBLOCK_VAT_VALUE"] . " (" . $currencytype["currency_symbol"] . ")" . "</td>
                              </tr>";
                foreach ($Products["TOTAL"]["VATBLOCK"] as $keyW => $valueW) {
                    if ($valueW["netto"] != 0) {
                        $vattable.= "<tr>
                                        <td nowrap align='left' width='20%'>" . $valueW["label"] . "</td>
                        				<td nowrap align='right' width='25%'>" . $this->x23($valueW["value"]) . " %</td>
                                        <td nowrap align='right' width='30%'>" . $this->x23($valueW["netto"]) . "</td>
                                        <td nowrap align='right' width='25%'>" . $this->x23($valueW["vat"]) . "</td>
                                      </tr>";
                    }
                }
                $vattable.= "</table>";
            } else {
                $vattable = "";
            }
            $this->replacements["$" . "VATBLOCK$"] = $vattable;
            $this->x15();
            if (strpos($this->content, "#VATBLOCK_START#") !== false && strpos($this->content, "#VATBLOCK_END#") !== false) {
                $this->x2e();
                $VExplodedPdf = array();
                $VExploded = explode("#VATBLOCK_START#", $this->content);
                $VExplodedPdf[] = $VExploded[0];
                for ($iterator = 1; $iterator < count($VExploded); $iterator++) {
                    $VSubExploded = explode("#VATBLOCK_END#", $VExploded[$iterator]);
                    foreach ($VSubExploded as $Vpart) {
                        $VExplodedPdf[] = $Vpart;
                    }
                    $Vhighestpartid = $iterator * 2 - 1;
                    $VProductParts[$Vhighestpartid] = $VExplodedPdf[$Vhighestpartid];
                    $VExplodedPdf[$Vhighestpartid] = '';
                }
                if (count($Products["TOTAL"]["VATBLOCK"]) > 0) {
                    foreach ($Products["TOTAL"]["VATBLOCK"] as $keyW => $valueW) {
                        foreach ($VProductParts as $productpartid => $productparttext) {
                            if ($valueW["netto"] != 0) {
                                foreach ($valueW as $vColl => $vVal) {
                                    if (is_numeric($vVal)) $vVal = $this->x23($vVal);
                                    $productparttext = str_replace("$" . "VATBLOCK_" . strtoupper($vColl) . "$", $vVal, $productparttext);
                                }
                                $VExplodedPdf[$productpartid].= $productparttext;
                            }
                        }
                    }
                }
                $this->content = implode('', $VExplodedPdf);
            }
        }
        return $Products;
    }
    private function x35() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $this->replacements["$" . "MULTICOMPANY_COMPANYNAME" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_STREET" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_CITY" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_CODE" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_STATE" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_COUNTRY" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_PHONE" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_FAX" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_EMAIL" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_WEBSITE" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_LOGO" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_STAMP" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_BANKNAME" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_BANKACCOUNTNO" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_IBAN" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_SWIFT" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_REGISTRATIONNO" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_VATNO" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_TAXID" . "$"] = '';
        $this->replacements["$" . "MULTICOMPANY_ADDITIONALINFORMATIONS" . "$"] = '';
        if (getTabId('MultiCompany4you') && vtlib_isModuleActive('MultiCompany4you') && isset($this->focus->column_fields) && $this->focus->column_fields > 0) {
            require_once ('modules/MultiCompany4you/MultiCompany4youUtils.php');
            $roleid = getCompanyRole($this->focus->column_fields['assigned_user_id']);
            $res = $this->db->pquery("SELECT * FROM vtiger_multicompany4you WHERE role=? AND deleted=0", array($roleid));
            $row = $this->db->fetchByAssoc($res);
            foreach ($row as $key => $value) {
                switch ($key) {
                    case "logo":
                        continue(2);
                    break;
                    case "logoname":
                    case "stampname":
                        $key = substr($key, 0, -4);
                        $value = "<img src='test/logo/" . $value . "'>";
                    break;
                }
                $this->replacements["$" . "MULTICOMPANY_" . strtoupper($key) . "$"] = $value;
            }
            $this->x15();
        }
    }
    private function x36() {
        global $x0b, $x0c, $x0d, $x0e, $x0f, $x10, $x11, $x12, $x13, $x14, $x15, $x16, $x17, $x18, $x19, $x1a, $x1b, $x1c, $x1d, $x1e, $x1f, $x20, $x21, $x22, $x23, $x24, $x25, $x26, $x27, $x28, $x29, $x2a, $x2b, $x2c, $x2d;
        $this->replacements['$USERS_IMAGENAME$'] = $this->x1c($this->focus->column_fields["assigned_user_id"]);
        $this->replacements['$R_USERS_IMAGENAME$'] = $this->x1c($_SESSION["authenticated_user_id"]);
        switch ($this->module) {
            case "Contacts":
                $this->replacements['$CONTACTS_IMAGENAME$'] = $this->x1b($this->focus->id);
            break;
            case "Products":
                $this->replacements['$PRODUCTS_IMAGENAME$'] = $this->x1d($this->focus->id);
            break;
        }
    }
}
?>

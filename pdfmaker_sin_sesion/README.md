# PDF Maker conector

Archivos modificados para permitir el uso de PDFMaker y la generación de documentos dentro del CRM sin una sesión iniciada

## Installation
- Copiar el archivo `generar_pdf.php` a la raiz del CRM
- Copiar contenido de la carpeta `/modules/PDFMaker` a `modules/PDFMaker` del CRM

## Usage

> http://host/generar_pdf.php?module=PDFMaker&relmodule=MODULE&action=CreatePDFFromTemplate&record=IDRECORD&commontemplateid=IDTEMPLATE&language=es_mx
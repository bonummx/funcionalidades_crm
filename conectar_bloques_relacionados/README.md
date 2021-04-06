# Conectar Bloques Relacionados
Conecta registros al módulo padre al abrirlos desde un bloque relacionado en el CRM.

![bloque_relacionado](https://user-images.githubusercontent.com/80594356/113602030-b75a0680-9607-11eb-8f2b-aa5207d2df46.png)

## Usage
En las pantallas de Vista de Detalle y Vista de Edición está disponible un input (`<input type="hidden" name="rel_custom_module" value="">`) con los valores:
- `Default` cuando el módulo no está dado de alta y el registro se abrió desde un módulo.
- `Nombre Módulo` cuando el módulo esta dado de alta y el registro se abrió desde un módulo.
- `""` cuando el registro se abre fuera de un módulo.

## Customization

### Registrar Nuevo Módulo
Editar este bloque de código si desea dar de alta la funcionalidad en otros módulos.
`include\utils\ListViewUtils.php:2258`

```php
if ($_REQUEST['module'] == 'fideicomisos') {
	$rel_custom_module ='&rel_custom_module=fideicomisos';
}else {
	$rel_custom_module ='&rel_custom_module=Default';
}
$value = '<a class="rel_custom_module" target="'.$target.'" href="index.php?action=DetailView&module=' . $module . '&record=' . $entity_id . '&parenttab=' . $tabname . $rel_custom_module .'" id = ' . $count . '>' . textlength_check($temp_val) . '</a>';
```
### Crear Nuevo input
Para agregar un nuevo input disponible en la Vista de Detalle y Vista de Edición es necesario modificar cinco archivos:
1. Enviar un parámetro desde la Vista de Lista `include\utils\ListViewUtils.php:2263`

Editar la variable `$value` para agregar el nombre del parámetro adicional
```php
$value = '<a class="rel_custom_module" target="'.$target.'" href="index.php?action=DetailView&module=' . $module . '&record=' . $entity_id . '&parenttab=' . $tabname . $rel_custom_module .'" id = ' . $count . '>' . textlength_check($temp_val) . '</a>';
```

2. Crear variable Smarty `modules\Vtiger\DetailView.php:51`

Crear una nueva variable Smarty con esta sintaxis:
`$smarty->assign('REL_CUSTOM_MODULE', $_REQUEST['rel_custom_module']);` reemplazando con el nombre del nuevo parámetro

3. Enviar un parámetro desde el botón Editar `Smarty\templates\DetailView.tpl:146`

Agregar el nombre del parámetro en el atributo OnClick
```php
<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="crmbutton small edit" onclick="DetailView.rel_custom_module.value='{$REL_CUSTOM_MODULE}'; DetailView.return_module.value='{$MODULE}'; DetailView.return_action.value='DetailView'; DetailView.return_id.value='{$ID}';DetailView.module.value='{$MODULE}';submitFormForAction('DetailView','EditView');" type="button" name="Edit" value="&nbsp;{$APP.LBL_EDIT_BUTTON_LABEL}&nbsp;">&nbsp;
```

4. Recibir parámetro en la Vista de Detalle `Smarty\templates\DetailViewHidden.tpl`

Crear un nuevo input. Agregar el nombre del parámetro en el atributo `name` y en el atributo value esta sintaxis `{if isset($smarty.request.rel_custom_module)}{$smarty.request.rel_custom_module|@urlencode}{/if}`reemplazando con el nombre del nuevo parámetro

Ej.
```php
<input type="hidden" name="rel_custom_module" value="{if isset($smarty.request.rel_custom_module)}{$smarty.request.rel_custom_module|@urlencode}{/if}" />
```
5.  Recibir parámetro en la Vista de Edición `Smarty\templates\EditViewHidden.tpl`

Crear un nuevo input. Agregar el nombre del parámetro en el atributo `name` y en el atributo value esta sintaxis `{if isset($smarty.request.rel_custom_module)}{$smarty.request.rel_custom_module|@urlencode}{/if}` reemplazando con el nombre del nuevo parámetro

Ej.
```php
<input type="hidden" name="rel_custom_module" value="{if isset($smarty.request.rel_custom_module)}{$smarty.request.rel_custom_module|@urlencode}{/if}" />
```

# Bloques Relacionados
Conecta registros al módulo padre al abrirlos desde un bloque relacionado  en el CRM.

![bloque_relacionado](https://user-images.githubusercontent.com/80594356/113602030-b75a0680-9607-11eb-8f2b-aa5207d2df46.png)

## Usage
En las pantallas de Vista de Detalle y Vista de Edición está disponible un input (`<input type="hidden" name="rel_custom_module" value="">`) con los valores:
- `Default` cuando el módulo no está dado de alta y el registro se abrió desde un módulo.
- `Nombre Módulo` cuando el módulo esta dado de alta y el registro se abrió desde un módulo.
- `""` cuando el registro se abre fuera de un módulo.

## Customization

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

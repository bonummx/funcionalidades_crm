# Agregar Botones Personalizados
![boton_personalizado](https://user-images.githubusercontent.com/80594356/113789158-39c7f080-9704-11eb-8165-2d47db4cf9d8.png)

En el archivo `Smarty\templates_c\208d407fb9e6185238b5ba872762c26ef647fb9a_0.file.ListViewButtons.tpl.php:53` se pueden agregar nuevos botones personalizados.

## Usage

### Agregar botón 'Exportar' en nuevo módulo
Editar este bloque de código si se necesita agregar el botón de Exportar en un nuevo módulo
```php
if ($_smarty_tpl->tpl_vars['MODULE']->value == 'instruccionespa' || $_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos') {
  <input id="exportar_registros" class="crmbutton small cancel" type="button" value="Exportar" style="display:none;"/>
}
```

### Agregar nuevo botón
Editar este bloque para agregar un nuevo botón y módulo
```php
if ($_smarty_tpl->tpl_vars['MODULE']->value == 'fideicomisos') {
    <input id="saldos_diarios" class="crmbutton small create" type="button" value="Carga de Saldos Diarios" style="display:none;"/>
	}
```

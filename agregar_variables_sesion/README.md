# Agregar Variables de Sesión
En el archivo `Smarty_setup:51` se pueden agregar las variables de sesión.

Agregar una nueva linea con esta sintaxis

```php
		coreBOS_Session::set('nombre_variable', $valor_variable);
```

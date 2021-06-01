# Enviar Correo
Clase de configuración para enviar un correo a través del paquete Mail de PEAR

## Installation
Asegúrese de tener PEAR :: Mail instalado en su máquina, si no es así, instálelo
```
pear install Mail
```
Cambiar la línea `7:require '/usr/share/pear/Mail.php';` por la ruta de su instalación

## Customization
### Servidor SMTP
Modificar para configurar el servidor de correo a usar
`correo.php:24-27`
```php
   $host = "smtp.server";
   $port = "587";
   $username = "test@test.com";
   $password = "password";
```
### Tipo de contenido
`correo.php:31`
Para enviar un mensaje con formato HTML mantener
```php
'Content-Type' => 'text/html; charset=utf-8'
```

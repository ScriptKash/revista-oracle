# Título del proyecto

Sistema de revistas con conexión homogénea de Oracle a Oracle.

## Empezando

Se desea crear una base de datos que contenga información sobre las revistas a las que tú
estás suscrito o compras habitualmente. De cada revista, se pide su título, el ISSN (un
código que identifica a la publicación), el número y el año de publicación. También se
desea almacenar información de cada uno de los artículos publicados: el título, la página
de inicio y la página de fin. Se asume que no hay dos artículos con el mismo título.
Cada artículo puede estar escrito por varios autores, de quienes interesa conocer su
nombre, una dirección de correo electrónico y su adscripción, así como un número que
indique la posición en la que aparece en cada artículo: un 1 si es el primer autor, un 2 si
aparece en segundo lugar, etc.

* Diseñar una base de datos en ORACLE que se ajuste al requerimiento arriba
expuesto, identificando tablas, atributos, claves principales y relaciones
existentes.
* Debe diseñar una Replicación Bases de datos homogénea entre Oracle y Oracle.
* Diseñar vistas, procedimientos almacenados, etc.
* Debe contemplar control de transacciones (rollback tran).
* Debe definir un esquema de respaldo.
* Debe diseñar un plan de mantenimiento de bases de datos.

### Prerrequisitos

Para entender este sistema debes tener en cuenta lo siguiente:

```
Conocimientos de PHP, HTML y CSS
Conocimientos de Ajax
Conocer el patrón de diseño MVC
ORACLE OCI8
PHP PDO
```

## Construido con

* [Jquery](https://jquery.com/) - Librería utilizada para algunas funcionalidades y Ajax.
* [PHP PDO](https://www.php.net/manual/es/book.pdo.php) y [PHP OCI](https://www.php.net/manual/es/book.oci8.php) - Para las respectivas conexiones con Oracle.


## Autores

* **Fernando Briceño** - *Trabajo inicial* - [ScriptKash](https://github.com/ScriptKash)
* **Emmanuel Ramirez** - *Trabajo inicial* - [LaDanta](https://github.com/LaDanta)


## Licencia

Este proyecto está bajo la licencia MIT.

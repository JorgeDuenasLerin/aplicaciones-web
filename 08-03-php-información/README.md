# Objetivos

Procesar formularios, continuación de la anterior práctica.

## Referencia

Queremos tener un sistema para guardar información, para ello necesitamos más fichero php:

- form.php -> Recoge información
- procesa.php -> guarda en un fichero y muestra un mensaje
- listado.php -> lee el fichero y muestra los datos

```

   form.php ---> procesa.php
                    |
                    v
                 listado.php

```

Tareas para mejorar el sistema:

- Para que la aplicación sea navegable necesitamos ir desde el listado al formulario.
  - Crea un enlace para añadir en listado (con un más) y que vaya al form.php
- Una vez que la información es guardada ¿por qué el usuario tiene que pinchar en el listado?
  - Investiga la etiqueta HTML meta refresh que debe ir en el head para que redirija automáticamente

## Guardar información y mostrar información

Una vez conseguida una navegación entre las páginas, vamos a analizar cómo se guarda la información y cómo se muestra.

### Guardado

En el fichero procesar las líneas interesantes son:
```
$actual .= $_POST['nombre']." ";
$actual .= $_POST['favorito']."\n";
```

Cosas interesantes:
- ```$actual``` tiene la información del fichero
- cuando se escribe un punto ```.``` se pegan las informaciones.
- El caracter "\n" representa un intro en el fichero

Guarda varios datos y muestra el contenido del fichero datos.txt

### Mostrado

Para mostrar la información debemos centrarnos en el fichero listado.php

```
        echo $data[0] . " " . $data[1] . "<br>";
```

En la línea anterior vemos como desde ```php``` estamos mostrando las columnas del fichero separadas por ```" "``` y al final de la línea escribimos un ```<br>```.

De esta forma conseguimos mostrar un listado


## Retos

Ahora trabajaremos tocando este código, rompiéndolo y aprendiendo a través de retos:

- Reto 1:
  - Crea un nuevo campo de datos para mostrar la edad
- Reto 2:
  - Cambia el color de la línea del listado por el color elegido
- Reto 3:
  - Crea un campo para guardar el signo del zodiaco
- Reto 4:
  - Busca en internet imágenes pequeñas para cada signo y en vez de mostrar el signo muestra la imagen.


## Retos master...

Solo para valientes:
- ¿Podrías anotar un símbolo para los mayores de edad? edad mayor a 18 años. Necesitas investigar en php la sentencia ```if```
- ¿Podrías sacar la información del listado en una tabla?

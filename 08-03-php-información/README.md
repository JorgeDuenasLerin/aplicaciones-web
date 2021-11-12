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

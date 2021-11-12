# Objetivos

Introducción a los fundamentos de php.
Introducción a las sentencias iterativas.

## Referencia

[Manual de php](apuntesPHP.pdf)

## Generación de span de colores

Generar un color aleatorio

```
function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}
```

En HTML

```
<span style="background-color:<?=rand_color()?>"> </span>
```

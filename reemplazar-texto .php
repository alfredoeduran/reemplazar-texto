<?php
/*
Plugin Name: Reemplazar Texto
Description: Reemplaza la palabra "noche" por "persona" en todo el sitio.
Version: 1.0
Author: AlfredDuran
*/
function reemplazar_texto_noche_persona($content) {
    $nuevo_contenido = str_replace('noche', 'persona', $content);
    return $nuevo_contenido;
}
add_filter('the_content', 'reemplazar_texto_noche_persona');

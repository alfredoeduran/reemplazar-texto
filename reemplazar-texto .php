<?php
/*
Plugin Name: Reemplazar Texto
Description: Reemplaza la palabra "noche" por "persona" y "por noche" por "por persona" en todo el sitio.
Version: 1.1
Author: Tu Nombre
*/

function reemplazar_texto_noche_persona($content) {
    // Reemplazar "noche" por "persona"
    $nuevo_contenido = str_replace('noche', 'persona', $content);

    // Reemplazar "por noche" por "por persona"
    $nuevo_contenido = str_replace('por noche', 'por persona', $nuevo_contenido);

    return $nuevo_contenido;
}
add_filter('the_content', 'reemplazar_texto_noche_persona');

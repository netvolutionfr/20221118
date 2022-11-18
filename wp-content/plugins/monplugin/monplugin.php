<?php
/*
 * Plugin Name: Mon Extension
 * Plugin version: 1.0
 */
// creer un shortcode
add_shortcode('monshortcode', 'monshortcode');
function monshortcode($atts, $content = null) {
    // code du shortcode
    return liste();
}

function datedujour() {
    return date('d/m/Y');
}

function bonjour_bonsoir() {
    $heure = date('H');
    if ($heure < 17) {
        return 'Bonjour, il est ' . $heure . 'h';
    } else {
        return 'Bonsoir, il est ' . $heure . 'h';
    }
}

function liste() {
    $liste = '<ul>';
    for ($i = 0; $i < 10; $i++) {
        $liste .= '<li>' . $i . '</li>';
    }
    $liste .= '</ul>';
    return $liste;
}
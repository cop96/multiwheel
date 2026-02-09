<?php
/**
 * WordPress Compatibility Layer
 * This file provides dummy functions for WordPress calls used in this project
 * so it can run on a standard PHP server without WordPress installed.
 */

if (!function_exists('wp_title')) {
    function wp_title($sep = '&raquo;', $display = true, $seplocation = '') {
        $title = "Multiwheel";
        if ($display) {
            echo $title . " " . $sep . " ";
        } else {
            return $title;
        }
    }
}

// Add other missing WP functions here if needed

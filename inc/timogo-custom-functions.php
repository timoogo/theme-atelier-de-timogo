<?php
function atelierdetimogo_style() {
    wp_enqueue_style( 'bs-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bs-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' );


}
add_action( 'wp_enqueue_style', 'wp_enqueue_scripts' );

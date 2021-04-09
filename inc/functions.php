<?php 

function jevar_dump($mavariable) {
    echo "<br><small class=\"bg-info\">... var_dump </small><pre class=\"alert alert-info w-75\">";
    var_dump( $mavariable );
    echo "</pre>";
}

function jeprint_r($mavariable){
    echo "<small class=\"bg-warning p-2\">print_r :</small><pre class=\"alert alert-primary w-75\">";
    print_r($mavariable);
    echo "</pre>";
}
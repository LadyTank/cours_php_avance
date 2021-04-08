<?php 
function jevar_dump($mavariable) {
    echo "<br><small class=\"bg-info\">... var_dump </small><pre class=\"alert alert-info w-75\">";
    var_dump( $mavariable );
    echo "</pre>";
}
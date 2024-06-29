<?php

function deb($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function redirect(string $url) {
    $id = filter_var( $_GET['id'], FILTER_VALIDATE_INT);

    if(!$id) {
        header("Location: {$url}");
    }
    return $id;
}
<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function view($filename, $data = []){
    extract($data);
    require "view/{$filename}.view.php";
}

function redirect($uri) {
    header("Location: {$uri}");
}
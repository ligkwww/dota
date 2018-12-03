<?php
function autoInclude($namespace){
    $namespace = str_replace('\\' , '/',$namespace);
    $filename = $namespace.'.php';
    include $filename;
}

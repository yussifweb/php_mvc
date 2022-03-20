<?php

function get($name, $def = '')
{
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def;
}

?>

<!-- get(name: 'color', def: 'white'); -->
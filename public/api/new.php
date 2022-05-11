<?php

$path = dirname(__DIR__,2) . '/public/xml/';
$files = array_diff(preg_grep('~\.(xsd)$~', scandir($path)), array('.', '..'));

foreach ($files as $file) {
    echo $file . "\n";
}

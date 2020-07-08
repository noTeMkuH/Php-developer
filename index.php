<?php

// Печатает год в STDOUT
echo date('Y');
echo "\n";
echo "Hello, world!\n<br>";
echo "<br><b>SERVER data:</b><br>";
foreach($_SERVER as $item => $value) {
    echo "{$item} = {$value}\n<br>";
}
echo "<br><b>GET data:</b><br>";
foreach($_GET as $item => $value) {
    echo "{$item} = {$value}\n<br>";
}

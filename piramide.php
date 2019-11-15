<?php
echo ("Hoeveel stapels wil je hebben?" . PHP_EOL);
$line = readline();
for ($i = 1; $i <= $line; $i++) {
    for ($s = 1; $s <= $i; $s++) {
        echo " * ";
    }
    echo PHP_EOL;
}
?>
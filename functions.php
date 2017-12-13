<?php
const BR = '<br />';

echo multiply (5, 6);

function multiply($one, $two){
    echo $one * $two;
}

echo BR;

multiply(5, 10);

function print_info(array $info) {
    print_r($info);
}



?>

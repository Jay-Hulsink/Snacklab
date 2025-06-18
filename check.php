<?php

function checkIfIsSameString(string $input1, string $input2)
{
    if ($input1 == $input2) {
        echo "it is the same";
    } else {
        echo "not the same";
    }
}
checkIfIsSameString($argv[1], $argv[2]);
?>
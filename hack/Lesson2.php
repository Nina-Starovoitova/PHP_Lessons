<?php
function simpleArraySum($ar)
{
    $sum = 0;
    foreach ($ar as $i) {
        $sum += $i;
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$ar_count = intval(trim(fgets(STDIN)));
$ar_temp = rtrim(fgets(STDIN));
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = simpleArraySum($ar);
fwrite($fptr, $result . "\n");
fclose($fptr);


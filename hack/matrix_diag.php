<?php
function diagonalDifference($arr)
{
    $arr_size = count($arr) - 1;
    $main_diag = 0;
    $side_diag = 0;
    foreach ($arr as $i => $row) {
        $side_diag += $row [$arr_size--];
        $main_diag += $row [$i];
    }
    $result = $main_diag - $side_diag;

    return abs($result);
}

$testMatrix = [

    [11,2,4],
    [4,5,6],
    [10,8,-12]
];

assert(15,diagonalDifference($testMatrix));
// d0 = 11,22,33,44
// d02 = 41,32,23,14
$testMatrix = [

    [11,2,4,6],
    [4,5,6,9],
    [10,8,-12,20],
    [4,5,6,9,],
];
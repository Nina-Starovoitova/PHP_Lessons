<?php
function compareTriplets($a, $b)
{
    $length_a = count($a);
    $length_b = count($b);
    $p1 = 0;
    $p2 = 0;
    for ($i = 0; $i < $length_a; $i++) {
        if ($a[$i] > $b[$i]) {
            $p1 ++;
        }
        if ($a[$i] < $b[$i]) {
            $p2 ++;
        }
    }
    return [$p1, $p2];
}
$a=[5,10,15,20];
$b=[6,12,3,9];
$result = compareTriplets($a, $b);
echo"Result of the competition: \n";
print_r($result);

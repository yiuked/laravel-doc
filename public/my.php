<?php
function msort($array) {
    $_count = count($array);
    for($i = 0; $i < $_count; $i++) {
        for ($j = 0; $j < $_count; $j++) {
            if ($array[$j] > $array[$i]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

function fsort(&$arr, $left, $right) {
    if ($left < $right) {
        $left_val = $arr[$left];
        $i = $left;
        $j = $right;
        while ($i != $j) {
            while ($j > $i) {
                if ($arr[$j] <= $left_val) {
                    $arr[$i] = $arr[$j];
                    break;
                }
                $j--;
            }
            while ($j > $i) {
                if ($arr[$i] > $left_val) {
                    $arr[$j] = $arr[$i];
                    break;
                }
                $i++;
            }
        }
        $arr[$i] = $left_val;
        fsort($arr, $left, $i - 1);
        fsort($arr, $i + 1, $right);
    }
}

$arr = [3,6,1,8,6,4,6,90,7,1,5,67,9];
$result = msort($arr);
$result2 = fsort($arr, 0, 12);
var_dump($result);
var_dump($arr);

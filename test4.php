<?php
$arr=[77,5,5,22,13,55,97,4,796,1,0,9];
for ($i = 0; $i < count($arr) - 1; $i++) {
    for ($j = 0; $j < count($arr) -$i - 1; $j++) {
        if ($arr[$j] > $arr[$j+1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
  
}
print_r($arr);
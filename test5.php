<?php
//交集
$arr = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$arr2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr2 as $val2) {
    if (in_array($val2, $arr)) {
        $arrc[] = $val2;
    }
}
print_r($arrc);
//差集
foreach ($arr as $val) {
    if (!in_array($val, $arrc)) {
        $arrd[] = $val;
    }
}
foreach ($arr2 as $val2) {
    if (!in_array($val2, $arrc)) {
        $arrd[] = $val2;
    }
}
sort($arrd);
print_r($arrd);
//聯集
$arre=$arrc;
foreach($arrd as $vald){
    $arre[]=$vald;
}
echo "<br>";
sort($arre);
print_r($arre);


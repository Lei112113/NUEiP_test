<?php
$arr=[0,1,2,3,4,5,6,7,8,9];
$odd=0;
$even=0;
$odd_arr=[];
$even_arr=[];
foreach ($arr as $key => $val) {
  if($val%2==1){
    $odd+=$val;
    $odd_arr[]=$val;
  }else{
    $even+=$val;
    $even_arr[]=$val;
  }
}
echo $odd;
echo $even;
print_r($even_arr);
print_r($odd_arr);
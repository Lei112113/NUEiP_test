<?php
$str="人易科技:上 機 測 驗 - 演算法";
$str=str_replace(":","：",$str);
echo $str; 
$arr=explode("-",$str);
$arr[0]=str_replace(" ","",$arr[0]);
$new_str=join(" -",$arr);
echo $new_str;
$new_str=explode("：",$new_str);
$new_str=explode(" - ",$new_str[1]);
echo $new_str[0];
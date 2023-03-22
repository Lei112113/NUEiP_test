<?php
function twoSum($nums, $target) {
    $map = array();
    for($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i]; 
        if(array_key_exists($complement, $map)) {
            return array($map[$complement], $i);
        }
        $map[$nums[$i]] = $i; 
    }
}


<?php
function reverseArray(array $arr){
    for ($i=0, $j=count($arr); $i!=$j; $i++, $j--){
        list($arr[$i], $arr[$j-1]) = array($arr[$j-1], $arr[$i]);
    }
    return $arr;
}
function quickSort(array $arr, $type) {
    $count= count($arr);
    if ($count <= 1) {
        return $arr;
    }
 
    $first_val = $arr[0];
    $left_arr = array();
    $right_arr = array();
 
    for ($i = 1; $i < $count; $i++) {
        switch($type){
            case 1:
                if ($arr[$i] <= $first_val) {
                    $left_arr[] = $arr[$i];
                } else {
                    $right_arr[] = $arr[$i];
                }
                break;
            case 2:
                if ($arr[$i] <= $first_val) {
                    $right_arr[] = $arr[$i];
                } else {
                    $left_arr[] = $arr[$i];
                }
                break;
        }
        
    }
 
    $left_arr = quickSort($left_arr, $type);
    $right_arr = quickSort($right_arr, $type);
 
    return array_merge($left_arr, array($first_val), $right_arr);
}
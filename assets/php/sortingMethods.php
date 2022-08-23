<?php
function selectSort($arr, $type) {
    for($i=0, $j=count($arr); $i<$j; $i++) {
        $min = $i;
        $temp = $arr[$i];
        for($k=$i+1; $k<$j; $k++) {
            switch($type){
                case 1: 
                    if($temp > $arr[$k]) {
                        $min = $k;
                        $temp = $arr[$k];
                    }
                    break;
                case 2:
                    if($temp < $arr[$k]) {
                        $min = $k;
                        $temp = $arr[$k];
                    }
                    break;
            }
        } 
        if($min != $i) list($arr[$min], $arr[$i]) = array($arr[$i], $arr[$min]);
    }
    return $arr;
}
function reverseArray($arr){
    for ($i=0, $j=count($arr); $i!=$j; $i++, $j--){
        list($arr[$i], $arr[$j-1]) = array($arr[$j-1], $arr[$i]);
    }
    return $arr;
}
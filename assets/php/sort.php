<?php
require "sortingMethods.php";

$data = $_POST['data'];
$type = $_POST['sorting'];

if ($type != 3){
    echo json_encode(selectSort($data, $type));
}
else{
    echo json_encode(reverseArray($data));
}
// sort($data);
// echo json_encode($data);
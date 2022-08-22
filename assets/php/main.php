<?php
$filePath = $_POST['path'];
$file = file_get_contents($filePath, true);
$words = explode(", ", $file);
echo json_encode($words);
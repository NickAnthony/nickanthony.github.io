<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$url = 'http://www.gotuftsjumbos.com/sports/fball/index';
$output = file_get_contents($url); 
echo $output;
?>
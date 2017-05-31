<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$url = 'http://www.gotuftsjumbos.com/sports/fball/index';
$ch =  curl_init($url.'?'.$_SERVER['QUERY_STRING']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;
?>
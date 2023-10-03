<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if(isset($_POST)){
    $data = file_get_contents("php://input");
    $dice = json_decode($data,true);
    $num = preg_replace('/\D/', '', $dice["dicetype"]);
    $repeat = $dice["launchnum"];
    $result = array();
    for ($index = 0; $index < $repeat; $index++) {
        array_push($result, rand(1,$num));
    }
    echo json_encode($result);
    //echo $dice["dicetype"]." ".$dice["launchnum"];
}
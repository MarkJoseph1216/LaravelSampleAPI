<?php

use App\Constant;
use App\JumpCodeModel;

//Author: Mark Joseph, Date: 03/28/2022
function getBaseURL($domainSwitch, $apiStatus){
    return 'http://'.(getURL($domainSwitch)).'/jeesite/f/guestbook/'.($apiStatus);
}

function getURL($domainSwitch) {
    return ($domainSwitch == 1 ? Constant::DOMAIN2 : Constant::DOMAIN1);
}

function getURL2($domainSwitch){
    return ($domainSwitch == 1 ? Constant::DOMAIN2_2 : Constant::DOMAIN1_2);
}

//Parsing Response from request on jumpcode.
function parseResponse($data) {
    $res = new JumpCodeModel();

    $res->httpCode = json_decode($data)->httpCode;

    //Parsing JSON Array on the response.
    $resultList = json_decode($data, true)['response'];
    $res->response = isset($resultList[0]['list']) == false ? null : $resultList[0]['list'];
    return $res;
}

?>
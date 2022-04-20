<?php

use App\Constant;
use App\JumpCodeModel;

//Author: Mark Joseph, Date: 03/28/2022
function getBaseURL($domainSwitch, $apiStatus, $retryDomain){
    return 'http://'.(getDomain($domainSwitch, $retryDomain)).'/jeesite/f/guestbook/'.($apiStatus);
}

function getDomain($domainType, $retryDomain) {

    switch($domainType) {
        case 1:
            return getURL($retryDomain);
        break;

        case 2:
            return getURL2($retryDomain);
        break;
            
        case 3:
            return getTRXURL($retryDomain);
        break;
    }
}

function getURL($domainSwitch) {
    return ($domainSwitch == 1 ? Constant::DOMAIN1 : Constant::DOMAIN1_2);
}

function getURL2($domainSwitch){
    return ($domainSwitch == 1 ? Constant::DOMAIN2 : Constant::DOMAIN2_2);
}

function getTRXURL($domainSwitch){
    return ($domainSwitch == 1 ? Constant::DOMAIN_TRX : Constant::DOMAIN_TRX_2);
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
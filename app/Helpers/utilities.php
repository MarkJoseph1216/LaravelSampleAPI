<?php

use App\Constant;
use App\JumpCodeModel;

//Author: Mark Joseph, Date: 03/28/2022
function getBaseURL($domainSwitch, $apiStatus, $retryDomain){
    return 'http://'.(getDomain($domainSwitch, $retryDomain)).'/jeesite/f/guestbook/'.($apiStatus);
}

function getDomain($domainType, $retryDomain) {
    // return ($domainType == 1 ? getURL($retryDomain) : getURL2($retryDomain));

    $domainURL = '';

    if($domainType == 1) {
        $domainURL = getURL($retryDomain);
    } else if($domainType == 2) {
        $domainURL = getURL2($retryDomain);
    } else if($domainType == 3) {
        $domainURL = getURL3($retryDomain);
    }

    return $domainURL;
}

function getURL($domainSwitch) {
    return ($domainSwitch == 1 ? Constant::DOMAIN1 : Constant::DOMAIN1_2);
}

function getURL2($domainSwitch){
    return ($domainSwitch == 1 ? Constant::DOMAIN2 : Constant::DOMAIN2_2);
}

function getURL3($domainSwitch){
    return ($domainSwitch == 1 ? Constant::DOMAIN3 : Constant::DOMAIN3_3);
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
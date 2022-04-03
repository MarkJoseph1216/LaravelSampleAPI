<?php

//Author: Mark Joseph, Date: 03/28/2022
use GuzzleHttp\Client;

//Requesting to jumpcode backend.
function sendRequest($androidName, $domainSwitch, $apiStatus) {
    $client = new Client();

    $request = $client->request('POST', getBaseURL($domainSwitch ?: 1, $apiStatus), [  
        'form_params' => [
            'androidname' => $androidName
        ]
    ]);

    return $request;
}

?>
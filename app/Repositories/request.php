<?php

//Author: Mark Joseph, Date: 03/28/2022
use GuzzleHttp\Client;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

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

function getFirebaseDB(){
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/firebase-credentials.json');

    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://daku-44050-default-rtdb.firebaseio.com/')
        ->create();

    return $firebase->getDatabase();
}

?>
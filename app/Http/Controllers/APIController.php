<?php

namespace App\Http\Controllers;

use App\DetailsModel;
use App\JumpCodeModel;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function create(Request $request) {

        $details = new DetailsModel();
        $details->firstname = $request->input('firstname');
        $details->lastname = $request->input('lastname');
        $details->birthday = $request->input('birthday');
        $details->emailadd = $request->input('emailadd');
        $details->password = $request->input('password');
        $details->phoneno = $request->input('phoneno');
        $details->city = $request->input('city');
        $details->cardno = $request->input('cardno');
        $details->terms = $request->input('terms');
        $details->save();

        return response()->json([
            'message' => 'success',
            'data' => $details
        ], 200);
    }

    // Requesting content data from firebase, Author: Mark Joseph, Date: 04/03/2022
    // Google FireStore function.
    public function requestFireStoreData(Request $request) {
        $data = app('firebase.firestore')->database()->collection($request->databaseName);

        $documents = $data->documents();
        $arrayObject = array();

        foreach ($documents as $document) {
            if ($document->exists()) {
                array_push($arrayObject, $document->data());
            }
        }

        $resultArray = json_decode(json_encode($arrayObject, JSON_PRETTY_PRINT));
        return response()->json(['contents' => $resultArray]);
    }

    // Realtime Database function, Author: Mark Joseph, Date: 04/04/2022
    public function requestDatabaseData(Request $request){
        
        // Getting the firebase reference.
        $fbRef = getFirebaseDB()->getReference($request->databaseName)->getChild($request->filterType);

        $snapshot = $fbRef->getSnapshot()->getvalue();
        $arrayObject = array();

        //This will be used for item count pagination.
        $listCount = $request->itemCount;

        foreach ((array) $snapshot as $document) {
            if ($document != null) {
                array_push($arrayObject, $document);
                if($request->itemCount != null) {array_splice($arrayObject, $listCount);}
            }
        }

        // Checking the data isExisting or not.
        $resultArray = $snapshot == null ? "No content available for this title."
        : json_decode(json_encode($arrayObject, JSON_PRETTY_PRINT));

        // Returning JSON response with status code.
        return response()->json(['contents' => $resultArray], $snapshot == null ? 404 : 200);
    }

    //Delete Method
    public function delete($id) {
        $details = DetailsModel::findOrFail($id);
        if ($details) {
            $details->delete();
            return response()->json(['message' => 'Successfully Deleted!']);
        } else {
            return response()->json(['message' => 'id not exists']);
        }
    }

    //Author: Mark Joseph, Date: 03/26/2022
    public function requestGuestBook(Request $request)
    {

        //Request Parameters.
        $androidName = $request->input('androidname');
        $domainSwitch = $request->input('domainswitch');
        $apiStatus = $request->input('apistatus');
        $retryDomain = $request->input('retryDomain');

        $res = sendRequest($androidName, $domainSwitch, $apiStatus, $retryDomain);

        //Return data and code from jumpcode api.
        $responseData = $res->getBody()->getContents();
        $responseCode = $res->getStatusCode();

        //Returning of the response.
        return response()->json(parseResponse($responseData), $responseCode);
    }
}

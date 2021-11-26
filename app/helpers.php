<?php
	
	use App\Models\Currency;
    use App\Models\Unit;
    use App\Models\Vendor;

	function sendResponse($result, $message){
    	
    	$response = [
      	'status' => true,
         'message' => $message,
         'data'    => $result,
     	];

     	return response()->json($response);
 	}    

 	function sendError($error, $errorMessages = [], $code = 404){
    	
    	$response = [
         'status' => false,
         'message' => $error,
     	];

     	if(!empty($errorMessages)){
         $response['data'] = $errorMessages;
     	}

     	return response()->json($response);
 	}

 	function getCurrency(){
 		$currency = Currency::all();

 		return $currency;
 	}

    function getUnit(){
        $units = Unit::all();

        return $units;
    }

    function getVendor(){
        $vendors = Vendor::all();

        return $vendors;
    }
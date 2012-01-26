<?php


// specify the REST web service to interact with

$url = 'http://localhost/sugar/v2/rest.php';


// Open a curl session for making the call

$curl = curl_init($url);


// Tell curl to use HTTP POST

curl_setopt($curl, CURLOPT_POST, true);


// Tell curl not to return headers, but do return the response

curl_setopt($curl, CURLOPT_HEADER, false);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


// Set the POST arguments to pass to the Sugar server

$parameters = array(

    'user_name' => 'user',

    'password' => 'password',

    );

$json = json_encode($parameters);

$postArgs = 'method=login&input_type=json&response_type=json&rest_data=' . $json;

curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);


// Make the REST call, returning the result

$response = curl_exec($session);


// Close the connection

curl_close($session); 


// Convert the result from JSON format to a PHP array

$result = json_decode($response);


// Echo out the session id

echo $result['id'];

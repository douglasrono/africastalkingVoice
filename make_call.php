<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username = "MyAppUsername";
$apikey   = "MyAppAPIKey";

// Initialize the SDK
$AT       = new AfricasTalking($username, $apiKey);

// Get the voice service
$voice    = $AT->voice();

// Set your Africa's Talking phone number in international format
$from     = "+254711082XXX";

// Set the numbers you want to call to in a comma-separated list
$to       = "+254711XXXYYY,+254733YYYZZZ";

try {
    // Make the call
    $results = $voice->call([
        'from' => $from,
        'to'   => $to
    ]);

    print_r($results);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}


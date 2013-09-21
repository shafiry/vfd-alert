<?php

	/* Send an SMS to all volunteers
	 * on Dispatcher's list
	 */
	require "Services/Twilio.php";

	$AccountSid = "AC26eaf500ebb246cefb61e96834aba585";
        $AuthToken = "37529e67f84db998192627ca8a7eb219";

	$client = new Services_Twilio($AccountSid, $AuthToken);

	$people = array("+13474186759" => "Yuval"); // Change to take in from SQL

	foreach ($people as $number => $name) {
 
        	$sms = $client->account->messages->create("YYY-YYY-YYYY", $number, "Need assistance at $linkablemap for #description");
 
        // Display a confirmation message on the screen
        echo "Sent message to $name";
    }
?>

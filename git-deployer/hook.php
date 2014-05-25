<?php

define('LOG_WEBHOOK', true);

// Check if payload is set
if ( $_POST['payload'] ) 
{

 	// Create object from JSON
	$payload = json_decode($_POST['payload']);

	// Determine wherever the JSON object was decoded
	if(json_last_error() == JSON_ERROR_NONE)
	{

		// If logging has been enabled, log current payload information
		if( LOG_WEBHOOK )
		{
			$input = print_r($payload, TRUE);
			file_put_contents('logs/git_webhook.log', $input, FILE_APPEND);
		}

		// Execute shell script that handles the pull action
		exec("../pull.sh"); 
	}

}
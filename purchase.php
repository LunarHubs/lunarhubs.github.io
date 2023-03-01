<?php

// Replace with your webhook URL
$webhook_url = 'https://example.com/webhook';

// Get the player name from the text input field
$player_name = $_POST['player_name'];

// Replace with the command you want to execute
$command = '/execute as ' . $player_name . ' run give ' . $player_name . ' minecraft:diamond 64';

// Create the data to send in the POST request
$data = array('command' => $command);

// Create the options for the POST request
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

// Send the POST request to the webhook URL
$context  = stream_context_create($options);
$result = file_get_contents($webhook_url, false, $context);

// Output the result of the POST request
echo $result;

?>

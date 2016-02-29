<?php
// JSON generated with http://www.json-generator.com/
$data = get_JSON('data.json');

var_dump($data);

// Open and read JSON from file
function get_JSON($fileString) {
	$get_file = $fileString; // Get the file
	$handle_file = fopen($get_file, "r"); // Open the file
	$contents_file = fread($handle_file, filesize($get_file)); // Read the file
	fclose($handle_file); // Close the file
	$content_from_file = json_decode($contents_file, true); // Decode JSON data

	return $content_from_file; // Return JSON data as a PHP array
}
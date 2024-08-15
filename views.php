<?php
// views.php

// File to store the count
$file = 'views.txt';

// Check if file exists, if not create it with a default count of 0
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Read the current count
$count = file_get_contents($file);

// Increment the count
$count++;

// Save the new count
file_put_contents($file, $count);

// Return the updated count as JSON
echo json_encode(["count" => $count]);
?>

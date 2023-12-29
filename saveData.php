<?php
// Check if the form data is set
if(isset($_POST['name']) && isset($_POST['order'])) {
    // File where data will be saved
    $file = 'data.csv';

    // Get the current date and time
    $currentDateTime = date('Y-m-d H:i:s');

    // Sanitize input to prevent security issues
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $order = filter_var($_POST['order'], FILTER_SANITIZE_STRING);

    // Format data as CSV
    $data = "{$currentDateTime},{$name},{$order}\n";

    // Write data to the file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect or indicate success
    echo "Order Submitted Successfully";
}
?>

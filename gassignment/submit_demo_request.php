<?php
// Get the form data
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$service = $_POST['service'];

// Create a string with the form data
$formData = "Name: $name\nAge: $age\nEmail: $email\nService: $service\n\n";

// Define the file path
$filePath = "demo_requests.txt";

// Open the file in append mode and write the form data
$file = fopen($filePath, 'a');
if ($file) {
    fwrite($file, $formData);
    fclose($file);
    echo "<script>alert('Your request has been submitted!');</script>";
} else {
    echo "<script>alert('Error: Unable to submit your request. Please try again later.');</script>";
}
?>

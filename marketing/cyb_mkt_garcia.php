<?php
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$database = "marketing"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function combineNames($fname, $mname, $lname)
{
    // Combine the names
    $full_name = $fname . " " . $mname . " " . $lname;

    // Return the combined name
    return $full_name;
}

// Retrieve form data
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$product = $_POST['product'];
$payment= $_POST['payment'];
$paying = $_POST['paying'];
$street = $_POST['street'];
$postal = $_POST['postal'];
$region = $_POST['region'];

// Combine the names
$full_name = combineNames($fname, $mname, $lname);

// Prepare the INSERT statement
$sql = "INSERT INTO items (full_name, email, product, payment, paying, street, postal, region) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $full_name, $email, $product, $payment, $paying, $street, $postal, $region);

// Execute the statement
if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
<?php

$servername = "localhost";
$username = "root";
$password = ""; // default WAMP setup has an empty password
$dbname = "library_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    echo "Error: " .  $_POST["name"];
    $name = $_POST["name"];
    $contact_no = $_POST["contact_no"];
    $index_no = $_POST["index_no"];
    $payment_slip_url = $_POST["payment_slip_url"];

    $stmt = $conn->prepare("INSERT INTO members (name, contact_no,index_no,payment_slip_url) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name,$contact_no,$index_no,$payment_slip_url); 
    if ($stmt->execute()) { 
           $message = "Member record saved successfully!!"; 
            echo "<script type='text/javascript'>alert('$message');</script>";
         //   header('Location:memberform.html', true, 301); 
         header('Location:member_list.php', true, 301); 
            exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>
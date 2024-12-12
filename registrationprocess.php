<?php

require './classes/DBConnector.php';

use classes\DBConnector;

$dbcon = new DBConnector();


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = md5($_POST["password"]);
$email = $_POST["email"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location:registration.php?error=2");
} else {
    $sanitize_email = filter_var($email, FILTER_SANITIZE_EMAIL);
}
$phoneno = $_POST["phoneno"];
$dob = $_POST["dob"];
$age = $_POST["age"];
$usertype = $_POST["usertype"];


if (isset($_POST["firstname"], $_POST["lastname"], $_POST["username"], $_POST["password"], $_POST["email"], $_POST["phoneno"], $_POST["dob"], $_POST["age"], $_POST["usertype"])) {
    if (!empty($_POST["firstname"] && $_POST["lastname"] && $_POST["username"] && $_POST["password"] && $_POST["email"] && $_POST["phoneno"] && $_POST["dob"] && $_POST["age"] && $_POST["usertype"])) {

        try {
            $con = $dbcon->getConnection();
            $query = "INSERT into User(firstname,lastname,username,password,email,phoneno,dob,age,usertype) VALUES(?,?,?,?,?,?,?,?,?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $firstname);
            $pstmt->bindValue(2, $lastname);
            $pstmt->bindValue(3, $username);
            $pstmt->bindValue(4, $password);
            $pstmt->bindValue(5, $email);
            $pstmt->bindValue(6, $phoneno);
            $pstmt->bindValue(7, $dob);
            $pstmt->bindValue(8, $age);
            $pstmt->bindValue(9, $usertype);


            $pstmt->execute();
            if ($pstmt->rowCount() > 0) {
                header("Location:login.php");
                echo "Successfully added data" . "<br>";
            } else {
                echo "Errorr!!!";
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    } else {
        header("Location:registration.php?error=1");
    }
}






echo "First Name :" . $firstname . "<br>";
echo "Last name :" . $lastname . "<br>";
echo "User name :" . $username . "<br>";
echo "Password :" . $password . "<br>";
echo "Email :" . $sanitize_email . "<br>";
echo "Phone no :" . $phoneno . "<br>";
echo "Date of birth :" . $dob . "<br>";
echo "Age :" . $age . "<br>";
echo "Type :" . $usertype . "<br>";




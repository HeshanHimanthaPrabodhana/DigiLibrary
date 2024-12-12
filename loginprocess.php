<?php

require './classes/DBConnector.php';

use classes\DBConnector;

$dbcon = new DBConnector();


$username = $_POST["username"];
$password = md5($_POST["password"]);
if (isset($_POST["username"], $_POST["password"])) {
    if (!empty($_POST["username"] && $_POST["password"])) {
        try {
            $con = $dbcon->getConnection();
            $query = "SELECT * from user WHERE username=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $username);
            $pstmt->execute();
            $result = $pstmt->fetch(PDO::FETCH_OBJ);


            $D_password = $result->password;
            if ($password === $D_password) {
                if ($username == 'Admin') {
                    header("Location:index.php");
                } else {
                    setcookie("username", $result->username, time() + (86400 * 30), "/");
                    setcookie("email", $result->email, time() + (86400 * 30), "/");
                    header("Location:HomePage.php");
                }
            } else {


                header("Location:login.php?error=1");
            }
        } catch (PDOException $ex) {
            echo 'Error ' . $ex->getMessage();
        }
    } else {
        header("Location:login.php?error=1");
    }
}











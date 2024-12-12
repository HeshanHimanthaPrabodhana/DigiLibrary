<?php
include "conn.php";
if(isset($_GET['Id'])){
    $Id =  $_GET['Id'];
    $sql = "DELETE fromm 'book' where Id = $Id";
    $conn = query($sql);
}
header('location:book.php');
?>
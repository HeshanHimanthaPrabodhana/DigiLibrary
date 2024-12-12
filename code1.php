<?php
include('security.php');

require 'database/dbconfig.php';

if(isset($_POST['registerbtn']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $dateofbirth = $_POST['dateofbirth'];
    $age = $_POST['age'];
    $type = $_POST['type'];

   
    $query = "INSERT INTO register (firstname,lastname,username,password,email,phoneno,dateofbirth,age,type) VALUES (' $firstname','$lastname ','$username','$password','$email','$phoneno','$dateofbirth','$age','$type')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        // echo "Saved";
         $_SESSION['status'] = "Admin Profile Added";
         $_SESSION['status_code'] = "success";
         header('Location: register.php');
    }
    else 
    {
         $_SESSION['status'] = "Admin Profile not Added";
         $_SESSION['status_code'] = "error";
         header('Location: register.php');  
    }
}

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM register WHERE review_id='$id'";
    $query_run = mysqli_query($connection,$query);
}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $firstname = $_POST['ufirstname'];
    $lastname = $_POST['ulastname'];
    $username = $_POST['uusername'];
    $password = $_POST['upassword'];
    $email = $_POST['uemail'];
    $phoneno = $_POST['uphoneno'];
    $dob = $_POST['udateofbirth'];
    $age = $_POST['uage'];
    $type = $_POST['utype'];

    $query = "UPDATE register SET firstname='$firstname',lastname='$lastname',username='$username',password='$password',email='$email',phoneno='$phoneno',dateofbirth='$dob',age='$age',type='$type' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else{
        $_SESSION['status'] = "Your Data is not updated";
        $_SESSION['status_code'] = "error";
        header('Location:register.php');
    }
}

if(isset($_POST['deletebtn'])){
    $id = $_POST['delete_id'];

    $query = "DELETE FROM review_table WHERE review_id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
       
       $_SESSION['status'] = "Your Data is Deleted!";
       $_SESSION['status_code'] = "success";
       header('Location:reviewrating.php');
    }
    else{
        $_SESSION['status'] = "Your Data is not Deleted!";
        $_SESSION['status_code'] = "error";
        header('Location:reviewrating.php');
    }
}
    ?>
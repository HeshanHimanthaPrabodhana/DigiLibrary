<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-4">
    <h6 class="m-0 font-weight-bold text-primary">Update Admin Profile  </h6>
  </div>
<div class="card-body">
   <?php    
   
require 'database/dbconfig.php';   
//$connection = mysqli_connect("localhost","root","","librarymanagementsystem");
if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM register WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    foreach($query_run as $row)
     {
        ?>
       <form action="code.php" method="POST">
        
            <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="ufirstname" value="<?php echo $row['firstname']?>" class="form-control" placeholder="Enter firstname">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="ulastname" value="<?php echo $row['lastname']?>" class="form-control" placeholder="Enter lastname">
            </div>
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="username" value="<?php echo $row['username']?>" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="upassword" value="<?php echo $row['password']?>" class="form-control" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="uemail" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Phone No</label>
                <input type="phoneno" name="uphoneno" value="<?php echo $row['phoneno']?>" class="form-control" placeholder="enter phone no">
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="udateofbirth" value="<?php echo $row['dateofbirth']?>" class="form-control" placeholder="enter date of birth">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="age" name="uage" value="<?php echo $row['age']?>" class="form-control" placeholder="age">
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" name="utype" value="<?php echo $row['type']?>" class="form-control" placeholder="type">
            </div>
        </div>
       
            <a href="register.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
        
      </form>

 <?php
    }
 }
?>
   </div>
  </div>
 </div>
</div>
<!-- /.container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

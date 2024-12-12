<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control checking_email" placeholder="Enter Last Name" required>
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label>Phone No</label>
                <input type="phoneno" name="phoneno" class="form-control" placeholder="Enter Phone No" required>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dateofbirth" class="form-control" placeholder="Enter Date of Birth">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="age" name="age" class="form-control" placeholder="Enter Age">
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="type" name="type" class="form-control" placeholder="Enter Type" required>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class= "container-fluid">
  <!--DataTables Example-->
<div class="Card shadow mb-4">
  <div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary"><center>Admin Details<hr></center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Admin Profile 
</button>
    </h3>
</div>
<div class="card-body">



<div class="table-responsive">

   <?php 
        require 'database/dbconfig.php';
        //$connection = mysqli_connect("localhost","root","","librarymanagementsystem");
        $query= "SELECT * FROM register";
        $query_run = mysqli_query($connection, $query);
    
   ?>

     <table class = "table table-border" id="datatable" width="100%" collspacing="0">
      <thead>
        <tr>
          <th>ID </th>
          <th>FirstName</th>
          <th>Last Name</th>
          <th>Username</th>
          <th>Password</th>
          <th>Email</th>
          <th>Phone No</th>
          <th>DOB</th>
          <th>Age</th>
          <th>Type</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>
     <tbody>
      <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row = mysqli_fetch_assoc($query_run)){
              ?>
      <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['firstname']; ?></td>
         <td><?php echo $row['lastname']; ?></td>
         <td><?php echo $row['username']; ?></td>
         <td><?php echo $row['password']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['phoneno']; ?></td>
         <td><?php echo $row['dateofbirth']; ?></td>
         <td><?php echo $row['age']; ?></td>
         <td><?php echo $row['type']; ?></td>
         <td>
            <form action = "registerupdate.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
            </form>
          </td>
          <td>
                <form action="code.php" method="POST">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                  <button type="submit" name="deletebtn" class="btn btn-danger"> DELETE</button>
                </form>
          </td>
       </tr>
       <?php
              
            }
         }
         else{
            echo "No record found";
         }
        ?>
     </tbody>
     </table>
  </div>
 </div>
</div>

</div>
<!-- /.container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
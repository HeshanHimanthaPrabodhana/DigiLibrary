<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class= "container-fluid">
 <!--DataTables Example-->
 <div class="Card shadow mb-4">
  <div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary"><center>Client Rating & Review Details<hr></center>
    </h3>
</div>
<div class="card-body">



<div class="table-responsive">

   <?php 
        require 'database/dbconfig.php';
        //$connection = mysqli_connect("localhost","root","","librarymanagementsystem");
        $query= "SELECT * FROM review_table";
        $query_run = mysqli_query($connection, $query);
    
   ?>

     <table class = "table table-border" id="datatable" width="100%" collspacing="0">
      <thead>
        <tr>
          <th>Review ID </th>
          <th>Username</th>
          <th>User Rating</th>
          <th>User Comment</th>
          <th>Date & Time</th>
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
         <td><?php echo $row['review_id']; ?></td>
         <td><?php echo $row['user_name']; ?></td>
         <td><?php echo $row['user_rating']; ?></td>
         <td><?php echo $row['user_review']; ?></td>
         <td><?php echo $row['datetime']; ?></td>
         <td>
            <form action = "" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $row['review_id'];?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> VIEW</button>
            </form>
          </td>
          <td>
                <form action="code1.php" method="POST">
                  <input type="hidden" name="delete_id" value="<?php echo $row['review_id'];?>">
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
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
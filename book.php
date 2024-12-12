<?php
session_start();
require 'conn.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="./css/style.css">
  

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Book</title>
</head>

<body>
<?php include('header.php') ?>

  <!-- Nav bar-->

  <div class="d-flex justify-content-end add pe-5 pt-5">
    <a href="addBook.php" class="btn btn-success p-2">Add Book</a>
  </div>

  <br>
  <div class="container">
    <?php include('message.php') ?>
    <div class="row justify-content-start">
      <?php

      $query = mysqli_query($conn, "SELECT * FROM `book`");
      while ($row = mysqli_fetch_array($query)) :

      ?>
        <div class="col-md-3 p-3">
          <div class="card book-preview">
            <img class="card-img-top p-5" src="images/book.jpg" alt="Card image cap" width="250" height="400">
            &nbsp;
            <div class="card-body">
              <h5 class="card-title"><b><?= $row['title']; ?></b></h5>
              <p class="card-text" width="150" height="200">
                Name: <?= $row['title']; ?> <br>
                Year: <?= $row['Pub_year']; ?> <br>
                Author: <?= $row['author']; ?> <br>
                ISBN: <?= $row['isbn']; ?> <br>
                PRICE: <?= $row['book_price']; ?> <br>
              </p>
              <div class="flex flex-row"> <a href="bookview.php" class="btn btn-link m-1 font-monospace text-blue" style="font-weight: bold;"></i>Read more</a>
                <a href="viewdetail.php?Id=<?= $row['Book_ID']; ?>" class="btn btn-primary m-1 font-monospace text-light" style="font-weight: bold;">View Book Detail</a>
                <a href="editbook.php?Id=<?= $row['Book_ID']; ?>" class="btn btn-success m-1 font-monospace text-light" style="font-weight: bold;">Edit Book</a>
                <form action="code2.php" method="POST">
                  <input type="hidden" name="Book_ID" value="<?php echo $row['Book_ID']; ?>">
                  <button type="submit" name="delete_book" class="btn btn-danger m-1 font-monospace text-light" style="font-weight: bold;">Delete Book</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php
      endwhile;
      ?>
    </div>
  </div>
  <br>

  <!-- Footer-->
  <?php
  include "footer.php";
  ?>

</body>

</html>
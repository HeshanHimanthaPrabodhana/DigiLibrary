<?php
session_start();
require 'conn.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit Book</title>
    <style>
        .card {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 30%, rgba(0, 212, 255, 1) 100%);
            margin-left: auto;
            margin-right: auto;
            width: 50vw;
            height: 75vh;
        }
    </style>
</head>

<body>
<?php include('header.php') ?>

    <div class="container my-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12 ">
                <div class="card" style="height:100%" >
                    <div class="card-header">
                        <h4 class="text-light">Edit Book
                            <a href="book.php" class="btn btn-danger float-end text-dark">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['Id'])) {
                            $Book_ID = mysqli_real_escape_string($conn, $_GET['Id']);
                            $query = "SELECT * FROM book WHERE Book_ID = $Book_ID ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $book = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code2.php" method="POST">
                                    <input type="hidden" name="Book_ID" value="<?php echo $book['Book_ID'] ?>">

                                    <div class="mb-3">
                                        <label>Book Title</label>
                                        <input type="text" name="title" value="<?php echo $book['title']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Genre</label>
                                        <input type="text" name="genre" value="<?php echo $book['genre']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Author</label>
                                        <input type="text" name="author" value="<?php echo $book['author']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Public Year</label>
                                        <input type="number" min="1900" max="2099" step="1" name="Pub_year" value="<?php echo $book['Pub_year']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ISBN</label>
                                        <input type="number" name="isbn" value="<?php echo $book['isbn']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PRICE</label>
                                        <input type="number" step=".01" name="book_price" value="<?php echo $book['book_price']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-end">
                                        <button type="submit" name="update_book" class="btn btn-primary">Update Book</button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No such ID Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Footer-->
     <?php
       include "footer.php";
     ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
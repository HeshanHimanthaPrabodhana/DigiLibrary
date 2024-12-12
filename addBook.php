<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Add Book</title>
    <style>
        .card {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(207, 151, 151, 1) 100%);
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            width: 50vw;
            height: 90%;
        }
    </style>
</head>

<body>
<?php include('header.php') ?>

    <div class="container my-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card p-0">
                    <div class="card-header">
                        <h4>Add New Book
                            <a href="book.php" class="btn btn-dark float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code2.php" method="POST">

                            <div class="mb-3">
                                <label>Book Title</label>
                                <input type="text" required name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Genre</label>
                                <input type="text" required name="genre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Author</label>
                                <input type="text" required name="author" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Public Year</label>
                                <input type="number" required min="1900" max="2099" step="1" name="Pub_year" value="<?php echo $book['Pub_year']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ISBN</label>
                                <input type="number" required name="isbn" value="<?php echo $book['isbn']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PRICE</label>
                                <input type="number" step=".01" required name="book_price" value="<?php echo $book['book_price']; ?>" class="form-control">
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                            </div>

                        </form>
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
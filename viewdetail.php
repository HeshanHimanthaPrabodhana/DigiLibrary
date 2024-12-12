<?php
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

    <title>Book Details</title>
    <style>
        .card {
            justify-content: center;
            margin-top: 70px;
            margin-bottom: 70px;
            height: 45vh;
            width: 40vw;
            margin-left: auto;
            margin-right: auto;
            flex-wrap: wrap;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            display: flex;
            padding: 2rem;
        }

        .card-image {
            display: flex;
            height: 250px;
            box-shadow: 0 50px 100px 0 var(--violet);
            height: 45vh;
            width: 40vw;
        }

        .card-body {
            height: 45vh;
            width: 20vw;
            margin-left: auto;
            margin-right: auto;
            position: absolute;
        }

        .card-image img {
            height: 45vh;
            width: 20vw;
        }
    </style>
</head>

<body>
<?php include('header.php') ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-0">
                    <div class="d-flex">
                        <div class="col-md-6">
                            <div class="card-image">
                                <img src="images/detailbook.jpg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 style="color: #2ecc71">Book Details
                                    <a href="book.php" class="btn btn-danger float-end"> BACK</a>
                                </h4>
                                <?php
                                if (isset($_GET['Id'])) {
                                    $Book_ID = mysqli_real_escape_string($conn, $_GET['Id']);
                                    $query = "SELECT * FROM book WHERE Book_ID = $Book_ID ";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        $book = mysqli_fetch_array($query_run);
                                ?>
                                        <div class="mb-3">
                                            <label><b>Book Title:</b></label>
                                            <?php echo $book['title']; ?>

                                        </div>
                                        <div class="mb-3">
                                            <label><b>Genre:</b></label>
                                            <?php echo $book['genre']; ?>

                                        </div>
                                        <div class="mb-3">
                                            <label><b>Author:</b></label>
                                            <?php echo $book['author']; ?>

                                        </div>
                                        <div class="mb-3">
                                            <label><b>Public Year:</b></label>
                                            <?php echo $book['Pub_year']; ?>

                                        </div>
                                        <div class="mb-3">
                                            <label><b>ISBN:</b></label>
                                            <?php echo $book['isbn']; ?>

                                        </div>
                                        <div class="mb-3">
                                            <label><b>PRICE:</b></label>
                                            <?php echo $book['book_price']; ?>

                                        </div>

                            </div>
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
    </div>
    </div>
     <!-- Footer-->
     <?php
       include "footer.php";
     ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
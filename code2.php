<?php
session_start();
require 'conn.php';

if(isset($_POST['delete_book'])){
    $Book_ID = mysqli_real_escape_string($conn,  $_POST['Book_ID']);

    $query = "DELETE FROM book WHERE Book_ID = $Book_ID";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['message'] = "Successfully Deleted!";
        header("Location: book.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Not Deleted!";
        header("Location: book.php");
        exit(0);
    }
}

if (isset($_POST['update_book'])) {
    $Book_ID = mysqli_real_escape_string($conn, $_POST['Book_ID']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $Pub_year = mysqli_real_escape_string($conn, $_POST['Pub_year']);
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $book_price = mysqli_real_escape_string($conn, $_POST['book_price']);

    $query = "UPDATE book SET title='$title', genre='$genre', author='$author', Pub_year='$Pub_year',isbn='$isbn', book_price='$book_price'
          WHERE Book_ID = $Book_ID ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Successfully Editted!";
        header("Location: book.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Failed!";
        header("Location: book.php");
        exit(0);
    }
}

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $Pub_year = mysqli_real_escape_string($conn, $_POST['Pub_year']);
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $book_price = mysqli_real_escape_string($conn, $_POST['book_price']);

    $query = "INSERT INTO book(title,genre,author,Pub_year,isbn,book_price) VALUES ('$title','$genre','$author','$Pub_year','$isbn','$book_price')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Successfully added!";
        header("Location: addBook.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Failed!";
        header("Location: addBook.php");
        exit(0);
    }
}

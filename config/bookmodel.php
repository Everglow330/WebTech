<?php

require_once("../config/db.php");

function insertBook($conn, $title, $author, $category, $status)
{
    $sql = "INSERT INTO books(title, author, category, status)
            VALUES('$title', '$author', '$category', '$status')";

    return mysqli_query($conn, $sql);
}

function getAllBooks($conn)
{
    $sql = "SELECT * FROM books";

    return mysqli_query($conn, $sql);
}

function updateBook($conn, $id, $title, $author, $category, $status)
{
    $sql = "UPDATE books
            SET title='$title',
                author='$author',
                category='$category',
                status='$status'
            WHERE id=$id";

    return mysqli_query($conn, $sql);
}

function deleteBook($conn, $id)
{
    $sql = "DELETE FROM books WHERE id=$id";

    return mysqli_query($conn, $sql);
}

?>
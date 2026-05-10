<?php

require_once("../model/bookModel.php");

function addBook($title, $author, $category, $status)
{
    global $conn;

    return insertBook($conn, $title, $author, $category, $status);
}

function showBooks()
{
    global $conn;

    return getAllBooks($conn);
}

function editBook($id, $title, $author, $category, $status)
{
    global $conn;

    return updateBook($conn, $id, $title, $author, $category, $status);
}

function removeBook($id)
{
    global $conn;

    return deleteBook($conn, $id);
}

?>
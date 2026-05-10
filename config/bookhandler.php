<?php

require_once("../controller/bookController.php");

$action = $_POST['action'];

if ($action == "add") {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    addBook($title, $author, $category, $status);

    echo "Book Added";
}

if ($action == "show") {

    $result = showBooks();

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['author']."</td>";
        echo "<td>".$row['category']."</td>";
        echo "<td>".$row['status']."</td>";

        echo "<td>
                <button onclick='deleteBook(".$row['id'].")'>
                Delete
                </button>
              </td>";

        echo "</tr>";
    }
}

if ($action == "delete") {

    $id = $_POST['id'];

    removeBook($id);

    echo "Deleted";
}

if ($action == "update") {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    editBook($id, $title, $author, $category, $status);

    echo "Updated";
}

?>
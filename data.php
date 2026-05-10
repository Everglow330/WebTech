<?php
header('Content-Type: application/json');


$students = array(
    array(
        "name" => "Kanij Fatema",
        "id" => "23-54901-3",
        "department" => "CSE",
        "cgpa" => 3.96
    ),
    array(
        "name" => "Tanvir Hasan",
        "id" => "CSE102",
        "department" => "CSE",
        "cgpa" => 3.65
    ),
    array(
        "name" => "Nusrat Jahan",
        "id" => "EEE201",
        "department" => "EEE",
        "cgpa" => 3.90
    )
);

echo json_encode($students);
?>
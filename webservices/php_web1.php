<!---->
<?php
header("Content-Type: application/json");
$con = mysqli_connect("localhost", "root", "", "college");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    mysqli_query($con, "INSERT INTO student VALUES ($id,'$name','$course')");
    echo json_encode(["message" => "Student added successfully"]);
} else {
    echo json_encode(["message" => "Use POST method"]);
}
?>




<!--
CREATE DATABASE college;
USE college;
CREATE TABLE student (id INT PRIMARY KEY, name VARCHAR(50), course VARCHAR(30));
INSERT INTO student VALUES (1,'Amit','MCA'),(2,'Neha','MCA');-->
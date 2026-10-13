<!---->
<?php
header("Content-Type: application/json");
$con = mysqli_connect("localhost", "root", "", "college");
$res = mysqli_query($con, "SELECT * FROM student");
$students = array();
while ($row = mysqli_fetch_assoc($res)) {
    $students[] = $row;
}
echo json_encode($students);
?>



<!--
CREATE DATABASE college;
USE college;
CREATE TABLE student (id INT PRIMARY KEY, name VARCHAR(50), course VARCHAR(30));
INSERT INTO student VALUES (1,'Amit','MCA'),(2,'Neha','MCA');-->
<!---->
<?php
header("Content-Type: application/json");
$con = mysqli_connect("localhost", "root", "", "college");
$res = mysqli_query($con, "SELECT * FROM student");
$rows = array();
while ($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
echo json_encode(array("status" => "success", "count" => count($rows), "data" => $rows));
?>


<!--
CREATE DATABASE college;
USE college;
CREATE TABLE student (id INT PRIMARY KEY, name VARCHAR(50), course VARCHAR(30));
INSERT INTO student VALUES (1,'Amit','MCA'),(2,'Neha','MCA');-->
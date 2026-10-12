<?php
ini_set("soap.wsdl_cache_enabled", "0");

function getStudent($id) {
    $con = mysqli_connect("localhost", "root", "", "college");
    $res = mysqli_query($con, "SELECT * FROM student WHERE id=$id");
    $r = mysqli_fetch_assoc($res);
    if ($r) {
        return "ID: " . $r['id'] . ", Name: " . $r['name'] . ", Course: " . $r['course'];
    }
    return "Student not found";
}

$server = new SoapServer("student.wsdl");
$server->addFunction("getStudent");
$server->handle();
?>
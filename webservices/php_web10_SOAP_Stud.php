<!---->
<?php
function addStudent($id, $name, $course) {
    $con = mysqli_connect("localhost", "root", "", "college");
    mysqli_query($con, "INSERT INTO student VALUES ($id,'$name','$course')");
    return "Student inserted successfully";
}

$server = new SoapServer(null, array('uri' => 'http://localhost/'));
$server->addFunction('addStudent');
$server->handle();
?>





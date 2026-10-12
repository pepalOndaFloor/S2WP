<!---->
<?php
function getStudent($id) {
    $con = mysqli_connect("localhost", "root", "", "college");
    $res = mysqli_query($con, "SELECT * FROM student WHERE id=$id");
    $r = mysqli_fetch_assoc($res);
    if ($r) {
        return $r['id'] . " - " . $r['name'] . " - " . $r['course'];
    }
    return "Student not found";
}

$server = new SoapServer(null, array('uri' => 'http://localhost/'));
$server->addFunction('getStudent');
$server->handle();
?>





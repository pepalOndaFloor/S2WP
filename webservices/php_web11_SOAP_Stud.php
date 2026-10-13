<!---->
<?php

function getAllStudents() {
    $con = mysqli_connect("localhost", "root", "", "college");
    $res = mysqli_query($con, "SELECT * FROM student");
    $list = array();
    while ($r = mysqli_fetch_assoc($res)) {
        $list[] = $r['id'] . " - " . $r['name'] . " - " . $r['course'];
    }
    return $list;
}

$server = new SoapServer(null, array('uri' => 'http://localhost/'));
$server->addFunction('getAllStudents');
$server->handle();
?>





<!---->
<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/student_server.php',
    'uri' => 'http://localhost/'
));
$students = $client->getAllStudents();
foreach ($students as $s) {
    echo $s . "<br>";
}
?>
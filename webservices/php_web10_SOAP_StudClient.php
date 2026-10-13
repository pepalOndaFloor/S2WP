<!---->
<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/student_server.php',
    'uri' => 'http://localhost/'
));
echo $client->addStudent(3, "Rahul", "MCA");
?>
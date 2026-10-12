<!---->
<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/student_server.php',
    'uri' => 'http://localhost/'
));
echo $client->getStudent(1);
?>




<!---->
<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/add_server.php',
    'uri' => 'http://localhost/'
));
echo "Sum = " . $client->add(10, 5);
?>




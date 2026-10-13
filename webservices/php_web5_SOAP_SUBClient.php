<!---->
<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/sub_server.php',
    'uri' => 'http://localhost/'
));
echo "Difference = " . $client->subtract(10, 5);
?>
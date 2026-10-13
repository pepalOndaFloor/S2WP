<!---->
<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/mul_server.php',
    'uri' => 'http://localhost/'
));
echo "Product = " . $client->multiply(10, 5);
?>
<!---->
<?php
$client = new SoapClient(null, array(
    'location' => 'http://localhost/div_server.php',
    'uri' => 'http://localhost/'
));
echo "Quotient = " . $client->divide(10, 5);
?>
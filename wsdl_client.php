<?php
ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://localhost/student.wsdl");
echo $client->getStudent(1);
?>
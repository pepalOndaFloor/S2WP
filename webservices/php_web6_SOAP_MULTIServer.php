<!---->
<?php
function multiply($a, $b) {
    return $a * $b;
}
$server = new SoapServer(null, array('uri' => 'http://localhost/'));
$server->addFunction('multiply');
$server->handle();
?>
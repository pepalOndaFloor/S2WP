<!---->
<?php
function subtract($a, $b) {
    return $a - $b;
}
$server = new SoapServer(null, array('uri' => 'http://localhost/'));
$server->addFunction('subtract');
$server->handle();
?>
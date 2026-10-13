<!---->
<?php
function add($a, $b) {
    return $a + $b;
}
$server = new SoapServer(null, array('uri' => 'http://localhost/'));
$server->addFunction('add');
$server->handle();
?>



<!---->
<?php
function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    }
    return $a / $b;
}
$server = new SoapServer(null, array('uri' => 'http://localhost/'));
$server->addFunction('divide');
$server->handle();
?>
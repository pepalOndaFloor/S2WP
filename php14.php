<!--Write PHP code to display array in sorted order.-->
<?php
$arr = array(45, 12, 78, 23, 5);
sort($arr);
foreach ($arr as $v) {
    echo $v . "<br>";
}
?>
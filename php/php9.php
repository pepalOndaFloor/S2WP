<!--Create an array Jeans. Insert 3 records in it. Display it. Sort them in ascending order and print it. 
Also sort them in reverse order and print it-->
<?php
$Jeans = array("Levis", "Wrangler", "Lee");

echo "<h3>Original Array</h3>";
print_r($Jeans);

sort($Jeans);

echo "<h3>Ascending Order</h3>";
print_r($Jeans);

rsort($Jeans);

echo "<h3>Reverse Order</h3>";
print_r($Jeans);
?>
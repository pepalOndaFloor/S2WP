<!--Write PHP code to show the use of data and time function.-->
<?php
date_default_timezone_set("Asia/Kolkata");

echo "Current Date: " . date("d-m-Y") . "<br>";
echo "Current Time: " . date("h:i:s A") . "<br>";
echo "Day: " . date("l") . "<br>";
echo "Month: " . date("F") . "<br>";
echo "Year: " . date("Y") . "<br>";
echo "Timestamp: " . time();
?>
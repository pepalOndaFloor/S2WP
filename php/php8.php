<!--Write PHP program to display the various file properties like creation date, last modified, size of any file-->
<?php
$file = "test.txt";

if (file_exists($file)) {
    echo "File Name: " . basename($file) . "<br>";
    echo "Directory: " . dirname($file) . "<br>";
    echo "Creation/Change Time: " . date("d-m-Y H:i:s", filectime($file)) . "<br>";
    echo "Last Modified: " . date("d-m-Y H:i:s", filemtime($file)) . "<br>";
    echo "File Size: " . filesize($file) . " bytes<br>";
} else {
    echo "File does not exist.";
}
?>
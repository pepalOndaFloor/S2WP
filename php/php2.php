<!--Write a program to check whether a file exist or not, if it exist then display its directory name.-->
<?php
$filename = "test.txt";

if (file_exists($filename)) {
    echo "File exists.<br>";
    echo "Directory name: " . dirname($filename);
} else {
    echo "File does not exist.";
}
?>

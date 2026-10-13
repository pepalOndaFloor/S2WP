<!--Write a program to check whether a file exist or not, if it exists then display its directory name-->
<?php
$file = "test.txt";
if (file_exists($file)) {
    echo "File exists<br>";
    echo "Directory name: " . dirname(realpath($file));
} else {
    echo "File does not exist";
}
?>

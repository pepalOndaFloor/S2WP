<!---Write a program to create directory and create file in that directory.-->
<?php
$dir = "mydir";
if (!is_dir($dir)) {
    mkdir($dir);
    echo "Directory created<br>";
}
$f = fopen("$dir/test.txt", "w");
fwrite($f, "Hello PHP");
fclose($f);
echo "File created in directory";
?>
<!--Write PHP Script to find out the size, last modified data, 
path and permission associated with a particular directory-->
<?php
function dirSize($d) {
    $size = 0;
    foreach (scandir($d) as $f) {
        if ($f == "." || $f == "..") continue;
        $p = "$d/$f";
        $size += is_dir($p) ? dirSize($p) : filesize($p);
    }
    return $size;
}
$dir = "test";   // directory name
echo "Path: " . realpath($dir) . "<br>";
echo "Size: " . dirSize($dir) . " bytes<br>";
echo "Last Modified: " . date("d-m-Y H:i:s", filemtime($dir)) . "<br>";
echo "Permission: " . substr(sprintf('%o', fileperms($dir)), -4);
?>
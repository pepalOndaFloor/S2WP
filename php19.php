<!--Write PHP Code to display list of senior citizens from citizen table.(Assume suitable table structure)-->
<?php
$con = mysqli_connect("localhost", "root", "", "city");
$res = mysqli_query($con, "SELECT * FROM citizen WHERE age >= 60");
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Age</th></tr>";
while ($r = mysqli_fetch_assoc($res)) {
    echo "<tr><td>{$r['id']}</td><td>{$r['name']}</td><td>{$r['age']}</td></tr>";
}
echo "</table>";
?>



<!--
CREATE DATABASE city;
USE city;
CREATE TABLE citizen (id INT, name VARCHAR(50), age INT);
INSERT INTO citizen VALUES (1,'Ramesh',65),(2,'Suresh',30),(3,'Sunita',70);
-->
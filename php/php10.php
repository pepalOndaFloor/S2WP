<!--Create new database namely Book with table namely Novels that has 3 records namely Historical, Social Thriller with number 1, 2, 3. 
Retrieve this record of Novels table and display it on HTML web Browser.
-->
<?php
$con = mysqli_connect("localhost", "root", "", "Book");
$res = mysqli_query($con, "SELECT * FROM Novels");
echo "<table border='1'><tr><th>No</th><th>Name</th></tr>";
while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";
}
echo "</table>";
?>

<!-- SQL TABLE
 CREATE DATABASE Book;
USE Book;
CREATE TABLE Novels (id INT, name VARCHAR(50));
INSERT INTO Novels VALUES (1,'Historical'),(2,'Social'),(3,'Thriller');

-->
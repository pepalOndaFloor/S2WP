<!--Write PHP code to retrieve Book information from Book table (Assume suitable table structure).-->
<?php
$con = mysqli_connect("localhost", "root", "", "Book");
$res = mysqli_query($con, "SELECT * FROM books");
echo "<table border='1'><tr><th>ID</th><th>Title</th><th>Author</th><th>Price</th></tr>";
while ($r = mysqli_fetch_assoc($res)) {
    echo "<tr><td>{$r['id']}</td><td>{$r['title']}</td><td>{$r['author']}</td><td>{$r['price']}</td></tr>";
}
echo "</table>";
?>


<!--sql table
USE Book;
CREATE TABLE books (id INT, title VARCHAR(50), author VARCHAR(50), price INT);
INSERT INTO books VALUES (1,'Wings of Fire','A.P.J. Kalam',250),(2,'Shyamchi Aai','Sane Guruji',150);

-->
<!--Write PHP code to accept credit card registration information from customer, 
store it into the database and display the customer information-->
<form method="post">
    Name: <input type="text" name="name"><br>
    Card No: <input type="text" name="card_no"><br>
    Expiry: <input type="text" name="expiry"><br>
    <input type="submit" name="save" value="Register">
</form>
<?php
$con = mysqli_connect("localhost", "root", "", "shop");
if (isset($_POST['save'])) {
    $n = $_POST['name'];
    $c = $_POST['card_no'];
    $e = $_POST['expiry'];
    mysqli_query($con, "INSERT INTO card VALUES ('$n','$c','$e')");
    echo "<h3>Customer Information</h3>";
    $res = mysqli_query($con, "SELECT * FROM card");
    echo "<table border='1'><tr><th>Name</th><th>Card No</th><th>Expiry</th></tr>";
    while ($r = mysqli_fetch_assoc($res)) {
        echo "<tr><td>{$r['name']}</td><td>{$r['card_no']}</td><td>{$r['expiry']}</td></tr>";
    }
    echo "</table>";
}
?>

<!--- SQL TALE
CREATE DATABASE shop;
USE shop;
CREATE TABLE card (name VARCHAR(50), card_no VARCHAR(16), expiry VARCHAR(7));
->
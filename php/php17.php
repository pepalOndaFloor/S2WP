<!---Write PHP code to accept passport registration information from the customer, 
store it into database and display the customer information.
-->

<form method="post">
    Name: <input type="text" name="name"><br>
    Passport No: <input type="text" name="pno"><br>
    DOB: <input type="date" name="dob"><br>
    Nationality: <input type="text" name="nat"><br>
    <input type="submit" name="save" value="Register">
</form>
<?php
$con = mysqli_connect("localhost", "root", "", "govt");
if (isset($_POST['save'])) {
    $n = $_POST['name'];
    $p = $_POST['pno'];
    $d = $_POST['dob'];
    $na = $_POST['nat'];
    mysqli_query($con, "INSERT INTO passport VALUES ('$n','$p','$d','$na')");
    echo "<h3>Customer Information</h3>";
    $res = mysqli_query($con, "SELECT * FROM passport");
    echo "<table border='1'><tr><th>Name</th><th>Passport No</th><th>DOB</th><th>Nationality</th></tr>";
    while ($r = mysqli_fetch_assoc($res)) {
        echo "<tr><td>{$r['name']}</td><td>{$r['passport_no']}</td><td>{$r['dob']}</td><td>{$r['nationality']}</td></tr>";
    }
    echo "</table>";
}
?>

<!--SQl tabke
CREATE DATABASE govt;
USE govt;
CREATE TABLE passport (name VARCHAR(50), passport_no VARCHAR(10), dob DATE, nationality VARCHAR(30));

-->
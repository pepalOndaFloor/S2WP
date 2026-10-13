<!--Write PHP Code to accept & display student’s details for Placement Agency.
 After successful insertion display throughout 60 % students records in proper format 
 (Assume suitable structure.)
-->
<form method="post">
    Roll No: <input type="number" name="roll"><br>
    Name: <input type="text" name="name"><br>
    Branch: <input type="text" name="branch"><br>
    Percentage: <input type="text" name="per"><br>
    <input type="submit" name="save" value="Submit">
</form>
<?php
$con = mysqli_connect("localhost", "root", "", "placement");
if (isset($_POST['save'])) {
    $r = $_POST['roll'];
    $n = $_POST['name'];
    $b = $_POST['branch'];
    $p = $_POST['per'];
    if (mysqli_query($con, "INSERT INTO student VALUES ($r,'$n','$b',$p)")) {
        echo "Record inserted successfully<br>";
        echo "<h3>Students with 60% and above</h3>";
        $res = mysqli_query($con, "SELECT * FROM student WHERE percentage >= 60");
        echo "<table border='1'><tr><th>Roll</th><th>Name</th><th>Branch</th><th>Percentage</th></tr>";
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr><td>{$row['roll']}</td><td>{$row['name']}</td><td>{$row['branch']}</td><td>{$row['percentage']}</td></tr>";
        }
        echo "</table>";
    }
}
?>

<!--sql tbake

CREATE DATABASE placement;
USE placement;
CREATE TABLE student (roll INT, name VARCHAR(50), branch VARCHAR(30), percentage FLOAT);
-->
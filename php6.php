<!--Write PHP program to insert a student record in database.-->
<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = "Rahul";
$email = "rahul@example.com";
$city = "Pune";

$sql = "INSERT INTO students (name, email, city)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $city);

if (mysqli_stmt_execute($stmt)) {
    echo "Student record inserted successfully.";
} else {
    echo "Error inserting record.";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
<!--Write PHP code to insert firstname, lastname, email and store all submitted data in database table.-->
<html>
<head>
    <title>Insert Student Details</title>
</head>
<body>

<h2>Enter Your Details</h2>

<form method="POST" action="">
    First Name:
    <input type="text" name="firstname" required>
    <br><br>

    Last Name:
    <input type="text" name="lastname" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    <input type="submit" name="submit" value="Save">
</form>

<?php
if (isset($_POST['submit'])) {

    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "college");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    // Insert data using a prepared statement
    $sql = "INSERT INTO students (firstname, lastname, email)
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "sss",
        $firstname,
        $lastname,
        $email
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>

</body>
</html>
<!--Write PHP script to validate a form data. -->
<!DOCTYPE html>
<html>
<body>

<h2>Form Validation</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if (empty($name)) {
        echo "Name is required.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } else {
        echo "Form submitted successfully.<br>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email);
    }
}
?>

</body>
</html>
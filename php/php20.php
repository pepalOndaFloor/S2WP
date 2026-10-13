<!--Write a PHP Script for login authentication. 
Design an HTML form which takes username and password from user 
and validate against stored username and password in file.
-->

<form method="post">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" name="login" value="Login">
</form>
<?php
if (isset($_POST['login'])) {
    $u = $_POST['user'];
    $p = $_POST['pass'];
    $found = false;
    $lines = file("users.txt");
    foreach ($lines as $line) {
        list($su, $sp) = explode(",", trim($line));
        if ($u == $su && $p == $sp) {
            $found = true;
        }
    }
    if ($found) {
        echo "Login Successful";
    } else {
        echo "Invalid Username or Password";
    }
}
?>

<!---admin,1234->
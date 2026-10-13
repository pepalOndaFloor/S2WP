<!--Write php code to connect to mySql database, fire a select query and display the result in HTML table.-->
<?php
// Connect to MySQL database
$con = mysqli_connect("localhost", "root", "", "college");//hostname,username,password,dbname

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute SELECT query
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Display records in HTML table
if (mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['city']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No records found.";
}

// Close connection
mysqli_close($conn);
?>

<!--Write PHP script to create an associative array using the countries as keys, 
the cities as values and transform it into 2 dimensional array and display the data as a table.-->
<?php
$countries = array(
    "India" => "New Delhi",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "USA" => "Washington"
);

// Convert associative array into a 2D array
$data = array();

foreach ($countries as $country => $city) {
    $data[] = array($country, $city);
}

// Display data in HTML table
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Country</th><th>City</th></tr>";

foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row[0]) . "</td>";
    echo "<td>" . htmlspecialchars($row[1]) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
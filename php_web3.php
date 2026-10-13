<!---->
<?php
$json = file_get_contents("https://jsonplaceholder.typicode.com/posts");
$posts = json_decode($json, true);
foreach (array_slice($posts, 0, 5) as $p) {
    echo "<b>" . $p['id'] . ". " . $p['title'] . "</b><br>";
    echo $p['body'] . "<br><br>";
}
?>





<!--Design a form which accepts the input from the user for online Railway Reservation System-->

<html>
<body>
<h2>Railway Reservation</h2>
<form method="post" action="reserve.php">
    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>
    Gender:
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female<br><br>
    From: <input type="text" name="from"><br><br>
    To: <input type="text" name="to"><br><br>
    Date of Journey: <input type="date" name="date"><br><br>
    Class:
    <select name="class">
        <option>Sleeper</option>
        <option>AC 3 Tier</option>
        <option>AC 2 Tier</option>
        <option>AC 1 Tier</option>
    </select><br><br>
    No. of Passengers: <input type="number" name="seats"><br><br>
    <input type="submit" value="Book Ticket">
    <input type="reset" value="Reset">
</form>
</body>
</html>
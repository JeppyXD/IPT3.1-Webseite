
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost:3306";
$username = "joel.erni";
$password = "Jsf87648?";
$dbname = "FH5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT speed, price, bez FROM car";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		   echo "speed: " . $row["speed"]. " - Name: " . $row["bez"]. " - Preis: " . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>

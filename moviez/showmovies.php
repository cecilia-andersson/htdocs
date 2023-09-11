<?php
include 'connect.php';

if (mysqli_connect_error()) { 
    die("Connection failed: " . mysqli_connect_error());  
}

echo '<table><tr><th>Movie ID</th><th>Movie Title</th><th>Release Year</th><th>Rating</th><th>Genre</th></tr>';

$sql = "SELECT * FROM `movies`";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["Movie ID"] . "</td><td>" . $row["Movie Title"] . "</td><td>" . $row["Release Year"] . "</td><td>" . $row["Rating"] . "</td></tr>" . $row["Genre"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

echo '</table>';

include 'closeDB.php';
?>
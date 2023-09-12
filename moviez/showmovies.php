<?php
include 'connect.php';
//Check connection to Databases
if (mysqli_connect_error()) { 
    die("Connection failed: " . mysqli_connect_error());  
}

// Get query from search bar

$query = "select * from movie.genresgenres";
if(isset($GET['query'])){
    $search_query = $_GET['query'];

    // Prepare a SQL statement to search for movies
    $sql = "SELECT movies.mid, movies.mname, movies.myear, movies.mrating, genre.mgenre
    FROM movies
    LEFT JOIN genres ON movies.mgenreid = genres.gid
    WHERE mname LIKE '%$search_query%'";
    $results = $conn->query($sql);

    //Display the results in a table
    if($result->num_rows > 0){
        echo "<h2>Search Results</h2>";
        echo "<table border = '1'>";
        echo '<table><tr><th>Movie ID</th><th>Movie Title</th><th>Release Year</th><th>Rating</th><th>Genre</th></tr>';
        while($row = $results->fetch_assoc()){
            echo "<tr>";
            echo "<td>{$row['mid']}</td>";
            echo "<td>{$row['mname']}</td>";
            echo "<td>{$row['myear']}</td>";
            echo "<td>{$row['mrating']}</td>";
            echo "<td>{$row['mgenre']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
}
else{}
    echo '<table><tr><th>Movie ID</th><th>Movie Title</th><th>Release Year</th><th>Rating</th><th>Genre</th></tr>';

    $sql = "SELECT movies.mid, movies.mname, movies.myear, movies.mrating, genre.mgenre
    FROM movies
    LEFT JOIN genres ON movies.mgenreid = genres.gid"; //Need to gather information from two database tables to post
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr> <td>" . $row["mid"] . "</td><td>" . $row["mname"] . "</td><td>" . $row["myear"] . "</td><td>" . $row["mrating"] . "</td></tr>" . $row["Genre"] . "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    echo '</table>';

    include 'closeDB.php';
?>
<!DOCTYPE html>

<html>
<head>
    <title>Movies Are Rad!</title>
</head>
<body>
    <h1>Form to Submit a Movie</h1>
    
    <!---Sending information collected in form to the database file--->
    <form action="db.php" method="post">
        <label for="mid">Movie ID:</label>
        <input type="text" id="mid" name="mid" required><br><br>

        <label for="mname">Movie Title:</label>
        <input type="text" id="mname" name="mname" required><br><br>

        <label for="myear">Release Year:</label>
        <input type="text" id="myear" name="myear" required><br><br>

        <label for="mrating">Genre:</label>
        <input type="text" id="mrating" name="mrating" required><br><br>

        <label for="mgenreid">Choose a genre:</label>
            <select name="mgenreid" id="mgenreid">
                <!---Figure out how to use php to populate this area with the entries in the genre database--->
                <option value="ACTION GENREID">Action/Adventure</option>
                <option value="COMEDY ID">Comedy</option>
                <option value="DRAMA ID">Drama</option>
                <option value="FANTASY ID">Fantasy/SciFi</option>
            </select>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
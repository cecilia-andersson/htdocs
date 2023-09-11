<?php
    $mid = $_POST['mid'];
    $mname = $_POST['mname'];
    $myear = $_POST['myear'];
    $mrating = $_POST['mrating'];

    //Database connection: make new, test if good, if so then insert data
$conn = new msqli('localhost', 'root', 'root', 'movie');
if($conn->connect_error){
    die('Connection to Database Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(mid, mname, myear, mrating) values(?, ?, ?, ?)");
    $stmt->bind_param("isii", $mid, $mname, $myear, $mrating); //integer vs strings expected
    $stmt->execute();
    echo "Movie added to database!"; //Tell user that it worked
    $stmt->close();
    $conn->close(); //Closing the connection to the database server
}

?>
<?php
    $mid = $_POST['mid'];
    $mname = $_POST['mname'];
    $myear = $_POST['myear'];
    $mrating = $_POST['mrating'];

    //Database connection: make new, test if good, if so then insert data
include 'connect.php';

if($conn->connect_error){
    die('Connection to Database Failed : '.$conn->connect_error);
}else{
    //$sql = "INSERT INTO animals (name, domain, propulsion) VALUES (?, ?, ?)";

    $stmt = $conn->prepare("INSERT INTO movies (mid, mname, myear, mrating) values(?, ?, ?, ?)");
    $stmt->bind_param("isii", $mid, $mname, $myear, $mrating); //integer vs strings expected
    $result = $stmt->execute();

    if ($result) {
        echo "Movie added to database!"; //Tell user that it worked
        } else {
        echo "Error: " . $stmt->error;
        }
    $stmt->close();
    include 'closeDB.php'; //Closing the connection to the database server
}
?>
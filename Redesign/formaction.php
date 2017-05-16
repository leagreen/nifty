<?php

$UserName = $_POST['name'];
$UserEmail = $_POST['email'];
$TripDate = $_POST['date'];
$TripLocation = implode(",", $_POST['tours']);
$Comments = $_POST['comments'];

$connect = new mysqli("aleashagreen.work","aleashag","rgQ7k6f21I", "aleashag_niftycontact");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}


$sql = "INSERT INTO usersubmit (name, email, tripdate, triplocation, comment) VALUES ('$UserName', '$UserEmail', '$TripDate', '$TripLocation', '$Comments')";

if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();

?>
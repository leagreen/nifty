<?php

include 'header.php';

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
    echo "
    <main>
        <section class='Featured'>
            <img src='images/nifty-tours-logo.png' alt='Nifty Logo'>
            <h1>Thank You for Contacting us!</h1>
            <p>An agent will respond to you as soon as possible.</p>
        </section>
    <main>
    ";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();

include 'footer.php';

?>
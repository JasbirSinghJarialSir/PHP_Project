<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you would typically save data to the database

    echo "Registration Successful!<br>";
    echo "Name: $fullname<br>Email: $email<br>Username: $username";
} else {
    echo "Invalid Request";
}

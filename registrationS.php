<?php
// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Collect form data
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];  // Note: should be hashed in real apps

    // 2. Database configuration
    $host     = "localhost";
    $db_user  = "root";
    $db_pass  = "";  // Replace with your MySQL root password
    $db_name  = "db_Project";

    // 3. Create database connection
    $conn = new mysqli($host, $db_user, $db_pass, $db_name);

    // 4. Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 5. Prepare SQL Insert Statement
    $sql = "INSERT INTO tbl_user (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$password')";

    // 6. Prepare
    $stmt = $conn->prepare($sql);
    
    // 7. Execute and check
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // 8. Close
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

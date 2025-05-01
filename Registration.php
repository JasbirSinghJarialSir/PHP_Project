<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<script>alert('{$_SESSION['message']}');</script>";
    unset($_SESSION['message']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Register</h2>
    <form action="registerS.php" method="post">
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>

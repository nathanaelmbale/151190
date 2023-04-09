<?php
if (isset($_GET['username'], $_GET['password'], $_GET['name'], $_GET['location'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $name = $_GET['name'];
    $location = $_GET['location'];

    // Database info
    $host = 'localhost'; 
    $db_username = 'root'; 
    $db_password = ''; 
    $database = 'cat2';

    // Connection object
    $conn = new mysqli($host, $db_username, $db_password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";

    // Update the row in the database
    $sql = "UPDATE `user information` SET `password`='$password', `Name`='$name', `Location`='$location' WHERE `username`='$username'";
    if ($conn->query($sql) === TRUE) {
        // Update session variables
        echo "Record updated successfully";

        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        $_SESSION['location'] = $location;

        header("Location: user.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Error: Please input all the fields.";
}
?>

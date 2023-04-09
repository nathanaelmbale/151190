<?php
session_start(); // start the session

if (isset($_GET['username'], $_GET['password'], $_GET['name'], $_GET['location'])) {
    $firstname = $_GET['username'];
    $_SESSION['username'] = $firstname;

    $name = $_GET['name'];

    $password = $_GET['password'];

    $location = $_GET['location'];


    // Database info
    $host = 'localhost'; 
    $username = 'root'; 
    $db_password = ''; 
    $database = 'cat2';

    // Connection object
    $conn = new mysqli($host, $username, $db_password, $database);

    // Check if the connection was successful
    //if ($conn->connect_error) {
    //    die("Connection failed: " . $conn->connect_error);
    //}

    // Connection successful
    echo "working! <br>";

    // Prepare and execute a SQL query to insert the user information into the table 'user information'
    $sql = "INSERT INTO `user information` (`username`, `password`, `Name`, `Location`) VALUES ('$firstname', '$password', '$name', '$location')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Redirect to user.php page
        header("Location: user.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
        // unset the session variables
        unset($_SESSION['username']);
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        unset($_SESSION['location']);
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Error: Please input all the fields.";
}
?>

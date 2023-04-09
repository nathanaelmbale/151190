<?php
session_start();

// Check if user submitted the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if username and password are set
  if (isset($_POST['username'], $_POST['password'])) {
    // Escape the inputs to prevent SQL injection
    $username = $_POST['username'];
    $password = $_POST['password'];

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

    // Check if the username and password are correct
    $sql = "SELECT * FROM `user information` WHERE `username`='$username' AND `password`='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // Login successful, set session variables
      $_SESSION['username'] = $username;

      // Close the database connection
      $conn->close();

      // Redirect to the user page
      header("Location: user.php");
      exit();
    } else {
      // Login failed, show error message
      $error_message = "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
  } else {
    // Show error message
    $error_message = "Please enter username and password.";
  }
}
?>

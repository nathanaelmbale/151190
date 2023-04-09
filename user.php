<!DOCTYPE html>
<html>
<head>
  <title>My PHP Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php
session_start();
$username = $_SESSION['username'];

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

// Retrieve the user information from the database
$sql = "SELECT `Name`, `password`, `Location` FROM `user information` WHERE `username`='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['name'] = $row['Name'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['location'] = $row['Location'];
}

// Close the database connection
$conn->close();

$name = $_SESSION['name'];
$password = $_SESSION['password'];
$location = $_SESSION['location'];

?>
  <form class="container" action="edit.php" method="get">

    <div class="mb-3 " >
      <label class="form-label username" >Here is your username <b>@<?php echo $username; ?></b></label>
      <input type="text" class="form-control"  value="<?php echo $username; ?>" name="username" id="username" readonly >

    </div>

    <div class="mb-3">
      <label class="form-label">New name. Change your current name</label>
      <input type="text" class="form-control"  value="<?php echo $name; ?>" name="name" placeholder="Type your name">
    </div>

    <div class="mb-3">
      <label class="form-label">New passward.Change your current password</label>
      <input type="text" class="form-control" name="password"  value="<?php echo $password; ?>" placeholder="Type your name">
    </div>
   
    <div class="mb-3">
      <label class="form-label">New location .Change your current location</label>
      <input type="text" class="form-control" name="location"  value="<?php echo $location; ?>" id="location" placeholder="new name">
    </div>

    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
   </form>
  <div class="container">
    <p>Your username: <?php echo $username; ?></p>
    <p>Your name: <?php echo $name; ?></p>
    <p>Your location: <?php echo $location; ?></p>
  </div>

  <form class="container" action="logout.php">
    <div class="mb-3">
      <input type="submit" class="btn btn-outline-danger" value="Log out">
    </div>
  </form>


</body>



</html>

<!DOCTYPE html>
<html>
<head>
  <title>My PHP Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <form class="container" action="post.php" method="get">
  <h3><center>Sign up today</center></h3>
  <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Type your name">
    </div>

    <div class="mb-3">
      <label class="form-label">username</label>
      <input type="text" class="form-control" name="username" placeholder="Type a username">
    </div>
    
    <div class="mb-3">
      <label class="form-label">password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password">
    </div>

    <div class="mb-3">
      <label class="form-label">Location</label>
      <input type="text" class="form-control" name="location" placeholder="Type your location">
    </div>
    

    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
  </form>

  <div class="container">
     <p>Already have an account? <a href="login.php">Log in</a></p>
   </div>
</body>
</html>

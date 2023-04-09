<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <form class="container" action="verify.php" method="post">
    <h1>Login</h1>

    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Enter your username">
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password">
    </div>

    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Login">
    </div>
   </form>
   <div class="container">
     <p>Don't have an account? <a href="index.php">Sign up</a></p>
   </div>
</body>
</html>

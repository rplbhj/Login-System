<?php 

session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Login</title>
  <style>
    
  </style>
</head>
<body>
  <header>
    <nav>
      <h1>Hi</h1>
      <ul>
        <li><a href="kluar.php">Logout</a></li>
      </ul>
    </nav>
  </header>
</body>
</html>
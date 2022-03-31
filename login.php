<?php 

session_start();

if(isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}
  
if(isset($_POST["login"])){

    include 'db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT * FROM user  WHERE username ='$username'");

    if(mysqli_num_rows($cek) === 1) {
        
        $row = mysqli_fetch_assoc($cek);
        if(password_verify($password, $row['password'])){
            
            $_SESSION["login"] = true;
            
            
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>


<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="cok.css">
</head>
<body>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="" method="POST">

			<input type="text" name="username" class="form_login" placeholder="Enter Your Username">
			<input type="password" name="password" class="form_login" placeholder="Enter Your Password">
            <input type="submit" name="login" class="tombol_login" value="LOGIN">
            <br/>
			<br/>
            <button class="tombol_login"><a href="regis.php">REGISTRASI</a></button>
			
            <?php if(isset($error)): ?>
                <P style="color:red; font-style:italic;">Username atau Password Salah</P>
            <?php endif; ?>

		</form>
		
	</div>
 
 
</body>
</html>
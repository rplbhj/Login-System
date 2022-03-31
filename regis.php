<?php 

if(isset($_POST['regis'])){

    include 'db.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password !== $password2){
        echo '<script>
        alert("Password Tidak Sama")
        
        window.location.href="regis.php";
    
        </script>';

        return false;
       
        
    }

    $epassword = password_hash($password, PASSWORD_DEFAULT);

    $tambah = mysqli_query($conn, "INSERT INTO user (nama,username,password) values ('$nama', '$username', '$epassword')");

    if($tambah){
        echo '<script>
            alert("Register Berhasil")
            window.location.href="login.php";
        </script>';

    }

    else{
        echo '<script>
            alert("Register Gagal dan Coba lagi...")
            window.location.href="regis.php";
        </script>';
    }
}


?>
<html>
<head>
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="cok.css">
</head>
<body>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Daftar</p>
 
		<form action="" method="POST">
            <input type="text" name="nama" class="form_login" placeholder="Enter Your Name">    
			<input type="text" name="username" class="form_login" placeholder="Enter Your Username">
			<input type="password" name="password" class="form_login" placeholder="Enter Your Password">
            <input type="password" name="password2" class="form_login" placeholder="Confrim Your Password">
            <input type="submit" name="regis" class="tombol_login" value="DAFTAR">
            <br/>
			<br/>
            <button class="tombol_login"><a href="login.php">LOGIN</a></button>
			
			
		</form>
		
	</div>
 
 
</body>
</html>
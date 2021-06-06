<?php
$conn = new mysqli("localhost","root","","perfume");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman daftar</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form method="POST" action="../index.php">

                <input name="tujuan" type="hidden"  value="DAFTAR">

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <label>Email</label>
                <br>
                <input name="email" type="text">
                <br>
               
                
                <button>Daftar</button>
               
                <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>
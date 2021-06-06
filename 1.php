<?php
$conn = new mysqli("localhost","root","","perfume");
?>
$hostname ="localhost";
$ucername ="root";
$email ="";
$password ="";
$ucer ="database_ucer";
$conn = new mysqli($hostname,$ucername,$email,$password,$ucer);

if ($conn -> Connect_error){
    die("database tidak terkoneksi".$conn -> Connect_error);
} else{
    echo"koneksi ke database berhasil";
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="csshalaman log in.css">
    </head>

    <body>
        <ul id="nav">
    
            <li><a href="home.html">HOME</a></li>
            <li><a href="custom">CUSTOM PERFUME</a></li>
            <li><a href="how">HOW IT WORKS</a></li>
            <li><a href="about us">ABOUT US</a></li>
            <li><a href="login">LOGIN</a></li>
            <li><a href="index.html">ACCOUNT</a></li>
            
            </ul>
        <div class="container">
          <h1>Register</h1>
          <form action="form-add-aksi.php" methode="POST">
                <table>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><input type="text"name="nama"></td>
                </tr>
                <tr>
                    <td>ucername</td>
                    <td>:</td>
                    <td><input type="text"name="ucername"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>:</td>
                    <td><input type="email"name="email"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td>:</td>
                    <td><input type="password"name="password"></td>
                </tr>
                <p> Sudah punya akun?
                  <a href="index.html">Login di sini</a>
                </p>
              
            </form>
            <button type="submit" name="submit">submit</button>
            <button type="reset" name="reset">reset</button>
                
        </div>
    </body>
</html>
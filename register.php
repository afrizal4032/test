<?php
require "template/header.php";
?>
<div class="login">
<h1>REGISTRASI</h1>
<form action="" method="post">
    <label for="">username</label><br>
    <input type="text" name="username" id=""><br>
    <label for="">password</label><br>
    <input type="password" name="password" id=""><br><br>
    <button type="submit" name="register">REGISTER</button>
</form>
</div>
<?php
if(isset($_POST["register"])){
    $username = htmlspecialchars($_POST["username"]);
    $ver = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $verify = mysqli_fetch_assoc($ver);
    if($username === $verify["username"]){
        echo "<script>swal.fire({
        title: 'CANCELLED!',
        text: 'Username sudah ada',
        icon: 'error'
        })</script>";
    }else{
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        for ($i=0; $i < 1; $i++) { 
            $query = mysqli_query($conn, "INSERT INTO user VALUE('$i','$username','$password')");
            if($query){
                echo "<script>swal.fire({
                title: 'SUCCESS!',
                text: 'Registrasi berhasil',
                icon: 'success'
                }).then((result) => {
                if(result.isConfirmed){
                window.location.href = 'login.php';
                }})</script>";
            }
        }
        
    }
}
?>
<?php
require "template/header.php";
?>
<div class="login">
<h1>HALAMAN LOGIN</h1>
<form action="" method="post">
    <label for="">username</label><br>
    <input type="text" name="username" id=""><br>
    <label for="">password</label><br>
    <input type="password" name="password" id=""><br><br>
    <button type="submit" name="login">LOGIN</button>
</form>
<p>Don't have account? <a href="register.php">Register</a></p>
</div>
<?php
if(isset($_POST["login"])){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $result = mysqli_fetch_assoc($query);
    if($username === $result["username"] && password_verify($password, $result["password"])){
        echo "<script>swal.fire({
        title: 'SUCCESS!',
        text: 'Anda berhasil login',
        icon: 'success'
        }).then((result) => {
        if(result.isConfirmed) {
        window.location.href = 'home.php';
        }})</script>";
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
    }else{
        echo "<script>swal.fire({
            title: 'CANCELLED!',
            text: 'Anda gagal login',
            icon: 'error'
            }).then((result) => {
            if(result.isConfirmed){
            window.location.href = 'login.php';
            }});</script>";
    }
}
?>
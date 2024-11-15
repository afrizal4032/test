<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
$result = mysqli_fetch_assoc($query);
?>
<div class="login">
    <h1>EDIT PROFILE</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $result["id"] ?>">
        <label for="">username</label><br>
        <input type="text" name="username" id="" value="<?= $result["username"] ?>"><br>
        <label for="">password</label><br>
        <input type="password" name="password" id="" value="<?= $_SESSION["password"] ?>"><br><br>
        <button type="submit" name="login">EDIT</button>
    </form>
</div>
<?php
if(isset($_POST["login"])){
    $id = $_POST["id"];
    $username = htmlspecialchars($_POST["username"]);
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $edit = mysqli_query($conn, "UPDATE user SET id = '$id', username = '$username', password = '$password' WHERE id = $id");
}
if(isset($edit)) :
?>
<script>
    swal.fire({
        title: "SUCCESS!",
        text: "Profile telah diedit",
        icon: "success"
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "login.php";
            <?php session_destroy(); ?>
        }
    })
</script>
<?php endif; ?>
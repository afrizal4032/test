<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
$username = $_SESSION["username"];
$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
$result = mysqli_fetch_assoc($query);
?>
<div class="profile">
<h1>PROFILE</h1>
<h3>USERNAME : <?= $result["username"] ?></h3>
<h3>PASSWORD : <?= $_SESSION["password"] ?></h3>
<a href="editprofile.php?id=<?= $result["id"] ?>">Edit profile</a>
</div>
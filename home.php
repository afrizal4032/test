<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
?>
<h1 class="h1">SELAMAT DATANG DI BERANDA, <?= $_SESSION["username"] ?></h1>
<?php
require "header.php";
?>
<h1 class="text-center text-primary">REGISTER FORM</h1>
<div class="mt-5 card border border-primary m-auto p-1" style="width: 25rem">
    <form action="login.php" method="post">
        <label for="email">Input email</label><br>
        <input class="w-100" type="email" name="email" id="email"><br>
        <label for="username">Input username</label><br>
        <input class="w-100" type="text" name="username" id="username"><br>
        <label for="password">Input password</label><br>
        <input class="w-100" type="password" name="password" id="password"><br><br>
        <button class="w-100 mb-1 btn btn-primary" name="daftar">Register</button>
    </form>
</div>
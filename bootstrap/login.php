<?php
require "header.php";
?>
    <h1 class="text-primary text-center">LOGIN FORM</h1>
    <div class=" mt-5 card border border-primary m-auto p-1" style="width: 25rem;">
    <form action="home.php" method="post">
      <label for="email">Input Email</label><br>
      <input class="w-100" type="email" name="email" id="email"><br>
      <label for="username">Input username</label><br>
      <input class="w-100" type="text" name="username" id="username"><br>
      <label for="password">Input password</label><br>
      <input class="w-100" type="password" name="password" id="password"><br><br>
      <button class="btn btn-primary w-100 mb-1" type="submit" name="">LOGIN</button>
      </form>
      <p>Belum punya akum? <a style="text-decoration: none;" href="daftar.php">daftar</a></p>
    </div>

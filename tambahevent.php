<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
?>
<div class="event">
    <h1>TAMBAH EVENT</h1>
    <form action="" method="post">
        <label for=""> Event lomba</label><br>
        <input type="text" name="event" id="" required><br>
        <label for="">Penyelenggara</label><br>
        <input type="text" name="penyelenggara" id="" required><br><br>
        <button name="lomba">Tambah event</button>
    </form>
</div>
<?php
if(isset($_POST["lomba"])){
    $event = htmlspecialchars($_POST["event"]);
    $penyelenggara = htmlspecialchars($_POST["penyelenggara"]);
    for ($i=0; $i < 1; $i++) { 
        $query = mysqli_query($conn, "INSERT INTO lomba VALUE('$i','$event','$penyelenggara')");
    }
}
if(isset($query)) :
?>
<script>
    swal.fire({
        title: "SUCCESS!",
        text: "Data telah ditambahkan",
        icon: "success"
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "event.php"
        }
    })
</script>
<?php endif; ?>
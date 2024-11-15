<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM lomba WHERE id = $id");
$result = mysqli_fetch_assoc($query);
?>
<div class="event">
    <h1>EDIT EVENT</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $result["id"] ?>">
        <label for=""> Event lomba</label><br>
        <input type="text" name="event" id="" value="<?= $result["nama"] ?>" required><br>
        <label for="">Penyelenggara</label><br>
        <input type="text" name="penyelenggara" id="" value="<?= $result["penyelenggara"] ?>" required><br><br>
        <button name="lomba">Edit event</button>
    </form>
</div>
<?php
if(isset($_POST["lomba"])){
    $id = $_POST["id"];
    $event = htmlspecialchars($_POST["event"]);
    $penyelenggara = htmlspecialchars($_POST["penyelenggara"]);
    $edit = mysqli_query($conn, "UPDATE lomba SET id = '$id', nama = '$event', penyelenggara = '$penyelenggara' WHERE id = $id");
}
if(isset($edit)) :
?>
<script>
    swal.fire({
        title: "SUCCESS!",
        text: "Data telah diedit",
        icon: "success"
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "event.php"
        }
    })
</script>
<?php endif; ?>
<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM lomba");
$result = mysqli_fetch_assoc($query);
$qur = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id = $id");
$ed = mysqli_fetch_assoc($qur);
?>
<div class="peserta">
    <h1>EDIT PESERTA</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $ed["id"] ?>">
        <label for="">Event lomba</label><br>
        <select name="event" id="" required>
            <option value="<?= $ed["lomba"] ?>"><?= $ed["lomba"] ?></option>
            <?php while ($result = mysqli_fetch_assoc($query)) : ?>
                <option value="<?= $result["nama"] ?>"><?= $result["nama"] ?></option>
            <?php endwhile; ?>
        </select><br>
        <label for="">Nama peserta</label><br>
        <input type="text" name="peserta" id="" value="<?= $ed["pendaftar"] ?>" required><br>
        <label for="">Kelas peserta</label><br>
        <input type="text" name="kelas" id="" value="<?= $ed["kelas"] ?>" required><br>
        <label for="">No.HP peserta</label><br>
        <input type="text" name="nohp" id="" value="<?= $ed["nohp"] ?>" required><br>
        <label for="">Tanggal mendaftar</label><br>
        <input type="date" name="tanggal" id="" value="<?= $ed["tanggal"] ?>" required><br><br>
        <button name="pendaftar">Edit peserta</button>
    </form>
</div>
<?php
if(isset($_POST["pendaftar"])){
    $id = $_POST["id"];
    $lomba = htmlspecialchars($_POST["event"]);
    $peserta = htmlspecialchars($_POST["peserta"]);
    $kelas = htmlspecialchars($_POST["kelas"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $edit = mysqli_query($conn, "UPDATE pendaftaran SET id = '$id', lomba = '$lomba', pendaftar = '$peserta', kelas = '$kelas', nohp = '$nohp', tanggal = '$tanggal' WHERE id = $id");
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
            window.location.href = "peserta.php"
        }
    })
</script>
<?php endif; ?>
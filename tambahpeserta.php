<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
$query = mysqli_query($conn, "SELECT * FROM lomba");
?>
<div class="peserta">
    <h1>TAMBAH PESERTA</h1>
    <form action="" method="post">
        <label for="">Event lomba</label><br>
        <select name="event" id="" required>
            <option value="" disabled selected>PILIH</option>
            <?php while ($result = mysqli_fetch_assoc($query)) : ?>
                <option value="<?= $result["nama"] ?>"><?= $result["nama"] ?></option>
            <?php endwhile; ?>
        </select><br>
        <label for="">Nama peserta</label><br>
        <input type="text" name="peserta" id="" required><br>
        <label for="">Kelas peserta</label><br>
        <input type="text" name="kelas" id="" required><br>
        <label for="">No.HP peserta</label><br>
        <input type="text" name="nohp" id="" required><br>
        <label for="">Tanggal mendaftar</label><br>
        <input type="date" name="tanggal" id="" required><br><br>
        <button name="pendaftar">Tambah peserta</button>
    </form>
</div>
<?php
if(isset($_POST["pendaftar"])){
    $lomba = htmlspecialchars($_POST["event"]);
    $peserta = htmlspecialchars($_POST["peserta"]);
    $kelas = htmlspecialchars($_POST["kelas"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    for ($i=0; $i < 1; $i++) { 
        $tambah = mysqli_query($conn, "INSERT INTO pendaftaran VALUE('$i','$lomba','$peserta','$kelas','$nohp','$tanggal')");
    }
}
if(isset($tambah)) :
?>
<script>
    swal.fire({
        title: "SUCCESS!",
        text: "Data telah ditambahkan",
        icon: "success"
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "peserta.php"
        }
    })
</script>
<?php endif; ?>
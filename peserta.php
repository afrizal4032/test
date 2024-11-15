<?php
require "template/header.php";
require "template/menu.php";
if($_SESSION["username"] && $_SESSION["password"]){}else{
    echo "<script>window.location.href = 'login.php'</script>";
}
$query = mysqli_query($conn, "SELECT * FROM pendaftaran");
?>
<div class="table">
<a class="a" href="tambahpeserta.php">Tambah peserta</a>
<table class="table-mt-10 text-center" border=1 cellpadding=10 cellspacing=0>
    <tr>
        <th>No</th>
        <th>Event lomba</th>
        <th>Nama peserta</th>
        <th>Kelas peserta</th>
        <th>No.Telp peserta</th>
        <th>Tanggal mendaftar</th>
        <th colspan=2>Aksi</th>
    </tr>
    <?php $i = 1 ?>
    <?php while ($result = mysqli_fetch_assoc($query)) : ?>
        <?php
        $tanggal = new DateTime($result["tanggal"]);
        $bulanindo = [
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        $bulan = $tanggal->format('n')
        ?>
        <tr>
            <th class="position: stinky;"><?= $i ?></th>
            <td><?= $result["lomba"] ?></td>
            <td><?= $result["pendaftar"] ?></td>
            <td><?= $result["kelas"] ?></td>
            <td><?= $result["nohp"] ?></td>
            <td><?= $tanggal->format('d')." ".$bulanindo[$bulan]." ".$tanggal->format('Y') ?></td>
            <td><a href="editpeserta.php?id=<?= $result["id"] ?>">Edit</a></td>
            <td><a onclick="hapus(<?= $result['id'] ?>)" href="#">Hapus</a></td>
            <?php $i++ ?>
        </tr>
    <?php endwhile; ?>
</table>
</div>
<script>
    function hapus(id){
        swal.fire({
            title: "WARNING!",
            text: "Data ini akan dihapus?",
            icon: "warning",
            showCancelButton: true,
            cancelButtonColor: "#d33",
            confirmButtonText: "YES!",
            confirmButtonColor: "#3085d6"
        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = "hapuspeserta.php?id=" + id
            }
        })
    }
</script>
<?php
require "event.php";
$id = $_GET["id"];
$hapus = mysqli_query($conn, "DELETE FROM lomba WHERE id = $id");
?>
<?php if(isset($hapus)) { ?>
    <script>
        swal.fire({
            title: "SUCCESS!",
            text: "Data telah dihapus",
            icon: "success"
        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = "event.php"
            }
        })
    </script>
<?php } ?>
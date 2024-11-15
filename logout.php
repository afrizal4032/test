<?php
require "template/header.php";
session_destroy();
?>
<script>
    swal.fire({
        title: "SUCCESS!",
        text: "Anda telah log out",
        icon: "success"
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "login.php";
        }
    })
</script>
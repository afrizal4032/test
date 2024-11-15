<div class="menu">
    <a href="home.php">Beranda</a>
    <a href="peserta.php">Data Peserta</a>
    <a href="event.php">Data Event</a>
    <a href="profile.php">Profile</a>
    <a onclick="logout()" href="#">Log out</a>
</div>
<script>
    function logout() {
        swal.fire({
            title: "WARNING!",
            text: "Apa anda ingin Log out?",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Nope",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!",
            confirmButtonColor: "#3085d6"
        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = "logout.php";
            }
        })
    }
</script>
<!-- this function helps to authenticate if someone is logged in or have access or not -->
<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ../../views/pages/login.php");
        exit();
    }
?>
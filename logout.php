
<?php
    session_start();
    unset($_SESSION['user_portal']);
    header('location:../formularios/login.php');
?>
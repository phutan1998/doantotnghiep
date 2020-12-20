  <?php
    session_start();
    $_SESSION["dangnhap"] = "";
    session_destroy();
    header('Location: ../index.php');
?>  
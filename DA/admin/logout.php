<?php

    session_start();
    $_SESSION["login"] = "";
    $_SESSION["dangnhap"] = "";
    session_destroy();
    header('Location: index.php');
?>
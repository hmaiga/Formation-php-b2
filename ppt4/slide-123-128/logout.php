<?php
    session_start();
    session_destroy();
    setcookie('username', ' ', 1);
    setcookie('password', ' ', 1);

    header('Location: index.php');
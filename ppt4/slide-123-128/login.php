<?php
    session_start();
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === "toto" && $_POST['password'] === "1234") {
            $_SESSION['username'] = $_POST['username'];
            if (isset($_POST['remember'])) {
                if ($_POST['remember'] == "1") {
                    setCookie('username',$_SESSION['username'],time() + 60 * 60 * 24 * 30);
                    setCookie('password',$_SESSION['password'],time() + 60 * 60 * 24 * 30);
                }
            }
            header('Location: index.php');
        }
    }
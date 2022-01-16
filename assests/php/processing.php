<?php
    @session_start();

    //Registration button
    if(isset($_POST['btnPersonalInfoSubmit'])){
        $_SESSION['p'] = 'ok';
    }

    if(isset($_SESSION['p'])){
        //echo 'net';
    }
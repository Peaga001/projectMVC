<?php

    session_start();

    if(isset($_SESSION['id']) && $_SESSION['adm']=='n'){
        header('Location: views/view_home.php');
    }

?>
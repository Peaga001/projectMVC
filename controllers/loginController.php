<?php 

    function getLogin(){

        if ($_POST['enviar']!="") {
            
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $logar = Login($login,$senha);

            return $logar;

        }
    }

    $mnsg = getLogin();

?>
<?php 


    function exibeInfo(){

        session_start();
        $id     = $_SESSION['id'];
        $nome   = $_SESSION['nome'];

        $result = getInfo($id);

        $agencia   = $result['agencia'];
        $conta     = $result['conta'];

        $saldo   = number_format($result['saldo'], 2, ',', '.');
        $credito = number_format($result['credito'], 2, ',', '.');

        print"<div class ='nav'>";
            print"<p><strong>Bem vindo(a) </strong>$nome";
            print"<strong>Agência: </strong>$agencia";
            print"<strong>Conta: </strong>$conta";
            print"<strong>Saldo: </strong>$saldo";
            print"<strong>Crédito: </strong>$credito";

            print"<div class='op_user'>";

                if ($_SESSION['adm']=='s'){
                    print"<a href='../index.php'><img src='../assets/imgs/icons/voltar_icon.png'></a>";
                }

                print"<a><img src='../assets/imgs/icons/user_icon.png'></a>";
                print"<a><img src='../assets/imgs/icons/config_icon.png'></a>";
                print"<a href='../lib/logout.php'><img src='../assets/imgs/icons/icon_sair.png'></a>";

            print"</div>";

        print"</div>";        

    }

    exibeInfo();


        


?>
<?php

    session_start();

    if ($_SESSION['adm']=="s") {

        print"<br>";
            print"<div class='nav-options'>";

                print"<a href='views/view_home.php'>";
                    print"<img class='imgs-nav' src='assets/imgs/icons/user_icon.png'>Minha Conta</a>";

                print"<a href='views/view_aberturaDeConta.php'>";
                    print"<img class='imgs-nav' src='assets/imgs/icons/abrir_conta_icon.png'>Abertura de Contas</a>";

                print"<a href='views/view_allContas.php'>";
                    print"<img class='imgs-nav' src='assets/imgs/icons/relatorio_icon.png'>Relatório</a>";

                print"<a href='lib/logout.php'>";
                    print"<img class='imgs-nav' src='assets/imgs/icons/icon_sair.png'>Sair</a>";



        print"</div>";
        
    }

    else{

        print"<br>";

        print"<div class='nav-options'>";

            print"<a href='views/view_aberturaDeConta.php'>";
                print"<img class='imgs-nav' src='assets/imgs/icons/abrir_conta_icon.png'>Abertura de Contas</a>";

            print"<a href='views/view_Login.php'>";
                print"<img class='imgs-nav' src='assets/imgs/icons/user_icon.png'>Login</a>";

        print"</div>";

    }

    
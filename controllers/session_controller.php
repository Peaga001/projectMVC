<?php

    $indice = $_GET['i'];
    $opcao  = $_GET['op'];

    if ($indice=="" || $indice==null) {
        require_once "components/session/session_default.php";
    }

    else{

        switch ($indice) {

            case 1:

                if ($opcao!="" && $opcao!=0){
                    require_once "components/session/duvidas_gerais/option_$opcao.php";
                }

                break;

            case 2:

                if ($opcao!="" && $opcao!=0){
                    require_once "components/session/nossos_produtos/option_$opcao.php";
                }

                break;

            case 3:

                if ($opcao!="" && $opcao!=0){
                    require_once "components/session/contato/option_$opcao.php";
                }

                break;

            case 4:

                if ($opcao!="" && $opcao!=0){
                    require_once "components/session/sobre_nos/option_$opcao.php";
                }

                break;
        }


    }

   


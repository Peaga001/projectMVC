<?php

    function getDados(){ // RECEBE OS DADOS DIGITADOS PELO USUÁRIO E EXECUTA A FUNÇÃO DA MODEL

        if($_POST['enviar']!="" && $_POST['enviar']!=null){

            $data_ini = $_POST['inicio'];
            $data_fim = $_POST['fim'];

            $periodo   = new Periodo($data_ini,$data_fim);
            $array     = $periodo->geraPeriodo($periodo); //MODEL-GERAPERIODO
            $relatorio = geraRelatorio($array);//CONTROLLER-GERARELATORIO


            if ($relatorio!="" && $relatorio!=null){
                return $relatorio;
            }

        }

        return 0;
    }

    //FUNÇÃO RESPONSÁVEL POR RETORNAR UMA LISTA DE ACORDO COM A QUANTIDADE DE DADOS RECEBIDOS

     function geraRelatorio($array){

        $row = count($array);

        for($i =0; $i < $row; $i++){

            if ($i%2==0){$bgcolor="background-color: white";}else{$bgcolor="background: darkgray";}

            print"<tr class='valores'>";

                print"<td class='colunas' style='$bgcolor'>".$array[$i][nome]."</td>";
                print"<td class='colunas' style='$bgcolor'>".$array[$i][cpf]."</td>";
                print"<td class='colunas' style='$bgcolor'>".$array[$i][agencia]."</td>";
                print"<td class='colunas' style='$bgcolor'>".$array[$i][conta]."</td>";

            print"</tr>";


        }

         exit();
    }





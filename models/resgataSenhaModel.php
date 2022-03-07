<?php

    function alteraSenha($cpf,$login){

        $conn = Connection::getConn();

        $sql = "SELECT id FROM Users WHERE cpf = :cpf and login = :login LIMIT 1";
        $sql = $conn->prepare($sql);
        $sql->bindValue(':cpf',$cpf,PDO::PARAM_INT);
        $sql->bindValue(':login',$login,PDO::PARAM_INT);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        /*if(count($result['id'])){
            
            $id = $result['id'];
            
            $sql = "UPDATE " CONTINUAR AMANHA


        }*/
        



    }
<?php 

    function getInfo($id){

        $conn = Connection::getConn();

        $sql = "SELECT u.agencia,u.conta,s.saldo,s.credito FROM Users u INNER JOIN Saldo s ON u.id = s.id_saldo WHERE id = :id LIMIT 1";
        $sql = $conn->prepare($sql);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        return $result;

    }

    



?>
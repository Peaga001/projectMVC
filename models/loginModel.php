<?php  

    function Login($login,$senha){

        $conn = Connection::getConn();

        $sql = "SELECT id,nome,adm FROM Users WHERE login = :login and senha = :senha";
        $sql = $conn->prepare($sql);
        $sql->bindValue(':login',$login, PDO::PARAM_STR);
        $sql->bindValue(':senha',$senha, PDO::PARAM_STR);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if($result!="" && $result!=null){

            session_destroy();
            session_start();
            $_SESSION['id']     = $result['id'];
            $_SESSION['nome']   = $result['nome'];
            $_SESSION['adm']     = $result['adm'];

            if ($_SESSION['adm']=='s'){
                header('Location: ../index.php');
            }

            else {
                header('Location: ../views/view_home.php');
            }


        }

        else{
            return "Login ou senha incorretos!";
        }

    }

?>
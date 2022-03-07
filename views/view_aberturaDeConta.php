<style>

    body{

        background-color:#20B2AA;
        font-family: 'IBM Plex Sans Arabic', sans-serif;
    }

    form{
        margin-left: 33%;
        margin-top:10%;
        width: 30%;
        height: 750px;
    }
    .form{

        background-color:white;
        padding: 30px;
        border-radius: 4%;
    }

    form label{
        font-size: 40px;
    }

    form input{
        margin-top: 1%;
        margin-bottom: 1%;
        width:100%;
        height: 40px;
        font-size: 20px;
    }

    .form p a{
        text-decoration: none;
        color: black;
    }

    #bt_enviar{
        
        font-size: 25px;
        border: 1px solid white;
        background-color:#20B2AA;
        color: white;
        border-radius: 5px;
        margin-bottom: 5%;
    }

    #bt_voltar{

        position: relative;
        border-bottom: 3px solid #20B2AA;
        border-radius: 5px;
        text-decoration: none;
        left: 43%;

    }

    #bt_voltar img{
        width: 50px;
    }

    
</style>

<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200&display=swap" rel="stylesheet"> 

<?php require_once "../lib/verify_login.php";?>

<form action="" method="post">

    <div class="form">

        <label for="">Nome:
            <input type="text" name="nome">
        </label>

        <label for="">Cpf:
            <input type="text" name="cpf">
        </label>

        <label for="">Login:
            <input type="text" name="login">
        </label>

        <label for="">Senha:
            <input type="password" name="senha">
        </label>

        <input type="submit" id="bt_enviar" name="enviar" value="Enviar">

        <p><a href="view_resgataSenha.php">Esqueci minha senha / </a><a href="view_Login.php"> Login</a></p>

        <?php 

            require_once "../lib/host.php"; 
            require_once "../models/aberturaDeContasModel.php";
            require_once "../controllers/aberturaDeContasController.php";
            
        
        ?>


    <br><a href="../index.php" id="bt_voltar"><img src="../assets/imgs/icons/voltar_icon.png"></a>

    </div>

</form>


<style>

    body{
    
        background-color:#20B2AA;
        font-family: 'IBM Plex Sans Arabic', sans-serif;
    }

    .container{
        position: relative;
        margin-top: 1%;
        background-color: white;
        text-align: center;
        height: 250px;
    }

    form{
        padding: 10px;
    }

    form input{
        border: 1px solid #20B2AA;

    }

    #bt_enviar{
        border-style: none;
        background-color: #20B2AA;
        color: white;
        padding:10px;
        margin-top: 18px;
        margin-bottom: -1%;
        border-radius: 3%;
        font-size: 20px;
        cursor: pointer;
    }

    .relatorio{

        background-color: white;
        height: 750px;
        margin-top: 5%;
    }

    .tabela{
        position: relative;
        left: 10%;
        width: 80%;
        border: 1px solid black;
        padding: 10px;
    }
    .cabecalho{
        background-color: #20B2AA;
        color: white;


    }

    .colunas{
        padding:5px;
        text-align: center;
    }

    #bt_voltar{
        border-bottom: 3px solid #20B2AA;
    }

    #bt_voltar img{
        width: 40px;
    }

</style>

<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200&display=swap" rel="stylesheet"> 

<?php require_once "../lib/verify_login.php";?>

<div class="container">

    <form method="post" action="">

        <h1>Digite o período desejado</h1>

        <label>De:
            <input type="date" name="inicio">
        </label>

        <label>Até:
            <input type="date" name="fim">
        </label> <br>

        <input type="submit" value="Buscar Período" id="bt_enviar" name="enviar">

    </form>


    <a href="../index.php" id="bt_voltar"><img src="../assets/imgs/icons/voltar_icon.png"></a>

    <?php
        require_once "../lib/host.php";
        require_once "../models/allContasModel.php";
        require_once "../controllers/allContasController.php";
    ?>


    <div class="relatorio">
        <br><table class="tabela">
            <tr class="cabecalho">
                <td class="colunas">Nome</td>
                <td class="colunas">Cpf</td>
                <td class="colunas">Agência</td>
                <td class="colunas">Conta</td>
            </tr>

            <?php getDados();?>

        </table>
    </div>



</div>

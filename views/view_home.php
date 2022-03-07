<!DOCTYPE html>
<html lang="pt-br">
<head>

<style>

.nav{

    background-color:#20B2AA;
    font-size: 20px;
    color: #1C1C1C;
    width: 100%;
    height: 100px;
    text-align: left;


}

.nav p{

    padding: 30px;
    margin-top: 0;
    color: white;

}

.nav p strong, .nav a{

    color: black;
    margin-left: 3%;
    text-decoration: none;
}

.nav a{

    font-size: 30px;
    color: black;
}


.options{

    text-align: center;
    height: 500px;
    background-color: #20B2AA;
    margin-top: 4%;
}

.col-01{

    float: left;
    width: 18%;
    margin-left: 5%;
    margin-top: 1%;
    color: black;
    font-size:17px;

}

.col-01 img{
    cursor: pointer;
    width: 70px;
}


.col-01 h4{
    cursor: pointer;
}

.op_user{

    float: right;
    width: 10%;
    margin-top: -5%;

}

.op_user img{
    width: 30px;
    margin-right: 1%;
    cursor: pointer;
}






</style>

    <?php require_once "../lib/verify_logout.php";?>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200&display=swap" rel="stylesheet"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../components/footer/styleFooter.css">

    <title>Home</title>
</head>
<body>

    <?php require_once "../lib/host.php";?>    
    <?php require_once "../models/homeModel.php";?>
    <?php require_once "../controllers/homeController.php";?>

        <div class="options">

            <div class="col-01">

                <h4>Pagamento de Contas</h4>
                    <img src="../assets/imgs/icons/pagamento_de_contas.png">

                <h4>Cartões</h4>
                    <img src="../assets/imgs/icons/cartoes_icon.png">

                <h4>Investir</h4>
                    <img src="../assets/imgs/icons/investir_icon.png">

            </div>

            <div class="col-01">

                <h4>PIX</h4>
                <img src="../assets/imgs/icons/pix_icon.png">

                <h4>Transferências</h4>
                <img src="../assets/imgs/icons/transferencia_icon.png">

                <h4>Depósito por Boleto</h4>
                <img src="../assets/imgs/icons/boleto_icon.png">

            </div>

            <div class="col-01">

                <h4>Depósito por Cheque</h4>
                <img src="../assets/imgs/icons/deposito_por_cheque_icon.png">

                <h4>Recarga</h4>
                <img src="../assets/imgs/icons/recarga_icon.png">

                <h4>Empréstimo</h4>
                <img src="../assets/imgs/icons/emprestimo_icon.png">

            </div>

            <div class="col-01">

                <h4>Financiamento imobiliário</h4>
                <img src="../assets/imgs/icons/financiamento_icon.png">

                <h4>Consórcios</h4>
                <img src="../assets/imgs/icons/consorcio_icon.png">

                <h4>Seguros</h4>
                <img src="../assets/imgs/icons/seguro_icon.png">

            </div>


        </div>


    <?php require_once "../components/footer/footer.php";?>
    
</body>
</html>
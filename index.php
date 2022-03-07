<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="components/nav/navStyle.css">
    <link rel="stylesheet" href="components/footer/styleFooter.css">

    <title>Index</title>

</head>
<body>

<?php require_once "lib/verify_Index.php";?>

    <div class="nav">
        <?php require_once "components/nav/nav.php";?>
    </div>

    
    <?php require_once "controllers/session_controller.php";?>
   

    <?php require_once "components/footer/footer.php";?>


</body>
</html>
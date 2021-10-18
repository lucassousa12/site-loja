<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolf Sports</title>
</head>
<body>
    <!----------MENU---------------------------------------->
    <?php include '../construtores/header.php'?>
    <!--------------CORPO--------------------------------->
        <section class="corpo">
        <section class="banner">
            <img src="../imagens/Cartão Visita.jpeg" alt="">
        </section>
    <!--------------SEÇAO: MAIS VENDIDOS--------------------->
        <?php include '../construtores/sessao-padrao.php' ?>
    <!-------------SEÇÃO: CAMISAS BRASILEIRAS---------------->
        <?php include '../construtores/sessao-padrao.php' ?>
    <!-------------SEÇÃO: CAMISAS iNTERNACIONAIS------------->
        <?php include '../construtores/sessao-padrao.php' ?>
    </section>
    <!------------FOOTER------------------------------------->
    <?php include '../construtores/footer.php' ?>
    <!------------------------------>    
</body>
</html>
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
    <?php include '../html/header.html' ?>
    <!--------------CORPO--------------------------------->
        <section class="corpo">
        <section class="banner">
            <img id="img-banner" src="../imagens/Cartão Visita.jpeg" alt=""/>
        </section>
    <!--------------SEÇAO: MAIS VENDIDOS--------------------->
        <?php include '../html/sessao-padrao.html' ?>
    <!-------------SEÇÃO: CAMISAS BRASILEIRAS---------------->
        <?php include '../html/sessao-padrao.html' ?>
    <!-------------SEÇÃO: CAMISAS iNTERNACIONAIS------------->
        <?php include '../html/sessao-padrao.html' ?>
    </section>
    <!------------FOOTER------------------------------------->
    <?php include_once '../html/footer.html' ?>
    <!------------------------------>    
</body>
</html>
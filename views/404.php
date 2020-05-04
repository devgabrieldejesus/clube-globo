<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=0"/>
    <link href="<?php echo  BASE_URL;?>/assets/css/normalize.css" rel="stylesheet" type="text/css"/> <!--Normalize css-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet"> <!--Fonte-->
    <link rel="icon" type="image/png" sizes="72x72" href="<?php echo  BASE_URL;?>/assets/images/icon-72x72.png"/> <!--Icon 72x72-->
    <title>Clube Globo</title><!--Titulo-->
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="<?php echo  BASE_URL;?>">
                <img src="<?php echo  BASE_URL;?>/assets/images/logo.png" alt="Logo do Clube Globo"/>
            </a>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="thumbnail">
            <img src="<?php echo BASE_URL;?>/assets/images/404.png"/>
        </div>
        <div class="options">
            <a href="<?php echo BASE_URL;?>painel" class="active">Ir para o inicio</a>
            <a href="<?php echo BASE_URL;?>#ajuda">Fale conosco</a>
        </div>
        <div class="social">
            <a href="https://twitter.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/twitter-logo.png"/></a>
            <a href="https://www.facebook.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/facebook-logo.png"/></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/instagram-logo.png"/></a>
            <a href="https://www.youtube.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/youtube-logo.png"/></a>
        </div>
    </div>
</section>
</body>
</html>
<!--========================================ESTILO========================================-->
<style>
    * {
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'Poppins', sans-serif;
        font-style:normal;
    }
    body {
        background-color:#FFF;
    }
/*========================================HEADER========================================*/
    header {
        height:65px;
        display:flex;
        justify-content:center;
    }
    .logo{
        display:flex;
        align-items:center;
    }
/*========================================Container========================================*/
    .container {
        width:644px;
        display:flex;
        align-items:center;
        flex-direction:column;
        justify-content:center;
    }
/*========================================Area========================================*/
    section {
        display:flex;
        justify-content:center;
    }
/*========================================Imagem 404========================================*/
    .thumbnail {
        margin-top:100px;
    }
/*========================================Opções========================================*/
    .options {
        margin-top:30px;
        margin-bottom:40px;
    }
    .options a{
        outline:none;
        color:#262626;
        font-weight:300;
        text-decoration:none;
        padding:10px 20px;
        margin-left:10px;
        margin-right:10px;
        border-radius:30px;
        border:1px solid #3A3A3A;
    }
    .options .active {
        color:#FFF;
        background-color:#25B9FF;
    }
/*========================================Redes sociais========================================*/
    .social a{
        padding:18px;
    }
/*========================================RESPONSIVIDADE========================================*/
    @media (max-width:500px) {
        .thumbnail img {
            height:180px;
        }
        .options a {
            margin-left:5px;
            margin-right:5px;
            padding:10px 15px;
        }
    }
</style>
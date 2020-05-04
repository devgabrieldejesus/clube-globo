<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=0"/>
    <link href="<?php echo  BASE_URL;?>/assets/css/normalize.css" rel="stylesheet" type="text/css"/> <!--Normalize css-->
    <link href="<?php echo  BASE_URL;?>/assets/css/template-painel.css" rel="stylesheet" type="text/css"/> <!--Meu css-->
    <link href="<?php echo  BASE_URL;?>/assets/css/template-content.css" rel="stylesheet" type="text/css"/> <!--Css dos conteudos-->
    <link rel="icon" type="image/png" sizes="72x72" href="<?php echo  BASE_URL;?>/assets/images/icon-72x72.png"/> <!--Icon 72x72-->
    <title>Clube Globo</title><!--Titulo-->
</head>
<body>
<!--========================================HEADER========================================-->
    <header>
        <div class="container-header">
            <div class="header-left">
                <div class="menu">
                    <input type="checkbox" id="checkbox"/>
                    <label for="checkbox" class="menu-icon"><img src="<?php echo BASE_URL;?>assets/images/menu.png" lt="Menu principal"/></label>
<!--========================================MENU LATERAL========================================-->
                    <div class="background-menu"></div>
                    <nav class="menu-lateral" id="principal">
                        <div class="logo">
                            <a href="<?php echo BASE_URL;?>painel"><img src="<?php echo BASE_URL;?>assets/images/logo.png"/></a>
                        </div>
                        <ul>
                            <li><a href="" class="voltar"><img src="<?php echo BASE_URL;?>assets/images/menu-close.png" alt="Menu principal"/>Fechar menu</a></li>
                            <li><a href="<?php echo BASE_URL;?>painel"><img src="<?php echo BASE_URL;?>assets/images/home.png" alt="Inicio"/>Inicio</a></li>
                            <li><a href="<?php echo BASE_URL;?>g1">G1<span class="<?php echo($viewData['user']['perguntas']['informacoes'] == 'true')? 'menu-ativo':'menu-inativo'?>"><?php echo($viewData['user']['perguntas']['informacoes'] == 'true')? 'Ativo':'Inativo'?></span></a></li>
                            <li><a href="<?php echo BASE_URL;?>ge">Globo Esporte<span class="<?php echo($viewData['user']['perguntas']['esportes'] == 'true')? 'menu-ativo':'menu-inativo'?>"><?php echo($viewData['user']['perguntas']['esportes'] == 'true')? 'Ativo':'Inativo'?></span></a></li>
                            <li><a href="<?php echo BASE_URL;?>gshow">Gshow<span class="<?php echo($viewData['user']['perguntas']['entretenimento'] == 'true')? 'menu-ativo':'menu-inativo'?>"><?php echo($viewData['user']['perguntas']['entretenimento'] == 'true')? 'Ativo':'Inativo'?></span></a></li>
                            <li><a href="<?php echo BASE_URL;?>gnt">Gnt<span class="<?php echo($viewData['user']['perguntas']['entretenimento'] == 'true')? 'menu-ativo':'menu-inativo'?>"><?php echo($viewData['user']['perguntas']['entretenimento'] == 'true')? 'Ativo':'Inativo'?></span></a></li>
                            <li><a href="<?php echo BASE_URL;?>gloob">Gloob<span class="<?php echo($viewData['user']['perguntas']['infantil'] == 'true')? 'menu-ativo':'menu-inativo'?>"><?php echo($viewData['user']['perguntas']['infantil'] == 'true')? 'Ativo':'Inativo'?></span></a></li>
                            <li><a href="<?php echo BASE_URL;?>oglobo">O Globo<span class="<?php echo($viewData['user']['perguntas']['informacoes'] == 'true')? 'menu-ativo':'menu-inativo'?>"><?php echo($viewData['user']['perguntas']['informacoes'] == 'true')? 'Ativo':'Inativo'?></span></a></li>
                            <li><a href="<?php echo BASE_URL;?>globonews">Globonews<span class="<?php echo($viewData['user']['perguntas']['informacoes'] == 'true')? 'menu-ativo':'menu-inativo'?>">Assinar</span></a></li>
                            <li><a href="<?php echo BASE_URL;?>globoplay">Globoplay<span class="<?php echo($viewData['user']['perguntas']['entretenimento'] == 'true')? 'menu-ativo':'menu-inativo'?>">Assinar</span></a></li>
                            <!--Botão para assinar o club globo-->
                            <span><div class="assinar-agora"><a href="<?php echo BASE_URL;?>assinar">Assine agora</a></div></span>
                        </ul>
                    </nav>
                </div>
                <div class="search-thumbnail"><img src="<?php echo BASE_URL;?>assets/images/search.png" alt="Menu"/></div>
                <div class="search">
                    <form>
                        <input type="search" placeholder="Pesquise aqui...">
                    </form>
                </div>
            </div>
            <div class="header-right">
                <div class="notification">
                    <img src="<?php echo BASE_URL;?>assets/images/notification.png"/>
                    <div class="notification-content">
                        <div class="notification-item"><p>Moro diz à PF que...</p>13h</div>
                        <div class="notification-item"><p>Jornalista são agreditos...</p>12h</div>
                        <div class="notification-item"><p>Covid: hospital para...</p>09h</div>
                        <div class="notification-item"><p>Bebê de 4 meses com Covid...</p>07h</div>
                    </div>
                </div>
                <div class="settings"><img src="<?php echo BASE_URL;?>assets/images/settings.png"/></div>
                <div class="profile">
                    <img src="<?php echo BASE_URL;?>assets/images/profile-picture.png"/>
                    <div class="nome-user"><?php echo $viewData['user']['nome'];?></div>
                    <div class="drop-down"><img src="<?php echo BASE_URL;?>assets/images/down-arrow.png"/></div>
                    <div class="profile-content">
                        <a href="<?php echo BASE_URL;?>painel"><div class="profile-item"><p>Painel</p></div></a>
                        <a href="<?php echo BASE_URL;?>perfil"><div class="profile-item"><p>Minha conta</p></div></a>
                        <a href="<?php echo BASE_URL;?>login/logout"><div class="profile-item"><p>Sair</p></div></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!--========================================CONTAINER GERAL========================================-->
<?php $this->loadViewInTemplate($viewName, $viewData) ?>
<!--========================================FOOTER========================================-->
    <footer>
        <div class="container-footer">
            <div class="footer-social">
                <a href="https://twitter.com/" target="_blank"><img src="<?php echo  BASE_URL;?>assets/images/twitter-logo.png"/></a>
                <a href="https://www.facebook.com/" target="_blank"><img src="<?php echo  BASE_URL;?>assets/images/facebook-logo.png"/></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo  BASE_URL;?>assets/images/instagram-logo.png"/></a>
                <a href="https://www.youtube.com/" target="_blank"><img src="<?php echo  BASE_URL;?>assets/images/youtube-logo.png"/></a>
            </div>
            <div class="footer-menu">
                <nav>
                    <ul>
                        <li><a href="<?php echo BASE_URL;?>sobre">SOBRE</a></li>
                        <li><a href="<?php echo BASE_URL;?>ajuda">AJUDA</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <script>const BASE_URL = '<?php BASE_URL; ?>' </script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script.js"></script>
</body>
</html>
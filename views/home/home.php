<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=0"/>
    <link href="<?php echo  BASE_URL;?>/assets/css/normalize.css" rel="stylesheet" type="text/css"/> <!--Normalize css-->
    <link href="<?php echo  BASE_URL;?>/assets/css/template.css" rel="stylesheet" type="text/css"/> <!--Meu css-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet"><!-- Fonte-->
    <link rel="icon" type="image/png" sizes="72x72" href="<?php echo  BASE_URL;?>/assets/images/icon-72x72.png"/> <!--Icon 72x72-->
    <title>Clube Globo</title><!--Titulo-->
</head>
<body>
<!--========================================HEADER========================================-->
<div id="background">
    <header>
        <div class="container">
            <div class="logo">
            <a href="<?php echo  BASE_URL;?>/">
                <img src="<?php echo  BASE_URL;?>/assets/images/logo.png" alt="Logo do Clube Globo"/>
            </a>
            </div>
            <div class="menu">
                <nav>
                    <div class="menuMobile"></div><!--Menu mobile-->
                    <ul>
                        <li><a href="<?php echo  BASE_URL;?>#sobre">SOBRE</a></li>
                        <li><a href="<?php echo  BASE_URL;?>#ajuda">AJUDA</a></li>
                        <li class="login open-modal-login"><a>ENTRAR</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!--========================================BANNER========================================-->
    <section id="banner">
        <div class="container">
            <div class="banner-headline">
                <h1>
                    Tenha acesso a todos os 
                    contéudos da Globo
                    em um só  lugar.
                </h1>
                <h2>
                    O Clube Globo reúne todos os conteúdos da Globo em um 
                    só lugar! Você pode personalizar do seu jeito, interagir com 
                    seus programas favoritos e acumular pontos que você 
                    pode trocar por produtos e prêmios exclusivos!
                </h2>
                <div class="comecar-agora open-modal">
                    <a>Comece agora</a>
                </div>
            </div>
            <div class="banner-thumbnail">
                <img src="<?php echo  BASE_URL;?>/assets/images/banner-thumbnail.png" alt="Notebook e Celular com imagens do sistema">
            </div> 
        </div>
    </section>
</div>
<!--========================================SOBRE========================================-->
    <section id="sobre">
        <div class="container column">
            <h1>O Clube Globo</h1>
            <h2>
                O Clube Globo é uma plataforma totalmente interativa, onde os usuários terão a melhor experiência Globo, com acesso a 
                todos os produtos de maneira exclusiva e com muita diversão e interatividade. Aqui você encontra toda a nossa programação 
                da Globo e pode acompanhar e interagir de maneira personalizada, você escolhe seus conteúdos preferidos e os programas 
                que quer ver, tudo do seu jeito e conforme seu perfil. E o melhor disso: tudo em um só lugar, sem precisar abrir diversos 
                aplicativos para consumir os diferentes produtos.
            </h2>
            <div class="sobre-area">
                <div class="sb-1 column">
                    <div class="sobre-area-title">Informações</div>
                    <div class="sobre-area-body">
                        <img src="<?php echo  BASE_URL;?>/assets/images/globo-news-logo.png" alt="Logo da Globo News"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/g1-logo.png" alt="Logo do G1"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/o-globo-logo.png" alt="Logo do O Globo"/>
                    </div>
                </div>
                <div class="sb-2 column">
                    <div class="sobre-area-title">Entretenimento</div>
                    <div class="sobre-area-body">
                        <img src="<?php echo  BASE_URL;?>/assets/images/bbb-logo.png" alt="Logo do bbb"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/gnt-logo.png" alt="Logo da Gnt"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/globoplay-logo.png" alt="Logo do Globoplay"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/globosat-logo.png" alt="Logo do Globosat"/>
                    </div>
                </div>
                <div class="sb-3 column">
                    <div class="sobre-area-title">Esportes</div>
                    <div class="sobre-area-body">
                        <img src="<?php echo  BASE_URL;?>/assets/images/globo-esporte-logo.png" alt="Logo do Globo Esporte"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/sportv-logo.png" alt="Logo do SporTV"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/canal-off-logo.png" alt="Logo do OFF"/>
                    </div>
                </div>
                <div class="sb-4 column">
                    <div class="sobre-area-title">Música</div>
                    <div class="sobre-area-body">
                        <img src="<?php echo  BASE_URL;?>/assets/images/multishow-logo.png" alt="Logo do Multishow"/>
                        <img src="<?php echo  BASE_URL;?>/assets/images/bis-logo.png" alt="Logo do bis"/>
                    </div>
                </div>
                <div class="sb-5 column">
                    <div class="sobre-area-title">Infantil</div>
                    <div class="sobre-area-body">
                        <img src="<?php echo  BASE_URL;?>/assets/images/gloob-logo.png" alt="Logo do Gloob"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--========================================COMECE AGORA========================================-->
    <section id="comece-agora" class="open-modal">
        <h1>
            Tenha acesso a todos os contéudos da Globo em um só lugar
            E o melhor de tudo: do seu jeito
        </h1>
        <a>Comece agora</a>
    </section>
<!--========================================AJUDA========================================-->
    <section id="ajuda">
        <div class="container column">
            <h1>Dúvidas mais frequentes</h1>
            <h2>
                Respondemos algumas duvidas frequentes dos usuários. Caso você tenha alguma dúvida, crítica, sugestão entre 
                em contato conosco através do SAC Clube Globo ou pelas nossas redes sociais, estaremos sempre disponíveis para atendê-los!
            </h2>
            <div class="ajuda-area">
                <div class="aj-1 column">
                    <div class="ajuda-area-title">Quais são os benefícios de ser assinante?</div>
                    <div class="ajuda-area-body">
                        Os assinantes tem acesso a conteúdos e produtos Globo 
                        especiais e exclusivos para assinantes, e podem acumular 
                        pontos ao interagir no Clube Globo. Esses pontos podem 
                        ser trocados por vários prêmios e muitas outras coisas.
                    </div>
                </div>
                <div class="aj-2 column">
                    <div class="ajuda-area-title">Como faço para ser assinante?</div>
                    <div class="ajuda-area-body">
                        Para ser assinante basta clicar no botão "Seja um assinante" 
                        e escolher o melhor plano para você. Depois de escolhido 
                        e confirmado, você já pode começar a usar o Clube Globo 
                        como assinante.
                    </div>
                </div>
                <div class="aj-3 column">
                    <div class="ajuda-area-title">Como funciona o programa de pontos do Clube Globo (GPontos)</div>
                    <div class="ajuda-area-body">
                        Conforme vai usando os serviços e participando das 
                        interações na plataforma, o usuário vai acumulando 
                        pontos que podem ser trocados por diversos prêmios 
                        e produtos (Ex: Ao se cadastrar, o usuário já 
                        acumula 100 GPontos).
                    </div>
                </div>
                <div class="aj-4 column">
                    <div class="ajuda-area-title">Quais os serviços que o Clube Globo oferece?</div>
                    <div class="ajuda-area-body">
                        O Clube Globo te dá acesso a todos os conteúdos da Globo 
                        (Globonews, Globoplay, BBB, Gloob e muito mais) com direito 
                        a diversas plataforma de interação com seus programas 
                        favoritos. O Clube Globo tem o diferencial de ser uma 
                        plataforma totalmente sua: você personaliza o seu menu 
                        com a sua programação Globo preferida, tudo do seu jeito!
                    </div>
                </div>
                <div class="aj-5 column">
                    <div class="ajuda-area-title">Estou com problemas para fazer login, o que faço?</div>
                    <div class="ajuda-area-body">
                        Caso esteja com dúvidas ou problemas para acessar e fazer 
                        login no Clube Globo, entre em contato conosco através do 
                        e-mail clubeglobo@sac.com.
                    </div>
                </div>
                <div class="aj-6 column">
                    <div class="ajuda-area-title">Como faço para acessar o Clube Globo?</div>
                    <div class="ajuda-area-body">
                        Para acessar é fácil: entre na página inicial do Clube Globo, 
                        faça seu login com e-mail e senha e comece a usar hoje 
                        mesmo a plataforma.
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--========================================FOOTER========================================-->
    <footer>
        <div class="container column">
            <div class="footer-area">
                <div class="ft-1"><img src="<?php echo  BASE_URL;?>/assets/images/logo.png"/></div> <!--Footer 1-->
                <div class="ft-2 open-modal"><a>ENTRE PARA O CLUBE</a></div> <!--Footer 2-->
                <div class="ft-3"> <!--Footer 3-->
                    <nav>
                        <ul>
                            <li><a href="<?php echo  BASE_URL;?>#sobre">SOBRE</a></li>
                            <li><a href="<?php echo  BASE_URL;?>#ajuda">AJUDA</a></li>
                            <li class="login-ft open-modal-login"><a>ENTRAR</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer-copy"> <!--Footer copy-->
                <div class="footer-copy-social">
                    <a href="https://twitter.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/twitter-logo.png"/></a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/facebook-logo.png"/></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/instagram-logo.png"/></a>
                    <a href="https://www.youtube.com/" target="_blank"><img src="<?php echo  BASE_URL;?>/assets/images/youtube-logo.png"/></a>
                </div>
            </div>
        </div>
    </footer>

<!--========================================MODAL CADASTRO========================================-->
    <div id="modal-cadastro" class="modal-container">
        <div class="modal column">
            <button class="fechar">X</button>
            <h3>Faça seu cadastro no Clube Globo.</h3>
            <div class="erro-cadastro error"></div>
            <form id="form-cadastro">
                <div class="modal-cadastro-area column">
                    <div class="modal-cadastro-1">
                    <div class="modal-cadastro-item"><label for="novo_nome">Nome:</label><input id="novo_nome" type="text" autocomplete="off" required/></div>
                        <div class="modal-cadastro-item"><label for="novo_email">Email:</label><input id="novo_email" type="email" autocomplete="off" required/></div>
                        <div class="modal-cadastro-item"><label for="phone">Telefone:</label><input id="phone" type="phone" autocomplete="off" required/></div>
                        <div class="modal-cadastro-item"><label for="novo_password">Senha:</label><input id="novo_password" type="password" autocomplete="off" required/></div>
                    </div>
                    <h4>O que você mais gosta de vê ?</h4>
                    <div class="modal-cadastro-2">
                    <!--Card Nóticias-->
                        <label for="noticias">
                            <input type="checkbox" id="noticias"/>
                            <div class="modal-cadastro-card">Nóticias</div>
                        </label>
                    <!--Card Entretenimento-->
                        <label for="entretenimento">
                            <input type="checkbox" id="entretenimento"/>
                            <div class="modal-cadastro-card">Entretenimento</div>
                        </label>
                    <!--Card Esporte-->
                        <label for="esporte">
                            <input type="checkbox" id="esporte"/>
                            <div class="modal-cadastro-card">Esporte</div>
                        </label>
                    <!--Card Música-->
                        <label for="musica">
                            <input type="checkbox" id="musica"/>
                            <div class="modal-cadastro-card">Música</div>
                        </label>
                    <!--Card Infantil-->
                        <label for="infantil">
                            <input type="checkbox" id="infantil"/>
                            <div class="modal-cadastro-card">Infantil</div>
                        </label>
                    <!--Card Colinaria-->
                        <label for="colinaria">
                            <input type="checkbox" id="colinaria"/>
                            <div class="modal-cadastro-card">Colinaria</div>
                        </label>
                    </div>
                    <div class="modal-cadastro-3">
                        <div class="modal-cadastro-3-termos"><input type="checkbox" id="termos" required/><label for="termos">Li e concordo com os Termos de Uso e Política de Privacidade. </label></div>
                        <button>Comece agora</button>
                            <span class="open-modal-login"><a>ENTRAR</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!--========================================MODAL LOGIN========================================-->
<style>
</style>
    <div id="login" class="login-container">
        <div class="modal-login">
            <button class="fechar-login">X</button>
            <h3>Entre agora no seu Clube Globo</h3>
            <form>
                <div class="erro-login"></div>
                <label for="email">Email:</label><input id="email" type="email" autocomplete="off" required/>
                <label for="password">Senha:</label><input id="password" type="password" autocomplete="off" required/>
                <div class="login-options">
                    <a href="">Esqueceu seu dados de login?</a>
                    <button>Entrar</button>
                </div>
                <div class="login-register open-modal" >
                    Não tem conta? <a>Cadastre-se</a>.
                </div>
            </form>
        </div>
    </div>
<!--========================================PUXANDO TODO O SCRIPT DA HOME========================================-->
    <script>const BASE_URL = '<?php BASE_URL; ?>' </script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script.js"></script>
</body>
</html>
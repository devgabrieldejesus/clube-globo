<!--========================================PERFIL========================================-->
<section id="geral">
    <div class="container-geral column">
<!--========================================CAPA========================================-->
        <label for="enviar-fotodeCapa">
            <div class="capa" style="background-image:url('../assets/images/capa.png');background-size:cover;background-position:center;background-repeat:no-repeat;"> <!--Foto de capa-->
                <div class="picture-perfil">
                    <img src="<?php echo BASE_URL;?>assets/images/avatar.png"/> <!--Foto de perfil-->
                </div>
                <div class="enviar-fotodeCapa">
                    Enviar foto de capa
                    <form>
                        <input type="file" id="enviar-fotodeCapa"/>
                    </form>
                </div>
            </div>
        </label>
<!--========================================BARRA DE OPÇÕES DO PERFIL========================================-->
        <div class="barra-options">
            <a class="editPerfil">Editar perfil</a>
            <a class="editConteudo">Qual contéudo você quer vê?</a>
        </div>
<!--========================================CORPO DO PERFIL========================================-->
        <div class="body-profile">
            <div class="sobre">
                <div class="body-content">
                    <div class="body-profile-title">Sobre</div>
                    <div class="body-profile-bio">
                        <div class="body-profile-text">Minha bio</div>
                    </div>
                    <div class="body-profile-ingressou">
                        <div class="body-profile-subTitle">Ingressou:</div>
                        <div class="body-profile-others">30 de Abril de 2020</div>
                    </div>
                    <div class="body-profile-de">
                        <div class="body-profile-subTitle">De:</div>
                        <div class="body-profile-others">Rio de Janeiro, Brasil</div>
                    </div>
                </div>
            </div>
            <div class="globo-pontos">
                <div class="body-content">
                    <div class="body-profile-title">Globo pontos</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <div class="gpontos column">
                        100 G Pontos
                    </div>
                    <div class="body-profile-subTitle gpontos-option">Como receber G pontos ?</div>
                </div>
            </div>
            <div class="favoritos">
                <div class="body-content">
                    <div class="body-profile-title">Favoritos</div>
                    <div class="body-favoritos">
                        <div class="body-favoritos-item">Novelas</div>
                        <div class="body-favoritos-item">Esporte</div>
                        <div class="body-favoritos-item">Filmes</div>
                        <div class="body-favoritos-item">Musica</div>
                        <div class="body-favoritos-item">Séries</div>
                        <div class="body-favoritos-item">Notícias</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================================MODAL EDITAR PERFIL========================================-->
<div id="editarPerfil" class="editar-perfil-container">
    <div class="modal-editar-perfil">
        <button class="fechar-modal-perfil">X</button>
        <h3>Edite seu perfil</h3>
        <form>
            <label for="avatar">
                <div class="new-picture-perfil"><img src="<?php echo BASE_URL;?>assets/images/edit-avatar.png"/></div>
                Alterar foto do perfil
                <input type="file" id="avatar"/>
            </label>
            <label for="nome">Nome:</label>
            <input type="text" id="nome"/>
            <label for="bio">Bio:</label>
            <input type="text" id="bio"/>
            <label for="email">Email:</label>
            <input type="email" id="email"/>
            <div class="erro-edit-perfil">Sua senha atual for inserida incorretamente.</div>
            <label for="new-senha">Senha atual:</label>
            <input type="password" id="new-senha" required/>
            <label for="senha">Nova senha:</label>
            <input type="password" id="senha"/>
            <button class="button">Salvar alterações</button>
        </form>
    </div>
</div>
</div>

<!--========================================MODAL EDITAR CONTEUDO========================================-->
<div id="editConteudo" class="edit-conteudo-container">
    <div class="modal-edit-conteudo">
        <button class="fechar-modal-conteudo">X</button>
        <h3>Qual conteúdo você quer ver?</h3>
        <form>
            <div class="fechar-modal-conteudo-item">
<!--Card Nóticias-->
                <input type="checkbox" id="noticias"/>
                <div class="modal-conteudo-card">
                    <label for="noticias">Notícias</label>
                </div>
<!--Card Entretenimento-->
                <input type="checkbox" id="entretenimento"/>
                <div class="modal-conteudo-card">
                    <label for="entretenimento">Entretenimento</label>
                </div>
<!--Card Esporte-->
                <input type="checkbox" id="esporte"/>
                <div class="modal-conteudo-card">
                    <label for="esporte">Esporte</label> 
                </div>
<!--Card Música-->
                <input type="checkbox" id="musica"/>
                <div class="modal-conteudo-card">
                    <label for="musica">Música</label>
                </div>
<!--Card Infantil-->
                <input type="checkbox" id="infantil"/>
                <div class="modal-conteudo-card">
                    <label for="infantil">Infantil</label>
                </div>
<!--Card Colinaria-->
                <input type="checkbox" id="colinaria"/>
                <div class="modal-conteudo-card">
                    <label for="colinaria">Culinária</label>
                </div>
            </div>
            <button class="button">Salvar alterações</button>
        </form>
    </div>
</div>
</div>
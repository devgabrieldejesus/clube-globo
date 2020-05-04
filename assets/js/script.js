//=====================================================SCRIPT PARA O MENU MOBILE DA PÁGINA HOME=====================================================
window.onload = function() {
    menuMobile = document.querySelector(".menuMobile");
    if(menuMobile){
        document.querySelector(".menuMobile").addEventListener("click", function() {
            if(document.querySelector(".menu nav ul").style.display == 'flex') {
                document.querySelector(".menu nav ul").style.display = 'none';
            } else {
                document.querySelector(".menu nav ul").style.display = 'flex';
            }
        });
    }
};
//=====================================================MODAIS CADASTRO E LOGIN==================================================================
function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);
//Se ele não consegui selecionar vai da falso e então ele não executa o código
    if(modal) {
        document.getElementById('login').classList.remove('mostrar');
        document.getElementById('modal-cadastro').classList.remove('mostrar');//Tirar a class mostrar dos dois modais
        document.querySelectorAll('.error').forEach((item)=>{
            item.classList.remove('error');//remove o erro antes de abrir o modal
        })
        modal.classList.add('mostrar'); //Listar todas as class e adicionar a que eu quero
        modal.addEventListener('click', (e) => {
//Se clicar fora do modal ou no botão de x fecha o modal
            if(e.target.id == modalID || e.target.className == 'fechar' || e.target.className == 'fechar-login'){
                modal.classList.remove('mostrar');
            }
        });
    }
}

    const formCadastro = document.querySelectorAll('.open-modal a'); /*Ao Clicar */
    const formLogin = document.querySelectorAll('.open-modal-login a'); // Ao clicar aqui
    const login = document.querySelector('#login form');
    const cadastro = document.querySelector('#modal-cadastro form');
    formCadastro.forEach((item)=>{
        item.addEventListener('click', () => iniciaModal('modal-cadastro'));
    }); /*Ativa em todos os botões a função para abrir o modal de cadastro*/
    formLogin.forEach((item)=>{
        item.addEventListener('click', () => iniciaModal('login'));
    });/*Ativa em todos os botões a função para abrir o modal de login*/
    if(login){
        login.addEventListener('submit', (e) => user_login(e));
    }
    if(cadastro){
        cadastro.addEventListener('submit', (e) => user_cadastro(e));
    }

//=====================================================MODAL DE EDITAR PERFIL=====================================================

//=====================================================AJAX LOGIN=====================================================    
function user_login(e){
    e.preventDefault();
    let url = BASE_URL+'login';
    let out = new FormData();
    let email = document.querySelector('#email').value;
    let pass = document.querySelector('#password').value;
    out.append('email', email);
    out.append('pass', pass);
    let params = {
        method: 'POST',
        body: out
    };
    fetch(url, params)
        .then((r)=>r.json())
        .then((json)=>{
            if(json['error']){
                let el = document.querySelector('.erro-login');
                el.innerHTML = json['mensagem'];
                el.classList.add('error');
            }else{
                window.location.href = BASE_URL+"painel";
            }
        });
}
//=====================================================AJAX CADASTRO=====================================================
function user_cadastro(e){
    e.preventDefault();
    let url = BASE_URL+'login/novo_usuario';
    let out = new FormData();
    let name = document.querySelector('#novo_nome').value;
    let email = document.querySelector('#novo_email').value;
    let phone = document.querySelector('#phone').value;
    let pass = document.querySelector('#novo_password').value;
    let resp = document.querySelectorAll('#form-cadastro .modal-cadastro-2 input[type="checkbox"]');
    let resposta = [];
    resp.forEach((item, index)=>{
        resposta[index] = item.getAttribute("id")+"="+item.checked; 
    });
    resposta = resposta.join(",");
    out.append('nome', name);
    out.append('email', email);
    out.append('phone', phone);
    out.append('pass', pass);
    out.append('resp', resposta);
    let params = {
        method: 'POST',
        body: out
    };
    fetch(url, params)
    .then((r)=>r.json())
    .then((json)=>{
        if(json['error']){
            let el = document.querySelector('.erro-cadastro');
            el.innerHTML = json['mensagem'];
            el.classList.add('error');
        }else{
            window.location.href = BASE_URL+"perfil";
        }
    });
}
function iniciaEditarPerfil(editarPerfilID) {
    const editarPerfil = document.getElementById(editarPerfilID);
        if(editarPerfil) {
        editarPerfil.classList.add('mostrar-editar-perfil');
        editarPerfil.addEventListener('click', (eEditProfile) => {
        if(eEditProfile.target.id == editarPerfilID || eEditProfile.target.className == 'fechar-modal-perfil') {
            editarPerfil.classList.remove('mostrar-editar-perfil');
        }
        });
    }
  }

  const editPerfil = document.querySelector('.editPerfil');
  editPerfil.addEventListener('click', () => iniciaEditarPerfil('editarPerfil'));

  function iniciaEditConteudo(editarConteudoID) {
    const editConteudo = document.getElementById(editarConteudoID);
        if(editConteudo) {
        editConteudo.classList.add('mostrar-edit-conteudo');
        editConteudo.addEventListener('click', (eEditConteudo) => {
        if(eEditConteudo.target.id == editarConteudoID || eEditConteudo.target.className == 'fechar-modal-conteudo') {
            editConteudo.classList.remove('mostrar-edit-conteudo');
        }
        });
    }
  }

  const editConteudo = document.querySelector('.editConteudo');
  editConteudo.addEventListener('click', () => iniciaEditConteudo('editConteudo'));
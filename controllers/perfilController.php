<?php
class perfilController extends controller {

	
	public function index() {
    if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
      $u = new User();
      $user = $u->getUserById($_SESSION['user_id']);
      $dados['user'] = $user;
      $this->loadTemplate('perfil/perfil',$dados);
    }else{
      header("Location: ".BASE_URL);
    }
	}

}
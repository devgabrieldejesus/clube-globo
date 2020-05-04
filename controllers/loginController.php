<?php
class loginController extends controller {

	public function index() {
    if(isset($_POST['email'])){
      $u = new User();
      $user = $u->read($_POST['email'],$_POST['pass']);
      if(!empty($user)){
        $json = array(
          'mensagem' => 'Logado com sucesso',
          'user' => $user
        );
        $_SESSION['user_name'] = $user['nome'];
        $_SESSION['user_id'] = $user['id'];
      }else{
        $json = array(
          'error' => true,
          'mensagem' => 'Email ou senha incorretos'
        );
      }
      echo json_encode($json);
      exit;
    }else{
      $json = array();
      echo json_encode($json);
      exit;
    }
  }
  
  public function novo_usuario(){
    if(isset($_POST['email'])){
      $u = new User();
      $mensagem = $u->create($_POST['nome'], $_POST['email'], $_POST['pass'], $_POST['resp'], $_POST['phone']);
      
    }else{
      $mensagem = array(
        'error' => true,
        'mensagem' => 'Todos os campos precisam ser preenchidos',
      );
    }
    echo json_encode($mensagem);
    exit;
  }

  public function logout(){
    unset($_SESSION['user_name']);
    Header("Location: ".BASE_URL);
  }

}
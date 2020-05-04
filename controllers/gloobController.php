<?php
class gloobController extends controller {

	
	public function index() {
    if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
      $this->loadTemplate('conteudo/gloob');
    }else{
      header("Location: ".BASE_URL);
    }
	}

}
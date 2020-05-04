<?php
class g1Controller extends controller {

	
	public function index() {
    if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
      $this->loadTemplate('conteudo/g1');
    }else{
      header("Location: ".BASE_URL);
    }
	}

}
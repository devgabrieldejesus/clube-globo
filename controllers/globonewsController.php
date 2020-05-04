<?php
class globonewsController extends controller {

	
	public function index() {
    if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
      $this->loadTemplate('conteudo/globonews');
    }else{
      header("Location: ".BASE_URL);
    }
	}

}
<?php
class User extends model{
  
  private function confereEmail($email){
    $sql = $this->db->prepare("SELECT email FROM usuarios WHERE email = :email");
    $sql->bindValue(":email",$email);
    $sql->execute();
    if($sql->rowCount() > 0){
      return true;
    }
    return false;
  }
  public function create($name, $email, $pass, $resp, $phone){
    $name = addslashes($name);
    $email = addslashes($email);
    $resp = addslashes($resp);
    $phone = addslashes($phone);
    $pass = MD5($pass);
    if($this->confereEmail($email)){
      $json = array(
        'error' => true,
        'mensagem' => 'E-mail já cadastrado'
      );
      return $json;
    }
    $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, pass = :pass, phone = :phone, perguntas = :resp";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(":nome",$name);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":pass",$pass);
    $sql->bindValue(":resp",$resp);
    $sql->bindValue(":phone",$phone);
    $sql->execute();
    $json = array(
      'mensagem' => 'Usuario cadastrado'
    );
    return $json;
  }

  public function read($email,$pass){
    $email = addslashes($email);
    $pass = MD5($pass);
    $array = array();
    $sql = $this->db->prepare("SELECT id, nome FROM usuarios WHERE email = :email AND pass = :pass");
    $sql->bindValue(":email",$email);
    $sql->bindValue(":pass",$pass);
    $sql->execute();
    if($sql->rowCount()>0){
      $array = $sql->fetch();
    }
    return $array;
  }

  public function getUserById($id){
    $array = array();
    $perguntas = array();
    $sql = $this->db->prepare("SELECT * FROM usuarios where id = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();
    if($sql->rowCount()>0){
      $array = $sql->fetch();
      $respostas = explode(',',$array['perguntas']);
      foreach($respostas as $resposta){
        $pergunta = explode('=', $resposta); 
        $perguntas[$pergunta[0]] = $pergunta[1]; 
      }
      $array['perguntas'] = $perguntas;
    }
    return $array;
  }


}
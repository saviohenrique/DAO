<?php 
class Usuario {
	private $idUsu;
	private $Nome;
        private $Email;
	private $Senha;
	
	public function getIdusu(){
		return $this->idUsu;
	}
	public function setIdusu($value){
		$this->idUsu = $value;
	}
        public function getNome(){
		return $this->Nome;
	}
	public function setNome($value){
		$this->Nome = $value;
	}
	public function getEmail(){
		return $this->Email;
	}
	public function setEmail($value){
		$this->Email = $value;
	}
	public function getSenha(){
		return $this->Senha;
	}
	public function setSenha($value){
		$this->Senha = $value;
	}
	
	
	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tbusuarios WHERE idUsu = :ID", array(
			":ID"=>$id
		));
		if (count($results) > 0) {
			$this->setData($results[0]);
		}
	}
	public static function getList(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tbusuarios ORDER BY Nome");
	}
	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tbusuarios WHERE Email LIKE :SEARCH ORDER BY Nome", array(
			':SEARCH'=>"%".$login."%"
		));
	}
	public function login($login, $password){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tbusuarios WHERE Email = :LOGIN AND Senha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));
		if (count($results) > 0) {
			$this->setData($results[0]);
		} else {
			throw new Exception("Login e/ou senha inválidos.");
		}
	}
	public function setData($data){
		$this->setIdusu($data['idUsu']);
		$this->setNome($data['Nome']);
		$this->setEmail($data['Email']);
                $this->setSenha($data['Senha']);
		
	}
	public function insert(){
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getEmail(),
			':PASSWORD'=>$this->getSenha()
		));
		if (count($results) > 0) {
			$this->setData($results[0]);
		}
	}
	public function update($login, $password){
		$this->setEmail($login);
		$this->setSenha($password);
		$sql = new Sql();
		$sql->query("UPDATE tbusuarios SET Email = :LOGIN, Senha = :PASSWORD WHERE idUsu = :ID", array(
			':LOGIN'=>$this->getEmail(),
			':PASSWORD'=>$this->getSenha(),
			':ID'=>$this->getIdusu()
		));
	}
	public function delete(){
		$sql = new Sql();
		$sql->query("DELETE FROM tbusuarios WHERE idUsu = :ID", array(
			':ID'=>$this->getIdusuario()
		));
		$this->setIdusu(0);
		$this->setEmail("");
		$this->setSenha("");
		
	}
	public function __construct($login = "", $password = ""){
		$this->setEmail($login);
		$this->setSenha($password);
	}
	public function __toString(){
		return json_encode(array(
			"idUsu"=>$this->getIdusu(),
			"Nome"=>$this->getNome(),
			"Email"=>$this->getEmail(),
                        "Senha"=>$this->getSenha() 
			
		));
	}
} 	
	
 ?>
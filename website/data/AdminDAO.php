<?php

include_once  "data/Connection.php";

class AdminDAO{

	private $con;

	public function __construct(){
		$this->con=(new Connection())->connect();
	}

	public function __destruct(){
		$this->con=null;
	}

	public function isAdmin($login, $password){
		try{
			$resultats=$this->con->query("SELECT COUNT( * )
					FROM user
					WHERE user_password = (
					SELECT AES_ENCRYPT( '".$password."',  'soho' ) ) and user_name='".$login."'");
			$resultats->setFetchMode(PDO::FETCH_NUM); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
			$count = $resultats->fetch()[0];
			return $count==1;
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		/*SELECT COUNT( * )
		 FROM user
		WHERE user_password = (
				SELECT AES_ENCRYPT(  '',  'soho' ) )*/
		return $bAdmin;
	}

}
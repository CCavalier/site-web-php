<?php

include "Connection.php";
include "../business/Article.php";

class ArticleDAO{
	private $con;

	public function __construct(){
		$this->con=(new Connection())->connect();
	}
	
	public function __destruct(){
		$this->con=null;
	}
	
	/*public function create(Article $pArticle){

	}
	public function update();*/
	public function getById($pId){
		try {	
			$resultats=$this->con->query("SELECT * from news where News_id=".$pId); // on va chercher tous les membres de la table qu'on trie par ordre croissant
			$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet
			$article = $resultats->fetch();
			$resultats->closeCursor();
			return $article;
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		
	}
	/*public function getAll();
	public function delete();*/
	
	
}
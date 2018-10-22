<?php
require_once(__DIR__.DIRECTORY_SEPARATOR . join(DIRECTORY_SEPARATOR, array("..","config","Conf.php")));
class Model{
	public static $pdo;


	public static function Init(){
		$hostname=Conf::getHostname();
		$database_name=Conf::getDatabase();
		$login=Conf::getLogin();
		$password=conf::getPassword();
		try{
  			self::$pdo=new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);
  			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
   
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
		catch (PDOException $e) {
  			if (Conf::getDebug()) {
    			echo $e->getMessage(); 
  			} 
  			else {
    			echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
  			}
  			die();
  		}
		
	}
}
Model::Init();

?>
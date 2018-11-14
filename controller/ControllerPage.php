<?php
require_once (File::build_path(array("model","ModelPage.php")));

class ControllerPage{
	
		public static function readAll(){
			$tab_v = ModelPage::getAllPage();
			$controller='page';
			$view='list'
			$pagetitle='liste des pages';
			require(File::build_path(array("view","view.php")));
			
			
			
		}
	
		public static function read(){
			$v=ModelPage::getPageById($_GET['idPage']);
			if($v==false){
				$controller='page';
				$view='erreur';
				$pagetitle='Erreur page';
				require(File::build_path(array("view","view.php")));
			} else {
				$controller='page';
				$view='detail';
				$pagetitle='Detail page';
				require(File::build_path(array("view","view.php")));
					
			}
		}
	
		public static function create(){
			$controller='page';
			$view='create';
			$pagetitle='Création de pages';
			require(File::build_path(array("view","view.php")));
		}
		
		public static function created(){
			$ModelPage = new ModelPage($_POST['titre'],$_POST['adressePage']);
			$ModelPage->save();
			$controller='page';
			$view='created';
			$pagetitle='Page créée';
			require(File::build_path(array("view","view.php")));
						
		}
			
		public static function delete(){
			$v=ModelPage::getPageById($_GET['idPage']);
			$v->delete();
			self::readAll();
			
			
		}
			
			
	
}
?>




















?>


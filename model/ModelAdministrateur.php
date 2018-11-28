<?php
require_once File::build_path(array("model","Model.php"));
class ModelAdministrateur extends Model{
   
  private $idAdmin;
  private $login;
  private $mdp;

      
  public function getIdAdmin(){
    return $this->idAdmin;
  }
  // un getter      
  public function getLogin() {
       return $this->login;  
  }
     
  // un setter 
  public function setLogin($login2) {
       $this->login = $login2;
  }

  public function getMdp(){
    return $this->mdp;
  }

  public function setMdp($mdp2){
    $this->mdp=$mdp2;
  }
      
  // un constructeur
  public function __construct($i=NULL, $l=NULL, $m=NULL)  {
    if (!is_null($i) && !is_null($l) && !is_null($m)) {
        $this->idAdmin=$i;
        $this->login = $l;
        $this->mdp = $m;
    }
  } 

   public function save(){
    try{
      $req_prep=Model::$pdo->prepare("INSERT INTO `mon-administrateurs`(idAdmin,login,mdp)VALUES(:idAdmin,:login,:mdp)");

      $values=array(
        "idAdmin" => $this->idAdmin,
        "login" => $this->login,
        "mdp" => $this->mdp
        );
      $req_prep->execute($values);
    }
    catch(PDOException $e){
      if ($e->getCode()==23000){
        echo('<b>ERREUR: L\'administrateur existe déjà</b>');
        return false;
      }
    }

  }

  public static function getAllAdministrateurs(){
        $req = Model::$pdo->query ("SELECT * FROM `mon-administrateurs`");
        $req->setFetchMode(PDO::FETCH_CLASS, "Modeladministrateur");
        $row = $req->fetchAll();
        return $row;    
    }

  public function deleteOne(){
    $req_prep=Model::$pdo->prepare("DELETE FROM `mon-administrateurs` WHERE administrateur.login=:login");

    $values=array(
      "login" => $this->login,
      );
    $req_prep->execute($values);
  }

  

  public function update($data){
    $req_prep=Model::$pdo->prepare("UPDATE `mon-administrateurs` SET idAdmin=:idAdmin, login=:login, mdp=:mdp,admin=:admin WHERE idAdmin=:idAdmin");

    $values=array(
      "idAdmin"=>$this->idAdmin,
      "login" => $this->login,
      "mdp" => $this->mdp
      );
    $req_prep->execute($values);

  }

   public static function getAdministrateurById($idAdmin){
        $req = Model::$pdo->prepare('SELECT * FROM `mon-administrateurs` WHERE idAdmin = :idAdmin');
        $req->execute(array(':idAdmin'=>$idAdmin));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'Modeladministrateur');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - administrateur non trouvé"; }
    }

    public static function getAdministrateurByLogin($login){
        $req = Model::$pdo->prepare('SELECT * FROM `mon-administrateurs` WHERE login = :login');
        $req->execute(array(':login'=>$login));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'Modeladministrateur');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - administrateur non trouvé"; }
    }

  public static function checkPassword($login,$mot_de_passe_chiffre){
      $sql = "SELECT * from `mon-administrateurs` WHERE login=:login AND mdp=:mdp";
      $req_prep = Model::$pdo->prepare($sql);

      $values = array(
          "login" => $login,
          "mdp" => $mot_de_passe_chiffre
      );   
      $req_prep->execute($values);
      $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelAdministrateur');
      $tab = $req_prep->fetchAll();
      if (empty($tab))
          return false;
      return $tab[0];
  }
  

}
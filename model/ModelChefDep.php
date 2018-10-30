    <?php

    class ModelChefDep extends ModelUtilisateur {
        private $idIUT;
        private $nomChefDep;
        private $prenomChefDep;
        private $mailChefDep;

        public function __construct($login = null, $mdp = null, $idIUT = null, $nom = null, $prenom = null, $email = null){
            if (!is_null($login) && !is_null($mdp) && !is_null($nom) && !is_null($prenom) && !is_null($email)) {
                parent::__construct($login, $mdp);
                $this->nomChefDep = $nom;
                $this->prenomChefDep = $prenom;
                $this->mailChefDep = $email;
                $this->idIUT = $idIUT;
            }
        }

        public function getNom() {
            return $this->nomChefDep;
        }

        public function getPrenom() {
            return $this->prenomChefDep;
        }

        public function getEmail() {
            return $this->mailChefDep;
        }

        public function getIdIUT() {
            return $this->idIUT;
        }

        public function setNom($nom) {
            $this->nomChefDep = $nom;
        }

        public function setPrenom($prenom) {
            $this->prenomChefDep = $prenom;
        }

        public function setEmail($email) {
            $this->mailChefDep = $email;
        }

        public function setIdIUT($idIUT) {
            $this->idIUT = $idIUT;
        }

        public function save(){
            $nom = htmlspecialchars($this->nomChefDep);
            $prenom = htmlspecialchars($this->prenomChefDep);
            $email = htmlspecialchars($this->mailChefDep);
            $checkIUT = Model::$pdo->prepare("SELECT * FROM P_IUTs WHERE idIUT = :idIUT");
            $checkIUT->execute(array(':idIUT'=>$this->idIUT));
            $checkIUTCount = $checkIUT->rowcount();
            if($checkIUTCount == 1){
                $getIdUtilisateur = $this::saveUser();
                $valId = (int)$getIdUtilisateur;
                $data = array(':idChefDep'=>$valId,':idIUT'=>$this->idIUT, ':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email);
                $insert = Model::$pdo->prepare("INSERT INTO P_ChefDep(idChefDep, idIUT, nomChefDep, prenomChefDep,  mailChefDep) VALUES(:idChefDep, :idIUT, :nom, :prenom, :email)");
                $insert->execute($data);
            }
            else {
                return "Cet IUT n'existe pas";
            } 
        }

        public static function modif($id, $nomId, $table, array $params){
            foreach($params as $colonne => $value){
            $reqModif = Model::$pdo->prepare("UPDATE $table SET $colonne = '$value' WHERE $nomId = $id ");
            $reqModif->execute(array($colonne));
            }
        }
        
        public function afficher(){
            echo 'Etudiant <br> NOM : '.$this->nomChefDep.' <br> PRENOM : '.$this->prenomChefDep.'<br> LOGIN : '.$this->login.'<br> MDP : '.$this->mdp.'<br> MAIL :'.$this->mailChefDep;
    }
    }
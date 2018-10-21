<?php
class Conf {
   
  static private $databases = array(
    'hostname' => 'webinfo.iutmontp.univ-montp2.fr',
    'database' => 'miniermancinit',
    'login' => 'miniermancinit',
    'password' => 'fukakaikotoba'
  );

  static private $debug=True;

  static public function getDebug(){
    return self::$debug;
  }
   
  static public function getLogin() {
    return self::$databases['login'];
  }

  static public function getHostname(){
    return self::$databases['hostname'];
  }

  static public function getDatabase(){
    return self::$databases['database'];
  }

  static public function getPassword(){
    return self::$databases['password'];
  }
   
}
?>


<?php
class Security{

	private static $seed = 'czgoWfPKqr';

	public static function chiffrer($texte_en_clair) {
		$texte_seed=self::$seed.$texte_en_clair;
	  	$texte_chiffre = hash('sha256', $texte_seed);
	  	return $texte_chiffre;
	}

	static public function getSeed() {
   		return self::$seed;
	}
}
<? php
class Voiture {
	private $marque;
	private $couleur;
	private $immatriculation;

	// un getter
	public function getMarque() {
		return $this->marque;
	}

	// un setter
	public function setMarque($marque2) {
		$this->marque = $marque2;
	}

	// un constructeur
	public function ___construct($m, $c, $i) {
		$this->marque = $m;
		$this->couleur = $c;
		$this->immatriculation = $i;
	}

	// methode d'affichage
	public function afficher() {
		// à compléter
	}
}
?>
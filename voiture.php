<?php
	class Voiture {
	private $marque;
	private $couleur;
	private $immatriculation;

	// un getter + setter marque
	public function getMarque() {
		return $this->marque;
	}

	public function setMarque($marque2) {
		$this->marque = $marque2;
	}

	// getter + setter couleur
	public function getCouleur() {
		return $this->couleur;
	}

	public function setCouleur($couleur2) {
		$this->couleur = $couleur2;
	}

	// getter + setter immat
	public function getImmatriculation() {
		return $this->immatriculation;
	}

	public function setImmatriculation($immatriculation2) {
		$this->immatriculation = $immatriculation2;
		strlen(8);
	}

	// un constructeur voiture
	public function __construct($m, $c, $i) {
		$this->marque = $m;
		$this->couleur = $c;
		$this->immatriculation = $i;
	}

	// methode d'affichage
	public function afficher() {
		echo "La voiture est de la marque $this->marque, de couleur $this->couleur avec l'immatriculation n°$this->immatriculation";
	}
}
?>


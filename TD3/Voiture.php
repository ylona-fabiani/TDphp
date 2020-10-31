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

	// La syntaxe ... = NULL signifie que l'argument est optionel
	// Si un argument optionnel n'est pas fourni,
	//   alors il prend la valeur par défaut, NULL dans notre cas
	public function __construct($m = NULL, $c = NULL, $i = NULL) {
		if (!is_null($m) && !is_null($c) && !is_null($i)) {
			// Si aucun de $m, $c et $i sont nuls,
			// c'est forcement qu'on les a fournis
			// donc on retombe sur le constructeur à 3 arguments
			$this->marque = $m;
			$this->couleur = $c;
			$this->immatriculation = $i;
		}
	}

	// une methode d'affichage.
	public function afficher() {
		echo "<p>Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur)</p> ";
	}

	public function getAllVoitures(){
		$rep = (Model::$pdo)->query("Select * From Voiture");
		$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
		$tab_voit = $rep->fetchAll();
		return $tab_voit;
	}
	//getAllTrajets() et getAllUtilisateurs()
	public function getAllTrajets(){
		$rep = (Model::$pdo)->query("Select * From Voiture");
		$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
		$tab_voit = $rep->fetchAll();
		return $tab_voit;
	}

	public static function getVoitureByImmat($immat) {
		$sql = "SELECT * from Voiture WHERE immatriculation=:nom_tag";
		// Préparation de la requête
		$req_prep = Model::$pdo->prepare($sql);

		$values = array(
			"nom_tag" => $immat,
			//nomdutag => valeur, ...
		);
		// On donne les valeurs et on exécute la requête
		$req_prep->execute($values);

		// On récupère les résultats comme précédemment
		$req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
		$tab_voit = $req_prep->fetchAll();
		// Attention, si il n'y a pas de résultats, on renvoie false
		if (empty($tab_voit))
			return false;
		return $tab_voit[0];
	}

	function save() {
		INSERT INTO Voiture()
	}
}
?>



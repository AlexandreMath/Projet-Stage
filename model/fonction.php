  public function addEncodeur($nom, $prenom, $fonction, $telephone, $mail, $affilie){

    	$slq = "INSERT INTO encodeur (nom, prenom, fonction, telephone, mail, affilie) VALUES ('$nom', '$prenom', '$fonction', '$telephone', '$mail', '$affilie')";
    	
    	$prepare = $this->connection->prepare();
    	$resultat = $prepare->execute();

    	if ( $resultat === true ) {
            return true;
        }else {
            return 'ERREUR';  
        } 
    }
	/*
	*/
	public function addFacturation($denomination, $forme, $adresse, $codePostal, $localite, $tva, $entrepreneur){
		$slq = "INSERT INTO facturation (denomination, forme, adresse,codePostal,localite,tva, entrepreneur) VALUES ('$denomination', '$forme', '$adresse', '$codePostal', '$localite', '$tva', '$entrepreneur')";
		$prepare = $this->connection->prepare($sql);
		$resultat = $prepare->execute(); 

		if ( $resultat === true ) {
            return true;
        } else {
            return 'ERREUR';  
        } 

	}
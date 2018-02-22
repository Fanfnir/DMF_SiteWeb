<?php 

include 'produit.php';//inclu le fichier contenant la connexion à la bdd et les requêtes sql pour la table produit

$req = afficher_produit();


while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
?>
	<p>
	 Chaussure <?php echo $donnees['nom_produit']; ?>, de type <?php echo $donnees['type']; ?><br />
	 Vous la trouverez en suivant ce lien : <a href="<?php echo $donnees['lien']; ?>">lien</a><br />
	 Description du produit : <?php echo $donnees['description']; ?><br />
	 Photo du produit : <img src="<?php echo $donnees['photo']; ?>"><br />
	</p>
<?php
}





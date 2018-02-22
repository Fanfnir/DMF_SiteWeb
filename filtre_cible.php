<?php 

include 'produit.php'; //inclu le fichier contenant la connexion à la bdd et les requêtes sql pour la table produit
global $query;
/*if ($query == NULL){ //si aucun critere n'est selectionne, affiche tous les produits
	$req = afficher_produit();
	while ($donnees = $req->fetch()) { 
	?>
		<p>
		 Chaussure <?php echo $donnees['nom_produit']; ?>, de type <?php echo $donnees['type']; ?><br />
		 Vous la trouverez en suivant ce lien : <a href="<?php echo $donnees['lien']; ?>">lien</a><br />
		 Description du produit : <?php echo $donnees['description']; ?><br />
		 Photo du produit : <img src="<?php echo $donnees['photo']; ?>"><br />
		</p>
	<?php
	};
}
else {
	$req = filtrer_produit();
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

	if (!$req->rowCount()) { //vérifie qu'il y ait des produits qui correspondent aux critères sélectionnés
		?>
		<p>Aucun produit ne correspond à ce(s) critère(s) ! </p>
		<?php 
	}
}
*/

$req = filtrer_produit();
if ($query == NULL){ //si aucun critere n'est selectionne, affiche tous les produits
	$reqq = afficher_produit();
	while ($donnees = $reqq->fetch()) { 
	?>
		<p>
		 Chaussure <?php echo $donnees['nom_produit']; ?>, de type <?php echo $donnees['type']; ?><br />
		 Vous la trouverez en suivant ce lien : <a href="<?php echo $donnees['lien']; ?>">lien</a><br />
		 Description du produit : <?php echo $donnees['description']; ?><br />
		 Photo du produit : <img src="<?php echo $donnees['photo']; ?>"><br />
		</p>
	<?php
	};
}
else {
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

	if (!$req->rowCount()) { //vérifie qu'il y ait des produits qui correspondent aux critères sélectionnés
		?>
		<p>Aucun produit ne correspond à ce(s) critère(s) ! </p>
		<?php 
	}
}
<?php include 'produit.php'; ?> <!--inclu le fichier contenant la connexion à la bdd et les requêtes sql pour la table produit -->
<form method="get" action="filtre_cible.php">
	<p>
		Trier les produits par critères :<br /><br />
	</p>
		<?php 


			
			$req = afficher_filtre();
			while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
				?> <p>
				<input type="checkbox" name="critere[]" value="<?php echo $donnees['idcritere']?>" id="<?php echo $donnees['idcritere']?>" /> <label for="<?php echo $donnees['idcritere']?>"><?php echo $donnees['nom_critere']?></label> <!-- on donne le même name à tous les champs, ce nom est un tableau critere. On modifie la value par le nom du critere qu'on veut afficher --> 
				</p>
			<?php } ?>



		<input type="submit" value="Envoyer" />
		

</form>


















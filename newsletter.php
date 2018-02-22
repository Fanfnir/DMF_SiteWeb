<?php
include 'bdd_connexion.php';


if(isset($_POST['newsletterform'])){
   if(isset($_POST['newsletter'])){

      //on verifie que ce n'est pas vide

      if(!empty($_POST['newsletter'])){
         $newsletter = htmlspecialchars($_POST['newsletter']);

         // on verifie que le mail est viable

         if(filter_var($newsletter, FILTER_VALIDATE_EMAIL)) {
                     $reqmail = $pdo->prepare("SELECT * FROM newsletter WHERE email = ?");
                     $reqmail->execute([$_POST['newsletter']]);
                     $mailexist = $reqmail->rowCount();

                     //on verifie que le mail n'existe pas et on inscrit
                     if($mailexist == 0){
                        $sql = $pdo->prepare('INSERT INTO newsletter(email,dates) VALUES (?,NOW())');
                        $sql->execute([$_POST['newsletter']]);
                        echo "Merci pour votre inscription!";
                        header("refresh:3; url= index.php");
                        exit();

                     } else {
                        echo "Vous êtes déjà inscrit à la Newsletter.";
                        header("refresh:3; url= index.php");
                        exit();
                     }
                 
         } else {
            echo "Vous devez indiquer une adresse e-mail.";
            header("refresh:3; url= index.php");
            exit();
         }
      }


      else {
            echo "Vous devez remplir tout les champs vides.";
            header("refresh:3; url= index.php");
            exit();
      }



   } 


}


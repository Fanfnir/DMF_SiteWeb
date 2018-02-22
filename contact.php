<?php
$headers ='FROM: dressmefaire@local.dev';
$message = htmlspecialchars($_POST['message']);



   if(isset($_POST['name'])){
   	
   	if(isset($_POST['email'])){
   		
   		if(isset($_POST['message'])){
   			

      //on verifie que ce n'est pas vide

      	if(!empty($_POST['name'])){
         

         		if(!empty($_POST['email'])){
         		$email = htmlspecialchars($_POST['email']);

         			if(!empty($_POST['message'])){
         			$message = htmlspecialchars($_POST['message']);

         // on verifie que le mail est viable

        				if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        	mail('jeremy.guenot@hotmail.com', 'formulaire de contact', $message, $headers);
                       		 echo "Merci pour votre message!";
         				} else {
            				echo "Vous devez indiquer une adresse e-mail valide.";
            			}
            		} else {
            			echo "Vous devez indiquer un message.";
            			}
            	} else {
            			echo "Vous devez indiquer un email.";
            			}
           } else {
            		echo "Vous devez indiquer un nom.";
          }
         }
      }

    }

   ;


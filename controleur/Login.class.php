<?php
	require_once('./controleur/Action.interface.php');
	require_once('./modele/UserDAO.class.php');
	class Login implements Action {
		public function execute(){
			if (!ISSET($_SESSION))
				session_start();
			if ($_REQUEST["email"] == "")
			{
				$_REQUEST["field_messages"]["warning"] = "Vous n'avez pas entrez votre email.";
				return "index";
			}
			$user = UserDAO::find($_REQUEST["email"]);
			/*if ($user->getIsActivate() == 0)
			{
				$_REQUEST["field_messages"]["warning"] = "Votre email n'a pas été confirmé.";	
				return "index";
			}*/
			if ($user == null)
			{
				$_REQUEST["field_messages"]["error"] = "Utilisateur inexistant.";	
				return "index";
			}
			//$hash = loadHashByUsername($_REQUEST["email"]);
			if (password_verify($_REQUEST["password"], $user->getPassword())) 
			{
				$_SESSION['online']['email'] = $user->getEmail();
                                $_REQUEST["field_messages"]["success"] = "Vous êtes maintenant connecté!";
				return "index";
			}
			else
			{
				$_REQUEST["field_messages"]["warning"] = "Mot de passe incorrect.";
				return "index";
			}			
		}		
	}
?>
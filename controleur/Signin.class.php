<?php
	require_once('./controleur/Action.interface.php');
	require_once('./modele/UserDAO.class.php');
	class Signin implements Action {
		public function execute(){
			if (!ISSET($_SESSION))
				session_start();
			/*$_REQUEST["email"]
			$_REQUEST["password"]
			$_REQUEST["prenom"]
			$_REQUEST["nom"]*/
			if ($_REQUEST["email"] == "" or $_REQUEST["email"] == null)
			{
                            $_REQUEST["field_messages"]["warning"] = "Vous devez entrez un adresse courriel.";
                            return "index";
			}
			if ($_REQUEST["password"] == "" or $_REQUEST["password"] == null)
			{
                            $_REQUEST["field_messages"]["warning"] = "Vous devez entrez un mot de passe.";
                            return "index";
			}
                        if ($_REQUEST["password"] != $_REQUEST["confirmPassword"])
                        {
                            $_REQUEST["field_messages"]["warning"] = "Vous n'avez pas entré un mot passe différent de votre confirmation de mot de passe.";
                            return "index";
                        }
			/*else if (str($_REQUEST["password"]) < 3)
			{
				$_REQUEST["field_messages"]["warning"] = "Votre mot de passe doit contenir 4 charactères minimum.";
			}*/
			$udao = new UserDAO();
			if ($udao->find($_REQUEST["email"]))
			{
                            $_REQUEST["field_messages"]["error"] = "Vous avez déjà crée un compte à cette adresse!";
                            return "index";
			}
                        $user = new User();
                        $user->setEmail($_REQUEST["email"]);
                        $user->setPassword($_REQUEST["password"]);
			if ($udao->create($user))
			{
                            //Ajouter commandes.
                            $_REQUEST["field_messages"]["success"] = "Votre compte a correctement été créé, vous pouvez maintenant activer votre compte.";
			}
			else
                            $_REQUEST["field_messages"]["error"] = "Votre compte n'a pas pu être crée, veuillez réessayer plus tard.";
			return "index";
		}
	}
?>
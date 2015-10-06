<?php
	require_once('./controleur/Action.interface.php');
	require_once('./modele/UserDAO.class.php');
	class PasswordForgot implements Action 
        {
		public function execute()
                {
                    if (!ISSET($_SESSION))
                        session_start();
                    if($_REQUEST["email"] == "")
                    {
                        $_REQUEST["field_messages"]["warning"] = "Vous n'avez pas entrez votre email.";
                        return index;
                    }
                    $user = UserDAO::find($_REQUEST["email"]);
                    if ($user = null)
                    {
                        $_REQUEST["field_messages"]["error"] = "Cette email n'a pas de compte.";
                        return index;
                    }
                    $_REQUEST["field_messages"]["success"] = "Cliquer ici pour changer votre mot de passe! <a href=?action=passwordReset&email='".$_REQUEST["email"]."'";
                    return index;
		}
	}
?>
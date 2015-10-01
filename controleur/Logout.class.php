<?php
	require_once('./controleur/Action.interface.php');
	class Logout implements Action {
		public function execute(){
			if (!ISSET($_SESSION)) session_start();
			UNSET($_SESSION["online"]);
			session_destroy();
                        if (!ISSET($_SESSION["online"]))
                            $_REQUEST["field_messages"]["success"] = "Vous êtes maintenant déconnecté!";
			return "index";
		}
	}
?>
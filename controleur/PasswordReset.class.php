<?php
	require_once('./controleur/Action.interface.php');
	require_once('./modele/UserDAO.class.php');
	class PasswordReset implements Action 
        {
		public function execute()
                {
                    if (!ISSET($_SESSION))
                        session_start();
                    
		}
	}
?>
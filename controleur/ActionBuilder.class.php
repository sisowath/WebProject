<?php
require_once('./controleur/DefaultAction.class.php');
require_once('./controleur/Login.class.php');
require_once('./controleur/Logout.class.php');
require_once('./controleur/Signin.class.php');
class ActionBuilder{
	public static function getAction($nomAction)
	{
		switch ($nomAction)
		{
                    /*case "template" :
                            return new template();
                    break; */
                    case "connection" :
                            return new Login();
                    break;
                    case "deconnection" :
                            return new Logout();
                    break;
                    case "inscription" :
                            return new Signin();
                    break;                    
                    default :
                            return new DefaultAction();
		}
	}
}
?>

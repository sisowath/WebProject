<?php
include_once('./modele/classes/Database.class.php'); 
include_once('./modele/classes/User.class.php'); 

class UserDAO
{	
    /*
    private $id = "";
    private $email = "";
    private $password = "";
    private $isBan = "";
    private $banDate = "";
    private $isModerator = "";
    private $isActive = "";
    private $username = "";
    private $image = "";
    private $description = "";
    private $ferraille = "";
    private $acier = "";
    private $prestige = "";
    */
    
	public static function find($id)
	{
		$db = Database::getInstance();

		$pstmt = $db->prepare("SELECT * FROM user WHERE email = :x");
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new User();

		if ($result)
		{
                    $p->setID($result->id);
                    $p->setEmail($result->email);
                    $p->setPassword($result->password);
                    $p->setIsBan($result->isBan);
                    $p->setBanDate($result->banDate);
                    $p->setIsModerator($result->isModerator);
                    $p->setIsActive($result->isActive);
                    $p->setUsername($result->username);
                    $p->setImage($result->image);
                    $p->setDescription($result->description);
                    $p->setFerraille($result->ferraille);
                    $p->setAcier($result->acier);
                    $p->setPrestige($result->prestige);
                    $pstmt->closeCursor();
                    $db = Database::close();
                    return $p;
		}
		$pstmt->closeCursor();
		$db = Database::close();
		return null;
	}
	
	public static function create($x)
	{
		try
		{
			$option = ['cost' => 10,];
			$db = Database::getInstance();
			$pstmt = $db->prepare("INSERT INTO user (email, password)
						VALUES (:email, :password)");
			$retour = $pstmt->execute(array(':password' => password_hash($x->getPassword(), PASSWORD_DEFAULT, $option),
							':email' => $x->getEmail()));
			$pstmt->closeCursor();
			$db = Database::close();
			return $retour;
		}
		catch(PDOException $e)
		{
			throw $e;
		}
	}
	
	/*public function update($x) 
	{
		try
		{
			$db = Database::getInstance();
			$pstmt = $db->prepare("UPDATE user SET password = :password, prenom = :prenom, nom = :nom, activate = :activate WHERE email = :email");
			$retour = $pstmt->execute(array(':password' =>  $x->getPassword(), 
							':prenom' => $x->getPrenom(), 
							':nom' => $x->getNom(),
							':activate' => $x->getActivate(),							
							':email' => $x->getEmail()));
			$pstmt->closeCursor();
			$db = Database::close();
			return $retour;
		}
		catch(PDOException $e)
		{
			throw $e;
		}
	}*/
        public function passwordReset($email, $password)
        {
            try
		{
                    $db = Database::getInstance();
                    $pstmt = $db->prepare("UPDATE user SET password = :password WHERE email = :email");
                    $retour = $pstmt->execute(array(':email' => $email,
                                                ':password' => $password));
                    $pstmt->closeCursor();
                    $db = Database::close();
                    return $retour;
		}
		catch(PDOException $e)
		{
			throw $e;
		}
        }
	public function delete($x) 
	{
		try
		{
                    $db = Database::getInstance();
                    $pstmt = $db->prepare("DELETE FROM user WHERE email = :x");
                    $retour = $pstmt->execute(array(':x' => $x));
                    $pstmt->closeCursor();
                    $db = Database::close();
                    return $retour;
		}
		catch(PDOException $e)
		{
                    throw $e;
		}
	}
	
	
}
?>
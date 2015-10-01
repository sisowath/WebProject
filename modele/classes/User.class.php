 <?php
class User
{	
	//Attribut
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
	
	//Construteur
        function __construct() {
            
        }

        /*function __construct($id, $email, $password, $isBan, $banDate, $isModerator, $isActive, $username, $image, $description, $ferraille, $acier, $prestige) {
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
            $this->isBan = $isBan;
            $this->banDate = $banDate;
            $this->isModerator = $isModerator;
            $this->isActive = $isActive;
            $this->username = $username;
            $this->image = $image;
            $this->description = $description;
            $this->ferraille = $ferraille;
            $this->acier = $acier;
            $this->prestige = $prestige;
        }*/
        
        /* Getter and Setter*/
	public function getID() 
	{
		return $this->id;
	}
	public function setID($value)
	{
		$this->id=$value;
	}
	public function getEmail() 
	{
		return $this->email;
	}
	public function setEmail($value)
	{
		$this->email=$value;
	}
	public function getPassword() 
	{
		return $this->password;
	}
	public function setPassword($value) 
	{
		$this->password=$value;
	}
	public function getIsBan()
	{
		return $this->isBan;
	}
	public function setIsBan($value)
	{
		$this->IsBan=$value;
	}
	function getBanDate() {
            return $this->banDate;
        }

        function getIsModerator() {
            return $this->isModerator;
        }

        function getIsActive() {
            return $this->isActive;
        }

        function getUsername() {
            return $this->username;
        }

        function getImage() {
            return $this->image;
        }

        function getDescription() {
            return $this->description;
        }

        function getFerraille() {
            return $this->ferraille;
        }

        function getAcier() {
            return $this->acier;
        }

        function getPrestige() {
            return $this->prestige;
        }

        function setBanDate($banDate) {
            $this->banDate = $banDate;
        }

        function setIsModerator($isModerator) {
            $this->isModerator = $isModerator;
        }

        function setIsActive($isActive) {
            $this->isActive = $isActive;
        }

        function setUsername($username) {
            $this->username = $username;
        }

        function setImage($image) {
            $this->image = $image;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setFerraille($ferraille) {
            $this->ferraille = $ferraille;
        }

        function setAcier($acier) {
            $this->acier = $acier;
        }

        function setPrestige($prestige) {
            $this->prestige = $prestige;
        }

        //Autres Fonction
	public function loadFromRecord($ligne)
	{
            $this->id = $ligne["id"];
            $this->email = $ligne["email"];
            $this->password = $ligne["password"];
            $this->isBan = $ligne["isBan"];
            $this->banDate = $ligne["banDate"];
            $this->isModerator = $ligne["isModerator"];
            $this->isActive = $ligne["isActive"];
            $this->username = $ligne["username"];
            $this->image = $ligne["image"];
            $this->description = $ligne["description"];
            $this->ferraille = $ligne["ferraille"];
            $this->acier = $ligne["acier"];
            $this->prestige = $ligne["prestige"];  
	}	
}
?>
<?php
require_once('./modele/classes/Navigable.interface.php');
class Liste implements Navigable{
	private $item;
	private $current = 0;

	public function __construct()	//Constructeur
	{
		$this->item = array();
	}	
	
	public function add($item)
	{
			array_push($this->item,$item);
	}
	
	public function previous()
	{
		if ($this->current>0)
		{
			$this->current--;
			return true;
		}
		return false;
	}
	public function next()
	{
		if ($this->current<count($this->item)) 
		{
			$this->current++;
			return true;
		}
		return false;
	}
        
	public function printCurrent()
	{
			if (isset($this->item[$this->current]))
				echo $this->item[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->item[$this->current]))
			return $this->item[$this->current];
		return null;	
	}
	public function size()
	{
		return count($this->item);
	}
}
?>
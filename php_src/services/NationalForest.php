<?php
class NationalForest
{
	/**
	 * @var int
	 */
	public $id;
	
	/**
	 * @var string
	 */
	public $state;
	
	/**
	 * @var int
	 */
	public $area;
	
	/**
	 * @var Date
	 */
	public $established;
	
	/**
	 * @var string
	 */
	public $closest_city;
	
	/**
	 * @var string
	 */
	public $name;
	
	public function __construct()
	{
		$this->id = 0;
		$this->state = "";
		$this->area = 0;
		$this->established = date("c");
		$this->closest_city = "";
		$this->name = "";	
	}
}
?>
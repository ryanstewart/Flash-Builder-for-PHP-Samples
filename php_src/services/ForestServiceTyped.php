<?php
include_once 'NationalForest.php';

class ForestServiceTyped
{
	protected $host = "localhost";
	protected $username = "root";
	protected $password = "root";
	protected $db = "php_demos";
	
	protected function connect()
	{
		mysql_connect($this->host,$this->username,$this->password)
		or die ("Unable to connect to database.");
		
		mysql_select_db($this->db)
		or die ("Unable to select database.");
	}
	
	/**
	 * 
	 * Get every forest in the database
	 * 
	 */
	public function getAllForests()
	{
		$this->connect();
		$rs = mysql_query("select * from national_forests")
		or die ("Unable to complete query.");
		
		$national_forests = array();
		
		while( $row = mysql_fetch_assoc($rs) )
		{
			$forest = new NationalForest();
			$forest->id = $row['id']+0;
			$forest->state = $row['state'];
			$forest->area = $row['area']+0.0;
			$forest->established = new DateTime($row['established']);
			$forest->closest_city = $row['closest_city'];
			$forest->name = $row['name'];
			
			array_push($national_forests,$forest);
		}
		
		return $national_forests;
	}
	
	/**
	 * 
	 * Get a single forest by ID
	 * 
	 * @param int $id
	 * @return NationalForest
	 */
	public function getForestByID($id)
	{
		$this->connect();
		$query = sprintf("select * from national_forests where id = '%s'",mysql_real_escape_string($id));
		$rs = mysql_query($query)
		or die ("Unable to complete query.");
		
		$row = mysql_fetch_assoc($rs);
		
		$forest = new NationalForest();
		$forest->id = $row['id'];
		$forest->state = $row['state'];
		$forest->area = $row['area'];
		$forest->established = $row['established'];
		$forest->closest_city = $row['closest_city'];
		$forest->name = $row['name'];

		return $forest;
	}
	
	/**
	 * 
	 * Create a national forest
	 * 
	 * @param NationalForest $forest
	 * @return int
	 */
	public function createForest($forest)
	{
		$this->connect();
		$query = sprintf("insert into national_forests(state, area, established, closest_city, name)
							values ('%s','%s','%s','%s','%s'",
							mysql_real_escape_string($forest->state),
							mysql_real_escape_string($forest->area),
							mysql_real_escape_string($forest->established),
							mysql_real_escape_string($forest->closest_city),
							mysql_real_escape_string($forest->name));
		$rs = mysql_query($query)
		or die ("Unable to complete query.");
		
		return mysql_insert_id();
	}
	
	/**
	 * 
	 * Update a forest with new information 
	 * 
	 * @param NationalForest $forest
	 * @return NationalForest
	 */
	public function updateForest($forest)
	{
		$this->connect();
		$query = sprintf("update national_forests set 
				state = '%s', area = '%s', established = '%s', closest_city = '%s', name = '%s'
				where id = '%s' ",
				mysql_real_escape_string($forest->state),
				mysql_real_escape_string($forest->area),
				mysql_real_escape_string($forest->established),
				mysql_real_escape_string($forest->closest_city),
				mysql_real_escape_string($forest->name),
				mysql_real_escape_string($forest->id));
		$rs = mysql_query($query)
		or die ("Unable to complete query.");
		
		return $this->getForestByID($forest->id);
	}
	
	/**
	 * 
	 * Delete a forest
	 * 
	 * @param int $id
	 * @return bool
	 */
	public function deleteForest($id)
	{
		$this->connect();
		$query = sprintf("delete from national_forests where id = '%s'",
					mysql_real_escape_string($id));
		$rs = mysql_query($query)
		or die ("Unable to complete query.");
		
		return $rs;
	}
	
	
	/**
	 * 
	 * Get the total number of records in the database
	 * 
	 * @return int
	 */
	public function count()
	{
		$this->connect();
		$rs = mysql_query("select * from national_forests")
		or die ("Unable to complete query.");
		
		$count = mysql_num_rows($rs);
		return $count;
	}
	
	/**
	 * 
	 * Get items from the database in specific increments
	 * 
	 * @param int $startIndex
	 * @param int $numItems
	 * 
	 * 
	 */
	public function getForestsPaged($startIndex, $numItems)
	{
		$this->connect();
		$query = sprintf("select * from national_forests limit %s, %s",
					mysql_real_escape_string($startIndex),
					mysql_real_escape_string($numItems));
		$rs = mysql_query($query)
		or die ("Unable to complete query.");
		
		$national_forests = array();

		while( $row = mysql_fetch_assoc($rs) )
		{
			$forest = new NationalForest();
			$forest->id = $row['id']+0;
			$forest->state = $row['state'];
			$forest->area = $row['area']+0.0;
			$forest->established = new DateTime($row['established']);
			$forest->closest_city = $row['closest_city'];
			$forest->name = $row['name'];
			
			array_push($national_forests,$forest);
		}
		
		return $national_forests;
	}
	
}

?>
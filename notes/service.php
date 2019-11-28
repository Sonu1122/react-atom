<?php
//error_reporting(0);
class restApi{

/* Database credentials*/

	private $db_host = 'localhost'; // localhost
	private $db_name = 'shopkart'; // database name
	private $db_user = 'root'; // database uer
	private $db_pass = '57336212'; // database password
	private $connection;

	/*start connection as soon as this file gets load*/

	public function __construct(){
		$this->connect();
	}

	/*connect to the database*/

	public function connect(){
		$this->connection = mysqli_connect($this->db_host,$this->db_user,$this->db_pass);
		if(!$this->connection){
			die ("Database connection failed: " . mysql_error());
		}else{
			$select_db = mysqli_select_db($this->connection,$this->db_name);
			if(!$select_db){
				die("Database selection failed: " . mysql_error());
			}
		}
	}

	/*close mysql connection*/

	public function close_connection(){
		if(isset($this->connection)){
			mysqli_close($this->connection);
			unset($this->connection);
		}
	}

	/* run database query*/

	public function query($sqlQuery){

		$result = mysqli_query($this->connection,$sqlQuery);
		$this->confirm_query($result);
		return $result;
	} // end query($sqlQuery)

	/* confirm mysql query */

	public function confirm_query($result){
		if(!$result){
			die ("Database query failed: " . mysqli_errno());
		}
	}


	/* Insert into database */

	public function insert($table, $keys, $values){

		$condition = "INSERT INTO $table ($keys) VALUES('".$values."')";
		$query = $this->query($condition);
		return $query;
	}

	public function getUserData(){
		$table = "users";
		$keys = "`name`, `email`, `password`, `mobile`, `gender`, `role`";
		
		$query = "SELECT ".$keys." FROM ".$table.";";
		$result = $this->query($query);
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$data[] = array("name"=>$row['name'],
							"email"=>$row['email']
					);
		}
		return array("status"=>true,"data"=>$data);
	}
}

if(isset($_REQUEST['action']) && $_REQUEST['action'] != "")
{
	$request = $_REQUEST["action"];
	$api = new restApi($request);
	echo json_encode($api->$request());
}

?>

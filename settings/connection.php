<?php 
include_once('credentials.php');

class Connection{

	// db connection
	public $db = null;
	// query results
	public $results = null;



	// method used to connect to the database
	function connection(){

		// connect to the database
		$this->db = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

		// if there are errors, return false
		if(mysqli_connect_errno()){
			return false;
		}

		// else return true
		return true;

	}

	// execute database sql statements (insert, update, and delete)
	function query($query){

		// check if the connection was successful
		if($this->connection() == false){
			return false;
		}

		// else execute the query
		$this->results = mysqli_query($this->db, $query) or die(mysqli_error($this->db));

		// check if results is returning false
		if($this->results !=true){
			return false;
		}

		// else return true
		return true;

	}


	// method to fetch multiple rows from database (select)
	function fetch($query){

		// if query executes successfully
		if($this->query($query)) {
			// return all the rows
			return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
		}
		// else return false
		return false;
		
	}


	// method to fetch one row from database (select)
	function fetchOne($query){

		// if query executes successfully
		if($this->query($query)) {
			// return one row
			return mysqli_fetch_assoc($this->results);
		}
		// else return false
		return false;
	}


}
?>
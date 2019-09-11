<?php


// crude connector
$host1="localhost";
$user1="root";
$pass1="";
$dbl_name1="smart_school";

$connect=mysqli_connect($host1,$user1,$pass1,$dbl_name1);

if(!$connect){
	die("Connection error".mysqli_connect_error());
}

//oop connector
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "smart_school");
	
	class shop{
		
		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dbname = DB_NAME;
		
		
		
		
		public $conn;
		public $error;
		
		
		public function __construct()
	 {
	  $this->connectDB();
	 }
		
		
		private function connectDB(){
			
			$this->con = new mysqli ($this->host, $this->user, $this->pass, $this->dbname);
			
			if(!$this->con){
				$this->error ="Connection fail".$this->con->connect_error;
				return false;
				
			}
		}
		
		
	




// functiion for insert data
 
	 public function selectDataInsert($q)
	 {
		 
	 $insert_data=$this->con->query($q) or die($this->con->error.__LINE__);
	 if($insert_data)
	 {
		 return true;
		
	 }
	 else
	 {
		 return false;
	
	 }
	 }
// functiion for update data
 
	 public function selectDataUpdate($q)
	 {
		 
	 $update=$this->con->query($q) or die($this->con->error.__LINE__);
	 if($update)
	 {
		 return true;
		
	 }
	 else
	 {
		 return false;
	
	 }
	 }

 public function selectDataInsert2($q)
	 {
		 
	 $insert_data=$this->con->query($q) or die($this->con->error.__LINE__);
	 if($insert_data)
	 {
		 return true;
		
	 }
	 else
	 {
		 return false;
	
	 }
	 }




//function for fatch data
 public function selectDataFetch($q)
	 {
	 
	 $select_data=$this->con->query($q) or die($this->con->error.__LINE__);
	 if($select_data->num_rows>0)
	 {
	return $select_data;
	 }
	 else
	 {
	 return false;
	 }
	 }
 
// function for delete date

	 public function selectDataDelete($q)
	 {
		 
	 $insert_data=$this->con->query($q) or die($this->con->error.__LINE__);
	 if($insert_data)
	 {
		 return true;
		
	 }
	 else
	 {
		 return false;
	
	 }
	 }





















	
		
		
	}



<?php

  class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'employeedb');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function create($fname,$lname,$age,$email,$mobile){
      $sql = "INSERT INTO employee (fname, lname, age, email,mobile) VALUES ('$fname', '$lname', '$age', '$email','$mobile')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read(){
		    $sql = "SELECT * FROM employee";
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>

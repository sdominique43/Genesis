<?php 
  
  $servername = "genesisdatabasethesecondcoming.crlaiqpdndku.us-east-2.rds.amazonaws.com";
  $username = "GenesisCreators";
  $password = "wewillpassthisclass";
  $dbname = "GenesisDatabase";
  
  //Create connection
  $conn = new mysqli($servername, $username, $password, $dbname); 
  
  // Check connection 
  if(mysqli_connect_error()) 
    {
	  die("Connection failed: " . mysqli_connect_error());
    } 
     echo "Connection successfully";
?>	 
	 

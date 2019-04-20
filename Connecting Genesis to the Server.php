<?php 
  
  $servername = "genesisdatabasethesecondcoming.crlaiqpdndku.us-east-2.rds.amazonaws.com";
  $username = "GenesisCreators";
  $password = "wewillpassthisclass";
  $dbname = "GenesisDatabase";
  
  //Create connection
  $conn = new mysqli(genesisdatabasethesecondcoming.crlaiqpdndku.us-east-2.rds.amazonaws.com, GenesisCreators, wewillpassthisclass, GenesisDatabase); 
  
  // Check connection 
  if(mysqli_connect_error()) 
    {
	  die("Connection failed: " . mysqli_connect_error());
    } 
     echo "Connection successfully";
?>	 
	 

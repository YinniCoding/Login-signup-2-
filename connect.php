<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
/*if (mysql_query("CREATE DATABASE test0207",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }*/
  // Create table in my_db database
mysql_select_db("test0207", $con);
$sql = "CREATE TABLE user
(
  id int(10),
  username varchar(30),
  passward varchar(40)
)";
mysql_query($sql,$con);
$sql = "CREATE TABLE user
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
  id int(10),
  username varchar(30),
  passward varchar(40)
)";
mysql_select_db("test0207", $con);
?>
<?php
 $con = mysqli_connect("127.0.0.1","root","");
if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
$sql = 'CREATE Database intern';
   $retval = mysqli_query($con,$sql);
   
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   
   echo "Database intern created successfully\n";

   $sql1 = 'CREATE TABLE Users( '.
      'ID INT NOT NULL AUTO_INCREMENT, '.
      'Name VARCHAR(40) NOT NULL, '.
      'Email  VARCHAR(50) NOT NULL, '.
      'Phone   BIGINT NOT NULL, '.
      'primary key ( ID))';
   mysqli_select_db($con,"intern");
   $retval = mysqli_query($con,$sql1 );
   
   if(! $retval ) {
      die('Could not create table: ' . mysql_error());
   }
   
   echo "Table employee created successfully\n";
   
   $retval = mysqli_query($con,'CREATE PROCEDURE `insertData`(IN name varchar(40),IN email varchar (50),phone bigint(20)) BEGIN INSERT INTO Users(Name,Email,Phone) VALUES(name,email,phone); END');
    
   
   if(! $retval ) {
      die('Could not create table: ' . mysql_error());
   }
   
   echo "Procedure1 created successfully\n";

  $retval = mysqli_query($con,'CREATE PROCEDURE `getData`(IN i INT(11)) BEGIN SELECT * FROM Users WHERE ID=i; END');
    
   
   if(! $retval ) {
      die('Could not create table: ' . mysql_error());
   }
   
   echo "Procedure2 created successfully\n";
   
      
?>

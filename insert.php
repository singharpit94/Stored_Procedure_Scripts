<?php
 $con = mysqli_connect("127.0.0.1","root","");
if( isset($_POST["json"]) ) {
     $data = json_decode($_POST["json"]);
     $name=$data->name;
 $email=$data->email;
 $phone=$data->phone;
if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}

	mysqli_select_db($con,"intern");
	
	
	
	  
		$sql3="CALL insertData('".$name."','".$email."','".$phone."')";
		$result3=mysqli_query($con,$sql3);
		if (mysqli_affected_rows($con) == 1) {
                          $res= array(
		"status"=>'Inserted');
			
		}
                   else
                      $res= array("status"=>'Failed');
              echo json_encode($res);
}

 
 
	?>

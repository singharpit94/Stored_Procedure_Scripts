<?php
 $con = mysqli_connect("127.0.0.1","root","");
  if( isset($_GET["idt"]) ) {
   $id= $_GET["idt"];
     

 if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}

	mysqli_select_db($con,"intern");
	
	
	
	                 $res= array();
		$sql3="CALL getData('".$id."')";
		$result3=mysqli_query($con,$sql3);
		$row=mysqli_fetch_array($result3);
                if($row>0)
               {
                 $res= array(
		"name"=>$row['Name'],
		"email"=>$row['Email'],
                "phone"=>$row["Phone"]);
                  echo json_encode($res);
		
                }
                else 
{
   $res= array(
		"status"=>'Not Found');
                  echo json_encode($res);
}

              
	

}
 
	?>

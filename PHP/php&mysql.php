<html>
<?php
  
  //connect database
  //server:localhost, username:root, password:123456, database:mystore
		$con = mysqli_connect('localhost','root','123456','mystore');
		if(!$con){
			die('Could not connect: ' . mysqli_error());
		}else{
  	
  //SELECT
	  	$sql = 'SELECT * FROM customers';
		$result = mysqli_query($con, $sql);
	  	while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
	  		echo $row[1];
	  		echo '  ';
	  	}

  //INSERT
	  /*	$insert = "INSERT INTO customers (first_name, email, password, street_address, city, state, zip) 
	  	VALUES ('xuhui', 'xjiang@gmail.com', '1234', '3001 S Michigan', 'Boston', 'IL', '6000')";
	  	mysqli_query($con, $insert);
	  	echo "New ID is: " . mysqli_insert_id($con); 
  		}*/

  //DELETE
  		/*$delete = "DELETE FROM customers WHERE  first_name = 'xuhui'";
  		mysqli_query($con, $delete);*/

  //update
  		$update = "UPDATE customers SET first_name = 'Liwen' WHERE first_name = 'xuhui'";
  		mysqli_query($con, $update);
  	}
?>
</html>
<?php

include('connection.php');

if(isset($_REQUEST['id']))
{
	$id = $_GET['id'];
	$sql11 = "select * from city where state_id=$id";
	
			$result11 = mysqli_query($con,$sql11);
			
			while($row11=mysqli_fetch_array($result11))
			{
				?>
				<option value="<?php echo $row11['city_id'];?>"><?php echo $row11['city_name'];?></option>
                
				<?php
			
			}
}




?>
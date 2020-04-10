<?php

include('connection.php');

if(isset($_REQUEST['id']))
{
	$id = $_GET['id'];
	$sql1 = "select * from state where country_id=$id";
	
			$result1 = mysqli_query($con,$sql1);
			
			while($row1=mysqli_fetch_array($result1))
			{
				?>
				<option value="<?php echo $row1['state_id'];?>"><?php echo $row1['state_name'];?></option>
                
				<?php
			
			}
}




?>
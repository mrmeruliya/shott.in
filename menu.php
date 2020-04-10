<?php
session_start();
include "connection.php";
if(isset($_REQUEST['scid']))
{
	$scid = $_REQUEST['scid'];
}
?>

<div class="main-nav-wrapper nav-wrapper-1-1">
      <nav>
        <div class="main-nav main-nav-1 type-1 home-sticky-nav">
          <div class="container">
            <div class="nav-logo"><a href="index.php"><img src="assets/images/logo2.png" alt="Wolverine"></a></div>
            <div class="nav-logo logo-2"><a href="index.php"><img src="assets/images/logo.png" alt="Wolverine" class="logo-2"></a></div>
            
            <ul class="nav-main-menu">
              <?php
				if(isset($_REQUEST['scid']))
				{
				?>
			  <li><a href="index.php?scid=<?php echo $scid;?>">HOME</a></li>
              <li><a href="activity.php?scid=<?php echo $scid;?>">GO SHOTT</a></li>
              <li>
			  <a href="#">
			  HUNGRY?
			  </a>
			  <ul>
				<?php
				$query_category="SELECT * FROM food_category";
				$result_category=mysqli_query($con,$query_category);
				
				

				while($row_category=mysqli_fetch_array($result_category))
				{
				?>
                 <li><a href="food.php?scid=<?php echo $scid;?>&cid=<?php echo $row_category['category_id'];?>"><?php echo $row_category['category_title'];?></a></li>
                
				 <?php
				 }
				 ?>
                </ul>
			  </li>
              <li><a href="event.php?scid=<?php echo $scid;?>">PARTY WITH SHOTT</a></li>
              <li><a href="contact.php?scid=<?php echo $scid;?>">Contact Us</a></li>
              
				<?php
				if(isset($_SESSION['user_name']))
				{
				?>
			  
			  <li>
			  <a href="#">
			  <?php echo $_SESSION['user_name'];?>
			  </a>
			  <ul>
				
				 <li><a href="my_booking.php?scid=<?php echo $scid;?>">My Booking</a></li>
				 <li><a href="logout.php?scid=<?php echo $scid;?>">Logout</a></li>
                
				</ul>
			  </li>
              <?php
			  }
			  else
			  {
			  ?>
			  <li><a href="login.php?scid=<?php echo $scid;?>">Login</a></li>
			  <?php
			  }
			  ?>
			  <?php
			  }else
			  {?>
			  <li><a href="index.php">HOME</a></li>
              <li><a href="activity.php">GO SHOTT</a></li>
              <li>
			  <a href="#">
			  HUNGRY?
			  </a>
			  <ul>
				<?php
				$query_category="SELECT * FROM food_category";
				$result_category=mysqli_query($con,$query_category);
				
				

				while($row_category=mysqli_fetch_array($result_category))
				{
				?>
                 <li><a href="food.php?cid=<?php echo $row_category['category_id'];?>"><?php echo $row_category['category_title'];?></a></li>
                
				 <?php
				 }
				 ?>
                </ul>
			  </li>
              <li><a href="event.php">PARTY WITH SHOTT</a></li>
              <li><a href="contact.php">Contact Us</a></li>
               <?php
				if(isset($_SESSION['user_name']))
				{
				?>
			  
			  <li>
			  <a href="#">
			  <?php echo $_SESSION['user_name'];?>
			  </a>
			  <ul>
				
				 <li><a href="my_booking.php">My Booking</a></li>
				 <li><a href="logout.php">Logout</a></li>
                
				</ul>
			  </li>
              <?php
			  }
			  else
			  {
			  ?>
			  <li><a href="login.php">Login</a></li>
			  <?php
			  }
			  ?>
			  <?php
			  }
			  ?>
				<?php
				if(isset($_REQUEST['scid']))
				{
				$query_shott_city_d1="SELECT * FROM shott_city where shott_city_id = $scid";
				$result_shott_city_d1=mysqli_query($con,$query_shott_city_d1);
				$row_shott_city_d1=mysqli_fetch_array($result_shott_city_d1);
				?>
              <li><a href="#"><?php echo $row_shott_city_d1['shott_city_name'];?></a>
              <?php
			  }
			  else
			  {
			  ?>
			  <li><a href="#">Select Your City</a>
			  <?php
			  }
			  ?>
			  <ul>
				<?php
				$query_shott_city1="SELECT * FROM shott_city";
				$result_shott_city1=mysqli_query($con,$query_shott_city1);
				
				$id_shott_city1=1;

				while($row_shott_city1=mysqli_fetch_array($result_shott_city1))
				{
				?>
                 <li><a href="index.php?scid=<?php echo $row_shott_city1['shott_city_id'];?>"><?php echo $row_shott_city1['shott_city_name'];?></a></li>
                
				 <?php
				 }
				 ?>
                </ul>
              </li>
              
              
             
            </ul>
            <ul class="nav-main-menu small-screen">
              <?php
				if(isset($_REQUEST['scid']))
				{?>
			  <li><a href="index.php?scid=<?php echo $scid;?>">HOME</a></li>
              <li><a href="activity.php?scid=<?php echo $scid;?>">GO SHOTT</a></li>
              <li>
			  <a href="#">
			  HUNGRY?
			  </a>
			  <ul>
				<?php
				$query_category="SELECT * FROM food_category";
				$result_category=mysqli_query($con,$query_category);
				
				

				while($row_category=mysqli_fetch_array($result_category))
				{
				?>
                 <li><a href="food.php?scid=<?php echo $scid;?>&cid=<?php echo $row_category['category_id'];?>"><?php echo $row_category['category_title'];?></a></li>
                
				 <?php
				 }
				 ?>
                </ul>
			  </li>
              <li><a href="event.php?scid=<?php echo $scid;?>">PARTY WITH SHOTT</a></li>
              <li><a href="contact.php?scid=<?php echo $scid;?>">Contact Us</a></li>
			   <?php
				if(isset($_SESSION['user_name']))
				{
				?>
			  
			  <li>
			  <a href="#">
			  <?php echo $_SESSION['user_name'];?>
			  </a>
			  <ul>
				<li><a href="my_booking.php?scid=<?php echo $scid;?>">My Booking</a></li>
				 <li><a href="logout.php?scid=<?php echo $scid;?>">Logout</a></li>
                
				</ul>
			  </li>
              <?php
			  }
			  else
			  {
			  ?>
			  <li><a href="login.php?scid=<?php echo $scid;?>">Login</a></li>
			  <?php
			  }
			  ?>
              <?php
			  }else
			  {?>
			  <li><a href="index.php">HOME</a></li>
              <li><a href="activity.php">GO SHOTT</a></li>
              <li>
			  <a href="#">
			  HUNGRY?
			  </a>
			  <ul>
				<?php
				$query_category="SELECT * FROM food_category";
				$result_category=mysqli_query($con,$query_category);
				
				

				while($row_category=mysqli_fetch_array($result_category))
				{
				?>
                 <li><a href="food.php?cid=<?php echo $row_category['category_id'];?>"><?php echo $row_category['category_title'];?></a></li>
                
				 <?php
				 }
				 ?>
                </ul>
			  </li>
              <li><a href="event.php">PARTY WITH SHOTT</a></li>
              <li><a href="contact.php">Contact Us</a></li>
			   <?php
				if(isset($_SESSION['user_name']))
				{
				?>
			  
			  <li>
			  <a href="#">
			  <?php echo $_SESSION['user_name'];?>
			  </a>
			  <ul>
				
				 <li><a href="my_booking.php">My Booking</a></li>
				 <li><a href="logout.php">Logout</a></li>
                
				</ul>
			  </li>
              <?php
			  }
			  else
			  {
			  ?>
			  <li><a href="login.php">Login</a></li>
			  <?php
			  }
			  ?>
              
			  <?php
			  }
			  ?>
              <?php
				if(isset($_REQUEST['scid']))
				{
				$query_shott_city_d2="SELECT * FROM shott_city where shott_city_id = $scid";
				$result_shott_city_d2=mysqli_query($con,$query_shott_city_d2);
				$row_shott_city_d2=mysqli_fetch_array($result_shott_city_d2);
				?>
              <li><a href="#"><?php echo $row_shott_city_d2['shott_city_name'];?></a>
              <?php
			  }
			  else
			  {
			  ?>
			  <li><a href="#">Select Your City</a>
			  <?php
			  }
			  ?>
                <ul>
                 <?php
				$query_shott_city2="SELECT * FROM shott_city";
				$result_shott_city2=mysqli_query($con,$query_shott_city2);
				
				$id_shott_city2=1;

				while($row_shott_city2=mysqli_fetch_array($result_shott_city2))
				{
				?>
                 <li><a href="index.php?scid=<?php echo $row_shott_city2['shott_city_id'];?>"><?php echo $row_shott_city2['shott_city_name'];?></a></li>
                
				 <?php
				 }
				 ?>
                </ul>
              </li>
              </li>
             
             
              
              
              
            </ul>
            <div class="nav-hamburger-wrapper">
              <div class="cell-vertical-wrapper">
                <div class="cell-middle">
                  <div class="nav-hamburger"><span></span></div>
                </div>
              </div>
            </div>
            <div class="nav-top-cart"></div>
          </div>
         
        </div>
      </nav>
    </div>
<?php 

  include("db_connection.php");
  if(!isset($_GET['uid'])){
	  echo "<li data-role=\"list-divider\" >特辑FEATURE</li>";
	  $query = "SELECT * FROM `items` WHERE `category`= \"feature\"";
	  
	  global $connection;
	  $result = mysqli_query($connection,$query);          //query
	  if(!$result)
	  {
		 echo 'Houston we have a problem '.mysqli_error($connection);
		 exit;
	  }
	  
	  
	  while( $row = mysqli_fetch_array($result) ){
		echo "<li data-icon=\"star\"><a href=\"#pageMagazine\" class=\"featureClick\" data=".$row['uid'].">";
		echo    	"<img src=\"/Sneaker/".$row['list_thumb']."\" >";
		echo 		"<h3 class=\"ui-li-heading\">".$row['title']."</h3>";
		echo 		"<p class=\"ui-li-desc\">".$row['description']."</p>";
		echo 	"</a>";
		echo "</li>";
	  }
  }
  else
  {
	  $query = "SELECT * FROM `items` WHERE `category`= \"".$_GET['uid']."\"";
	  
	  global $connection;
	  $result = mysqli_query($connection,$query);          //query
	  if(!$result)
	  {
		 echo 'Houston we have a problem '.mysqli_error($connection);
		 exit;
	  }
	  $row = mysqli_fetch_array($result);
	  //echo "<div data-role=\"header\">";
	  echo      "<h1>".$row['title']."</h1>";
	  //echo "</div>";
	  //echo "<div data-role=\"content\">";
	  //echo "<p>123</p>";
	  echo str_replace("src=\"","src=\"/Sneaker/",$row['content'] );
	  //echo "</div>";
	  //echo "<div data-role=\"footer\">";
	  echo "<h4>".$row['date']."@".$row['arthur']."</h4>";
	  //echo "</div>";
			
		
	  
  }
  
  /*
  $array = mysqli_fetch_assoc($result);                          //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  //var_dump($array);
  $output;
  if($_GET["item"] == "items")
  $output =  $array['content'];
  if($_GET["item"] == "storeItem")
  $output = $array['siInformation'];
  
  global $user;
  //echo("服务器是啥".$user);
  if($user == "zntk_ref"){
  	echo $output;
  }
  else {
  	echo urldecode($output);
  }
  */
  
  
  
?>
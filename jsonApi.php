<?php 

  include("db_connection.php");
  
  
  $query = "SELECT * FROM `items` WHERE `category`= \"feature\"";
  global $connection;
  $result = mysqli_query($connection,$query);          //query
  if(!$result)
  {
	 echo 'Houston we have a problem '.mysqli_error($connection);
	 exit;
  }
  echo "<ul data-role=\"listview\">";
  
  while( $row = mysqli_fetch_array($result) ){
	echo "<li><a href=\"#newsItem\" class=\"newsClick\" data=".$row['uid']."><img src=\"/Sneaker/".$row['list_thumb']."\"/>";
	echo "<h3 class=\"ui-li-heading\">".$row['title']."</h3>";
	echo "<p class=\"ui-li-desc\">".$row['description']."</p>";
	echo "</a>";
	echo "</li>";
  }
  echo "</ul>";
  
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
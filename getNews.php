<?php 

  include("db_connection.php");
  if(!isset($_GET['uid'])){
	  $query = "SELECT * FROM `items` WHERE `category`= \"news\"";
	  
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
  }
  else
  {
	  $query = "SELECT * FROM `items` WHERE `uid`= \"".$_GET['uid']."\"";
	  
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
	  $modifyStr = str_replace("src=\"up","src=\"/Sneaker/up",$row['content'] );
	  $modifyStr = str_replace("<img ","<img class=\"mobileimg\"",$modifyStr);
	  echo $modifyStr;
	  //echo "</div>";
	  //echo "<div data-role=\"footer\">";
	  echo "<h4>".$row['date']."@".$row['arthur']."</h4>";
	  //echo "</div>";
			
		
	  
  }
  
?>
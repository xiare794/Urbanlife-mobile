<?php 

  include("db_connection.php");
  if(!isset($_GET['uid'])){
	  echo "getMagazine, get nothing";
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
	  $modifyStr = str_replace("src=\"","src=\"/Sneaker/",$row['content'] );
	  //$modifyStr = str_replace("<img ","<img class=\"mobileimg\"",$modifyStr);
	  
	  $content = explode( 'column', $row['content'] )[1];
	  //$content = explode( ">", $content )[1];
	  $content = explode( ">", $content )[2];
	  //var_dump($content);
	  echo "<p>".urldecode($content)."</p>";
	  
	  //var_dump( $content);
	  
	  //$doc = new DOMDocument();
	  //$doc->loadHTML($row['content']);
	  //$body = $doc->saveHTML($doc->getElementsByTagName('p')->item(2));
	  
	  //echo $body;
	  //echo "</div>";
	  //echo "<div data-role=\"footer\">";
	  echo "<h4>".$row['date']."@".$row['arthur']."</h4>";
	  
	  $dir = "../Sneaker/".$row['img_list'];
	  $files = scandir($dir);
	  
	  $line = 0;
	  echo "<div id=\"Gallery\" >";
	  for($i=2; $i<count($files); $i++){
		  
		  if(($i-2)%3 == 0)
		  	echo "<div class=\"gallery-row\">";
		  
		  echo "<div class=\"gallery-item\"><a href=\"".$dir."/".$files[$i]."\" rel=\"external\">";
		  echo "<img src=\"".$dir."/".$files[$i]."\" alt=\"".$row['title']."\" /></a></div>";
		  	
		  if(($i-2)%3==2){
			  echo "</div>";
		  	  
		  }
		   //echo $line;
	  }
	  echo "</div>";
	  
  }
  
  
  
?>
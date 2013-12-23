<?php 
  function echouiClass($colCount){
	  
	  switch ($colCount){
			  case 0:
			  	echo "ui-block-a";
				break;
			  case 1:
			  	echo "ui-block-b";
			  	break;
			  case 2:
			  	echo "ui-block-b";
			  	break;
			  case 3:
			  	echo "ui-block-b";
			  	break;
		  }
  }
  include("db_connection.php");
  if(!isset($_GET['uid'])){
	  echo "<li data-role=\"list-divider\" >特辑FEATURE</li>";
	  $query = "SELECT * FROM `storeItem` ";
	  
	  global $connection;
	  $result = mysqli_query($connection,$query);          //query
	  if(!$result)
	  {
		 echo 'Houston we have a problem '.mysqli_error($connection);
		 exit;
	  }
	 
	  //打印排头
	  echo "<div class=\"ui-grid-c\">";
	  $colCount = 0;
	  while( $row = mysqli_fetch_array($result) ){
		  echo "<div class=\"";
		  echouiClass($colCount);
		  echo " ui-img \">";
		  	echo "<img src=\"../Sneaker/".$row['siThumb']. "\" style=\"width:100%; \" />";
			echo "</div>";
			$colCount++;
			echo "<div class=\"";
			echouiClass($colCount);
			echo " ui-img \">";
			
			echo "<h4>".$row['siName']."</h4>";
			echo "<p>".$row['siInformation']."</p>";
		  echo "</div>";
		  $colCount++;
		  if($colCount == 4){
			$colCount = 0;
			echo "</div>";
			echo "<div class=\"ui-grid-c\">";
		  }
		/*echo "<li data-icon=\"star\"><a href=\"#pageItem\" class=\"storeClick\" data=".$row['uid'].">";
		echo    	"<img src=\"/Sneaker/".$row['list_thumb']."\" >";
		echo 		"<h3 class=\"ui-li-heading\">".$row['title']."</h3>";
		echo 		"<p class=\"ui-li-desc\">".$row['description']."</p>";
		echo 	"</a>";
		echo "</li>";*/
	  }
  }
  else
  {
		echo "no";		
		
	  
  }
?>
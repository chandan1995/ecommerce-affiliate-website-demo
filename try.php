<!doctype html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<title> Online Shopping Made Easy </title>	


<?php 
 include 'connect.php';
 include 'header.php';
error_reporting(0);
if(isset($_POST["submit"])){
	$search= $mysqli->real_escape_string($_POST['name']);
	$chopp= trim($search);	
	$sterm="(SELECT * from phone WHERE title LIKE '%$chopp%')
union (select * from ac where title like '%$chopp%')
union (select * from tv where title like '%$chopp%')	
order by saved desc;";
	$resultSet= $mysqli->query($sterm);
	if($resultSet->num_rows > 0){
		while($rows=$resultSet->fetch_assoc()){
			$sn=$rows['title'];
			$MRP=$rows['mrp'];
			$Sellingprice=$rows['price'];
			$cashback=$rows['cashback'];
			$cper=$rows['affper'];
			$saved=$rows['saved'];
			$sper=$rows['tdisc'];
			$url=$rows['producturl'];
			$furl="&affid=chandan09";
			$urls=$url.$furl;
			$iurl=$rows['imageurl'];
			$imageurls= strstr($iurl, ';', true);
			print '<center><table><tr><td>';
			print '<img  src='.$imageurls . ' width="120" height="350" /></td>';
			echo "<td><h4>&nbsp;&nbsp;&nbsp;&nbsp;$sn</h4><br/>&nbsp;&nbsp;&nbsp;&nbsp;
			MRP:$MRP/-<br/>&nbsp;&nbsp;&nbsp;&nbsp;Sellingprice:$Sellingprice/-<br/>&nbsp;&nbsp;&nbsp;&nbsp;cashback:$cashback/-($cper%)<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;You Save:$saved/-($sper%) <br/> &nbsp;&nbsp;&nbsp;&nbsp; " ;
			?>
			<button ><a href="<?php echo $urls; ?>" target="_blank" > Buy HERE</a></button></br></td>
			</tr></table></center><hr><?php
		
		}
	}
	else{
		echo  "No results. Search with proper Keywords";
	}
}
include 'footer.php';
?>


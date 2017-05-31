<?php
include 'header.php'; 
error_reporting(0);
$search=$_POST['st'];
$s=explode("/",$search);
$atag="&tag=priceonline-21";
$ftag="?affid=chandan09";
$stag="?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=53360";
//print_r (array_values($s));
//echo (array_values($array));
$ss=$s[2];

switch($ss){
	case "www.amazon.in":
		$sol= $search.$atag;
		break;
	case "www.flipkart.com":
	     $sol= $search.$ftag;
		 break;
	case "www.snapdeal.com":
		$sol= $search.$stag;
		break;	
	default: 
		echo "Couldnt perform";
		break;
	
	
}

?><div class="container">
  <h2>Direct Search Panel</h2>
  
    
    <div class="well  well-lg">
	<form action="affids.php"  method="post">
 <input type="text" name="st" placeholder="enter url" class="form-group" />
 <input type="submit" value="submit"  />

</form>
Click on this generated link to get cashback on your account</br>
<button><a href="<?php echo $sol; ?>" class="btn btn-large" style="text-decoration: none" target="_blank">HERE</a> </button>
<!--<button text-decoration="none" ><a href="<?php echo $sol; ?>" target="_blank" >Buy LINK</a></button>--></br></center>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
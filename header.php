<!doctype html>
<head> </head>
<body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">PriceOnline</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Hot Deals<span class="sr-only">(current)</span></a></li>
        <!--<li><a href="#"></a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sites <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">AMAZON</a></li>
            <li><a href="demo.php">FLIPKART</a></li>
            <li><a href="#">SNAPDEAL</a></li>
			<li><a href="#">PAYTM</a></li>
			<li><a href="#">EBAY</a></li>
			<li><a href="#">TATA CLIQ</a></li>
			<li><a href="#">SH0PCLUES</a></li>
			<!--<li><a href="#">SNAPDEAL</a></li>
			<li><a href="#">SNAPDEAL</a></li>
	        <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="try.php" method="POST">
        <div class="form-group">
          <input type="text" name="name"  placeholder="Search your favorite Mobile"  size="60px"  onkeyup="autocomplet()" required/><ul id="country_list_id"></ul>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signin.php">Signin/SignUp</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Conatact Us</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="#">Terms & Conditions</a></li>
			<li><a href="#">Blog</a></li>
           <!-- <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplet({
		source: "try.php",
		minLength: 15
	});				

});
</script>
</body>
</html>

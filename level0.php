<?php include "base.php" ?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if(isset($_POST["submit"]))
	{
			$_SESSION['level']=0;
			$res=mysqli_query($conn,"SELECT level from users where email='".$_SESSION['email']."';");
			$row1=mysqli_fetch_array($res,MYSQLI_ASSOC);
			if($_SESSION['level']>$row1['level'])
				mysqli_query($conn,"UPDATE users set level=0,time=now() where email='".$_SESSION['email']."';");
			echo "<meta content=\"0;level".$_SESSION['level'].".php\" http-equiv=\"refresh\">";
		 
	}
}	
?>

<?php if(!isset($_SESSION['level']))
	die("<h1>access denied</h1>");
	else {
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register Here!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./css/level0.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/grayscale.css">    

</head>
<body style="background-color: #111;">
    
    
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    
					
                  
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Navigation Bar Ends-->
    
    
    
<!-- partial:index.partial.html -->
<div class="tree">
  <div class="first">
    <div class="p"><span1>Events</span1>
      <div class="second">
        <div class="p"><span1>A</span1>
          <div class="third"><span1><a href="eventa.php" target="_blank">Quiz (Round 2)</a></span1><span1><a href="eventa.php" target="_blank">Lively Facets</a></span1><span1><a href="eventa.php" target="_blank">Brush Hour</a></span1><span1><a href="eventa.php" target="_blank">Glare the Earthenware</a></span1><span1><a href="eventa.php" target="_blank">Impressions</a></span1><span1><a href="eventa.php" target="_blank">Sketching</a></span1><span1><a href="eventa.php" target="_blank">Archiving Emotions</a></span1><span1><a href="eventa.php" target="_blank">Hair Styling</a></span1></div>
        </div>
        <div class="p"><span1>B</span1>
            <div class="third"><span1><a href="eventb.php" target="_blank">Proelium</a></span1><span1><a href="eventb.php" target="_blank">Boogie Thrill</a></span1><span1><a href="eventb.php" target="_blank">Nukkad Natak</a></span1><span1><a href="eventb.php" target="_blank">Graffiti</a></span1><span1><a href="eventb.php" target="_blank">Spielberg</a></span1>
            </div>
          </div>
            <div class="p"><span1>C</span1>
                <div class="third"><span1><a href="eventc.php" target="_blank">Goonj</a></span1><span1><a href="eventc.php" target="_blank">Bandish</a></span1><span1><a href="eventc.php" target="_blank">Don de 'Paper'ica</a></span1><span1><a href="eventc.php" target="_blank">Double Trouble</a></span1>
            </div>
        </div>
            <div class="p"><span1>D</span1>
                <div class="third"><span1><a href="eventd.php" target="_blank">Kite Runner</a></span1><span1><a href="eventd.php" target="_blank">Splash</a></span1><span1><a href="eventd.php" target="_blank">Raider Zone</a></span1><span1><a href="eventd.php" target="_blank">Tarantino</a></span1><span1><a href="eventd.php" target="_blank">Raga</a></span1>
            </div>
        </div>
       
      </div>
    </div>

<!-- partial -->
  

  
	 
	    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/grayscale.js"></script>
	<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
    container: 'body'
	});   
});
</script>
</body>
</html>
    
<?php } ?>
    
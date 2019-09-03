<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="/visual/logo.jpeg" class="pic">
			</div>
			<div class="col-sm-4">
				<p class="slogan"><i class="fa fa-heart" aria-hidden="true"></i> Hear it. See it. Live it.<i class="fa fa-heart" aria-hidden="true"></i></p>
			</div>
			<div class="col-sm-3">
				<p class="email">Email:music@gmail.com</p>
			</div>
			<div class="col-sm-3">
			    <p class="tel">Telephone: 9325672283</p>
		    </div>
		    <a href="login_wel.php">login</a>
		</div>
	</div><br><br>

	<!--img src="images/m2.jpg" height="400px;" width="1299px" -->
<div class="slide">
	<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides"	src="/visual/12.jpeg" height="500px;" width="1299px">
  <img class="mySlides" src="/visual/img.jpeg" height="500px;" width="1299px">
  <img class="mySlides" src="/visual/img3.jpeg" height="500px;" width="1299px">
  <img class="mySlides" src="/visual/bg.jpg" height="500px;" width="1299px">
  <img class="mySlides" src="/visual/1.jpg" height="500px;" width="1299px">
  <img class="mySlides" src="/visual/bgimg.jpg" height="500px;" width="1299px">
  <img class="mySlides" src="/opt/lampp/htdocs/visual/10.jpg" height="500px"
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>

</body>
</html>
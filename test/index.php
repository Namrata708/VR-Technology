<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
	
	 .IMG{ 
                float:center; 
               
                font-size: 15px;
                margin-top: 70px;
                
            } 
            .slog{ 
                float:center;  
                margin-top: 70px;
                 padding: 1%;
                 font-size: 150%;

               
            } 
            .mail{ 
                float:center;
                margin-top: 70px;
                padding: 1%;
                font-size: 150%;
                
            } 
            .con{ float:center;  
                margin-top: 70px;
               
                font-size: 150%;
                padding: 1%;
                margin-left: 40px;
                 

            }
	
</style>
</head>


<body>

<div class="container">
	<div class="row">
        <div class="col-sm-3">
        <IMG SRC="book.png" ALT="some text" WIDTH=150 HEIGHT=150>
        </div>

		<div class= "col-sm-3"> 
		<h2 class="slog"><b>Book Makes Life Perfect</b></h2> 
		</div>
		  
		              
		<div class = "col-sm-5">
		<h2 class="mail"><b>Email: snehaljamale698@gmail.com</b></h2> 
		</div> 
              
		<div class = "col-sm-9">
        <h2 class="con"><b>Contact:9284272971</b></h2> 
		</div>
		</div> 
	</div>
</div>

<!-- Slide Show -->

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/4.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">BOOKS ARE SECONT THING MAKE MANS PERFRCT</h2>
  <p class="w3-opacity"><i>We love Books</i></p>
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
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
    setTimeout(carousel, 3000);
}
</script>

<?php
   include 'conn.php';

//select all

	$perpage = 6;
          if(isset($_GET["page"])){
          $page = intval($_GET["page"]);
          }else {
          $page = 1;
          }
          $calc = $perpage * $page;
          $start = $calc - $perpage;
          $result = mysqli_query($conn, "SELECT * FROM publication ORDER BY id DESC  Limit $start, $perpage");
          $rows = mysqli_num_rows($result);

          if($rows){
          $i = 0;
        while($your_post = mysqli_fetch_assoc($result)) {
    	$id=$your_post['id'];
    	$title=$your_post['title'];
    	$comment=$your_post['comment'];
    	$image=$your_post['image'];
    	$website=$your_post['website'];
    	$email=$your_post['email'];
    	$link="index.php?id=".$id;

   echo' <div class="gallery">';
   echo' <div class="desc"><h3>'.$title.'</h3></div>';
   echo "<img src= data:image/jpg;base64,$image width='10%' style='max-height:200px;'>";
   echo' <div class="desc1" style="max-height:40px;">';
   echo"<br>";
   echo '</div>';

    }
   
      }else{
              echo "<center>";
              echo "<font color = 'red'>";
              echo "NO POST YET !";
              echo "</font>";
              echo "</center>";
          }
	?>
    <br><br>
    

</div>
<center>
<?php
//page number footer
echo "<br><br><br>";
    if(isset($page)){
    $result = mysqli_query($conn,"select Count(*) As Total from publication_info");
    $rows = mysqli_num_rows($result);
    if($rows){
    $rs = mysqli_fetch_assoc($result);
    $total = $rs["Total"];
    }
    echo "<div class='pagenation'>";
    $totalPages = ceil($total / $perpage);
    if($page <=1 ){
    //echo "<span id='page_links' style='font-weight: bold;'>&laquo;</span>";
    }else{
    $j = $page - 1;
    echo "<a href='index.php?page=$j'>&laquo;</a>";
    }
    for($i=1; $i <= $totalPages; $i++){
    if($i<>$page){
      echo "<a href='index.php?page=$i'>$i</a>";
    }
    else
    {
      echo "<a href='index.php?page=$i' class='active'>$i</a>";
    }
  }
  if($page == $totalPages )
  {
//echo "<span id='page_links' style='font-weight: bold;'>&raquo;</span>";
  }else{
    $j = $page + 1;
    echo "<a href='index.php?page=$j'>&raquo;</a>";
    }
    echo "</div>";
    }
    ?>


</body>
</html>

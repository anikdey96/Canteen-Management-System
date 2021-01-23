<?php  include('fifth_server.php'); ?>
<?php
if(isset($_POST['search']))
{
$valueTosearch = $_POST['valueTosearch'];
$query = "SELECT * FROM `canteen_member_info` WHERE CONCAT(`Name`, `Age`, `Salary`, `Id_Number`) LIKE '%".$valueTosearch."%'";
$search_result = filterTable($query);
}
else{
$query = "SELECT * FROM `canteen_member_info`";
$search_result = filterTable($query);
}
function filterTable($query)
{
  $db = mysqli_connect('localhost', 'root', '', 'canteen');
  $filter_Result = mysqli_query($db, $query);
  return $filter_Result;
}
?>

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>canteen management system</title>
    
    <link rel="stylesheet" href="css/fifth.css">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  }
#copyright{
  margin:0px;
  padding:0px;
  text-align:center;
}

#demo{
  text-align:center;
}

</style>

    
     </head>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/welcome (1).gif" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/download (11).jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/download (22).jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


</script>

<nav>
      <ul>
         
         <li><a href="sixth_page.php">Food Item & Prices</a></li>
         <li><a href="seventh_page.php">Special Item</a></li>
         <li><a href="admin.html" >Add</a></li> 
      </ul>
</nav> 
<form action="fifth_page.php" method="post"> 
  
      <h2 id="h2">Canteen Member Info</h2><br\><br\><br\>
      <input type="text" name="valueTosearch" placeholder="Value To Search"><br><br>
      <input type="submit" name="search" placeholder="Filter" value="Filter"><br><br>
         
                    <table class="table">
                      <tr>
                        <thead>
                        <th>Name</th>     
                        <th>Age</th>
                        <th>Salary</th>
                        <th>Id_Number</th>
                      </tr>
                        </thead>
                  <tbody>
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                      <tr>
                        
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Age']; ?></td>
                        <td><?php echo $row['Salary']; ?></td>
                        <td><?php echo $row['Id_Number']; ?></td>
                     
                      </tr>
                    <?php endwhile;?>

                    
                  </tbody>
                    </table><br><br>
                    </form>
<button type="button" style="background-color:yellow;margin-left:auto;margin-right:auto;display:block;margin-top:0px;margin-bottom:0px" onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.
<p id="demo"></p>
</button>
<br>
<div class="copyrigh" style="background-color:lightblue">
<p id="copyright">&copy;Jashore University of Science & Technology</p>
</div>
</html>
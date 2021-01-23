<?php  include('sixth_server.php'); ?>
<?php
if(isset($_POST['search']))
{
$valueTosearch = $_POST['valueTosearch'];
$query = "SELECT * FROM `items` WHERE CONCAT(`id`, `name`, `price`, `deleted`) LIKE '%".$valueTosearch."%'";


$search_result = filterTable($query);
}
else{
$query = "SELECT * FROM `items` where not deleted";
$search_result = filterTable($query);
}
function filterTable($query)
{
  $connect = mysqli_connect('localhost', 'root', '', 'canteen');
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}
?>

<!DOCTYPE html>
<head>

    <style>
        img {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }

        table {
                      font-family: sans-serif;
                      border: 1px solid black;
                     
                      width: 100%;
                    }
                    
                    td, th {
                      border: 1px solid #dddddd;
                      text-align: left;
                      padding: 8px;
                    }
                    
                    tr:nth-child(even) {
                      background-color: #dddddd;
                    }

                    
                    h2{text-align: center;
                               color: tomato}

                               .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: gray;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: red;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: yellow;
  }
  #ight{
  margin:0px;
  padding:0px;
  text-align:center;
}

#demo{
  text-align:center;
}


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
        </style>

    
    
<title>canteen management system</title>
  </head>
  <body>
      <!-- <img src="images/food.gif" alt="food" width="200" height="200"> -->
      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/welcome-dribbble.gif" style="width:100%">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/download (11).jpg" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/download (22).jpg" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
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
<br>
      <nav>
                            <ul>
                               <!-- <li><a href="#home">Home</a></li>
                               <li><a href="#news">News</a></li>
                               <li><a href="#contact">Contact</a></li>
                               <li><a href="sixth_page(2).html">About</a></li>  -->

         <!-- <li><a href="#home">Home</a></li>
         <li><a href="#news">News</a></li>
         <li><a href="#contact">Contact</a></li> -->
         <li><a href="fifth_page.php">Canteen Member Info</a></li>
         <li><a href="seventh_page.php">Special Item</a></li>
         <!-- <li><a href="admin2.html">Add</a></li> -->
         <li><a href="login.php">Order</a></li>

                              </ul>
                            </nav>                    
        <form action="sixth_page.php" method="post">            
                    <h2>Food_Item_&_Prices</h2>
                    <input type="text" name="valueTosearch" placeholder="Value To Search"><br><br>
      <input type="submit" name="search" placeholder="Filter" value="Filter"><br><br>
                    <br\>
                    <br\>
                    <br\>
                    <table id="data-table-customer" class="responsive-table display" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Item Price/Piece</th>
                        <!-- <th>Quantity</th> -->
                      </tr>
                    </thead>

                    <tbody>
				
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                      <tr>
                        
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        
                     
                      </tr>
                    <?php endwhile;?>
</tbody>
</table><br>
  </form>                 
<button type="button" style="background-color:yellow;margin-left:auto;margin-right:auto;display:block;margin-top:0px;margin-bottom:0px" onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.
<p id="demo"></p>
</button>
<br>
<div id="righ" style="background-color:lightblue">
  <p id="ight">&copy;Jashore University of Science & Technology</p>
  
</div>

</body>
</html>
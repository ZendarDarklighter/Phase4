<?php 
/* File: Jobs-IO.php */
$page_title = "Biological Sciences - Internship Opportunities";
$css_path = "../css/styleLogan.css";

include('../php/inc.header.php');
?>
<body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Facilities</h2>
                    <ul class="side_menu">
                        <li><a href="../Facilities/Home-Faci.php">Facilities Home</a></li>
                        <li><a href="../Facilities/Facilities-L.php">Laboratory Information</a></li>
                        <li><a href="../Facilities/Facilities-T.php">Take a Tour</a></li>
                                      
                    </ul>
                
            
            </div>
            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                     
                         <h2>Virtual Tour of SIUE Biology Facilities</h2>

<!--//////////////////SLIDESHOW///////////////////////////////////////--> 


 <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="../images/Science-building.jpg" style="width:100%">
    <div class="text">Science Building West</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="../images/emptylab.jpg" style="width:100%">
    <div class="text">Biology laboratories contain 
    two benches with power and down draft vents.
     There is also a wall bench that includes
      water.</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="../images/emptylab2.jpg" style="width:100%">
    <div class="text">Empty Biology Lab</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="../images/greenhouse2.jpg" style="width:100%">
    <div class="text">Siue Greenhouse</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="../images/gardens.jpg" style="width:100%">
    <div class="text">Gardens</div>
  </div>

  


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>     
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
<!--/////////////////////////////////////////////////////////-->    
                </div>
            </div>
        	<div class="cleaner"></div>
        </div> 
<?php
        $copyright_year = "2017";
        $copyright_text = "CS321 - Team Bugs";
        include('../php/inc.footer.php')
    ?>
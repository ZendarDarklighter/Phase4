<!-- 
    
    File: inc.header.php
    Author: Carl Grissom and Team Bugs
    Team: Bugs
    Date: 10/31/2017
    CS-321 pahse 4

    Description: Header file for pages done by Carl Grissom
                 
-->
<!DOCTYPE html>
<html lang="en">
  <head>
        <title><?php echo $page_title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo $css_path; ?>" rel="stylesheet">  
        <script src="../js/common.js"></script>
    </head>
<body>
    <header>
<div id="main">
<div class="theme col-10 no_desktop">
  <button id="openNav" class="button theme xlarge" onclick="w3_open()">&#9776;</button>
    <div id="site_title" >
            <img class="tablet_only" src="/phase4/images/headers/header2.jpg" alt="biological Sciences">
            
    </div><!-- end div id="site_title" -->
</div>
        </div>
        <div id="header">
        <div id="site_title">
            <img class="desktop_only" src="../images/biosci.png" alt="Biological Sciences">
        </div><!-- end div id="site_title" -->
        
    <div class="slidemove desktop_only">
            <img class="slider" src="/phase4/images/slideshow/collacting.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/slideshow/experiment.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/slideshow/frog.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/slideshow/microscope.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/slideshow/thegroup.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/slideshow/theguy.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/slideshow/thelady.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/slideshow/verybig.jpg" style="width:100%">
        <script>
            var myIndex = 0;   
            carousel();
        </script>
    </div> <!--end div class="slidemove" -->

    <div id="menu" class="col-10 desktop_only">
        <ul>
            <li><a href="/phase4/home.php"> Home </a></li>
            <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Undergraduate</a>
                <div class="dropdown-content">
                    <a href="/phase4/undergrad/undergrad_home.php">Undergrad Home</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=ecology">Ecology, Evolution, and Environment</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=genetics">Genetics and Cellular Biology</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=integrative">Integrative Biology</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=medical">Medical Sciences</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=technology">Medical Technology</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=minor">Biology Minor</a>
                </div><!-- end div class="dropdown-content" -->
            </li>
            <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Graduate</a>
                <div class="dropdown-content">
                    <a href="/phase4/grad/grad_home.php">Grad Home</a>
                    <a href="/phase4/grad/admisson.php">Admissions</a>
                    <a href="/phase4/grad/research_topics.php.html">Research Topics</a>
                </div><!-- end div class="dropdown-content" -->
            </li>
            <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Student Resources</a>
                <div class="dropdown-content">
                    <a href="../stuRes/home.php">Resources Home</a>
                    <a href="../stuRes/tutor.php?subj=null">Tutoring</a>
                    <a href="../stuRes/software.php">Software</a>
                    <a href="../stuRes/advisor.php">Advising</a>
                    <a href="../stuRes/course.php">Course Information</a>
                    <a href="../StudentResources/Jobs-JM.php">Job Market Info</a>
                    <a href="../StudentResources/Jobs-IO.php">Internship Opportunities</a>
                </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Clubs and Events</a>
                    <div class="dropdown-content">
                        <a href="../clubs/Home_CE.php">Clubs and Events Home</a>
                        <a href="../clubs/seminar.php">Seminars</a>
                        <a href="../clubs/clubs.php">Student Organizations</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Facilities</a>
                    <div class="dropdown-content">
                        <a href="../Facilities/Home-Faci.php">Facilities Home</a>
                        <a href="../Facilities/Facilities-L.php">Laboratory Information</a>
                        <a href="../Facilities/Facilities-T.php">Take a Tour</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li><a href="../faculty/faculty.php">Faculty</a></li>
                <li><a href="../base/contactus.php">Contact Us</a></li>
        </ul>  
    </div><!--end div id="menu" -->

<div class="sidebar block card leftanim no_desktop" id="mySidebar" style="display: none;">
  <button class="baritem button large"
  onclick="w3_close()">Close &times;</button>
  <ul>
    <a href="/phase4/undergrad/undergrad_home.php"><button class="accordion btnhide"> Home </button></a>
    <button class="accordion">Undergraduate  </button>
        <div class="panel">
            <a href="/phase4/undergrad/undergrad_home.php">Undergrad Home</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=ecology">Ecology, Evolution, and Environment</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=genetics">Genetics and Cellular Biology</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=integrative">Integrative Biology</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=medical">Medical Sciences</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=technology">Medical Technology</a>
                    <a href="/phase4/undergrad/undergrad_content.php?page=minor">Biology Minor</a>
        </div>

    <button class="accordion"> Graduate</button>
        <div class="panel">
            <a href="/phase4/grad/grad_home.php">Grad Home</a>
            <a href="/phase4/grad/admisson.php">Admissions</a>
            <a href="/phase4/grad/research_topics.php.html">Research Topics</a>
        </div>
    
    <button class="accordion"> Student Resources</button>
        <div class="panel">
            <a href="../stuRes/home.php">Resources Home</a>
            <a href="../stuRes/tutor.php?subj=null">Tutoring</a>
            <a href="../stuRes/software.php">Software</a>
            <a href="../stuRes/advisor.php">Advising</a>
            <a href="../stuRes/course.php">Course Information</a>
            <a href="../StudentResources/Jobs-JM.php">Job Market Info</a>
            <a href="../StudentResources/Jobs-IO.php">Internship Opportunities</a>
        </div>
    
    <button class="accordion"> Clubs and Events</button>
        <div class="panel">
            <a href="../clubs/Home_CE.php">Clubs and Events Home</a>
            <a href="../clubs/seminar.php">Seminars</a>
            <a href="../clubs/clubs.php">Student Organizations</a>
        </div>
    
    <button class="accordion"> Facilities</button>
        <div class="panel">
            <a href="../Facilities/Home-Faci.php">Facilities Home</a>
            <a href="../Facilities/Facilities-L.php">Laboratory Information</a>
            <a href="../Facilities/Facilities-T.php">Take a Tour</a>
        </div>
   
      <a href="../faculty/faculty.php"><button class="accordion btnhide">Faculty</button></a>
      <a href="../base/contactus.php"><button class="accordion btnhide">Contact Us</button></a>
    </ul>
</div>
<script>

    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      }
    }
        function w3_open() {
  document.getElementById("main").style.marginLeft = "50%";
  document.getElementById("mySidebar").style.width = "75%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
    
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
    </script>

</header>
    <main id="<?php echo $main_id; ?>">
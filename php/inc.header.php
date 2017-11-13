<!-- 
    
    File: inc.header.php
    Author: written by team Bugs pre phase 4 get team member name
    Team: Bugs
    Date: 10/31/2017
    CS-321 pahse 4

    Description: Header file for graduate student pages
                 
-->
<!DOCTYPE html>
<html lang="en">
  <head>
        <title><?php echo $page_title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo $css_path; ?>" rel="stylesheet">  
    </head>
<body>
    <header>


<!-- mobile header and navigation -->
<div class="mobile>
<div id="site_title" class="col-3">
            <img src="/phase4/images/biosci.png" alt="Biological Sciences">
        </div><!-- end div id="site_title" -->
        <div class="sidebar block card leftanim mobile" id="mySidebar">
        <button class="baritem button large" onclick="w3_close()">Close &times;</button>
            <a href="#" class="baritem button">Home</a>
            <a href="#" class="baritem button">Undergraduate</a>
            <a href="#" class="baritem button">Graduates</a>
            <a href="#" class="baritem button">Student Resources</a>
            <a href="Calender.html" class="baritem button">Clubs and Events</a>
            <a href="#" class="baritem button">Facilities</a>
            <a href="#" class="baritem button">Faculty</a>
            <a href="#" class="baritem button">Contact Us</a>
    </div>
    <div class="theme col-10">
        <button id="openNav" class="button theme xlarge" onclick="w3_open()">
            &#9776;
        </button>
    </div>
</div>


<!-- Desktop header and nav menu  -->
<div>
    <div id="header" class="col-10">
        <div id="site_title" class="col-3">
            <img src="/phase4/images/biosci.png" alt="Biological Sciences">
        </div><!-- end div id="site_title" -->
        <div class="slidemove col-7">
            <img class="slider" src="/phase4/images/collacting.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/experiment.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/frog.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/microscope.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/thegroup.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/theguy.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/thelady.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/verybig.jpg" style="width:100%">
        </div> <!--end div class="slidemove" -->
      </div><!-- end div id="header"-->
     
     <nav>
    <!-- Desktop navigation menu -->
     <div id="menu" class="col-10 desktop">
            <ul>
                <li><a href="Home.html"> Home </a></li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Undergraduate</a>
                    <div class="dropdown-content">
                        <a href="Home-UG.html">Undergrad Home</a>
                        <a href="#">Ecology, Evolution, and Environment</a>
                        <a href="Undergrad-major.html">Genetics and Cellular Biology</a>
                        <a href="#">Integrative Biology</a>
                        <a href="#">Medical Sciences</a>
                        <a href="#">Medical Technology</a>
                        <a href="#">Biology Minor</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Graduate</a>
                    <div class="dropdown-content">
                        <a href="Home-G.html">Grad Home</a>
                        <a href="Grad_Admin.html">Admissions</a>
                        <a href="Re_Topic.html">Research Topics</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Student Resources</a>
                    <div class="dropdown-content">
                        <a href="Home-SR.html">Resources Home</a>
                        <a href="Tut_Home.html">Tutoring</a>
                        <a href="Software.html">Software</a>
                        <a href="Adv_Home.html">Advising</a>
                        <a href="Course_Home.html">Course Information</a>
                        <a href="Jobs-JM.html">Job Market Info</a>
                        <a href="Jobs-IO.html">Internship Opportunities</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Clubs and Events</a>
                    <div class="dropdown-content">
                        <a href="Home-CE.html">Clubs and Events Home</a>
                        <a href="Seminars.html">Seminars</a>
                        <a href="Stud_Org_Home.html">Student Organizations</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class = "dropbtn"> Facilities</a>
                    <div class="dropdown-content">
                        <a href="Home-Faci.html">Facilities Home</a>
                        <a href="Facilities-L.html">Laboratory Information</a>
                        <a href="Facilities-T.html">Take a Tour</a>
                    </div><!-- end div class="dropdown-content" -->
                </li>
                <li><a href="faculty.html">Faculty</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
            </ul>  
        </div><!--end div id="menu" -->
      </nav> 
</div>
<div>
<div id="header" class="col-10">
        <div id="site_title" class="col-3">
            <img src="/phase4/images/biosci.png" alt="Biological Sciences">
        </div><!-- end div id="site_title" -->
        <div class="slidemove col-5 no_mobile">
            <img class="slider" src="/phase4/images/collacting.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/experiment.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/frog.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/microscope.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/thegroup.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/theguy.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/thelady.jpg" style="width:100%">
            <img class="slider" src="/phase4/images/verybig.jpg" style="width:100%">
        </div> <!--end div class="slidemove" -->
      </div><!-- end div id="header"-->

      <div class="sidebar block card leftanim mobile" id="mySidebar">
        <button class="baritem button large" onclick="w3_close()">Close &times;</button>
            <a href="#" class="baritem button">Home</a>
            <a href="#" class="baritem button">Undergraduate</a>
            <a href="#" class="baritem button">Graduates</a>
            <a href="#" class="baritem button">Student Resources</a>
            <a href="Calender.html" class="baritem button">Clubs and Events</a>
            <a href="#" class="baritem button">Facilities</a>
            <a href="#" class="baritem button">Faculty</a>
            <a href="#" class="baritem button">Contact Us</a>
    </div>
    <div class="theme col-10">
        <button id="openNav" class="button theme xlarge" onclick="w3_open()">
            &#9776;
        </button>
    </div>

</div><!-- end tablet header and naviagtion menu -->
<script>
    function w3_open() {
    document.getElementById("main").style.marginLeft = "50%";
    document.getElementById("mySidebar").style.width = "50%";
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

    var myIndex = 0;   
    carousel(); 
                
    function carousel() {
        var i;
        var x = document.getElementsByClassName("slider");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2500);    
        }
        </script>
      
</script>
      
    </header>
    <main id="<?php echo $main_id; ?>">
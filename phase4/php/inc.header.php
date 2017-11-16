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
        <script src="/phase4/js/common.js"></script>
    </head>
<body>
    <header>

    <div id="site_title" >
            <img class="tablet_only" src="/phase4/images/headers/header2.jpg" alt="biological Sciences">
            <img class="no_tablet" src="/phase4/images/headers/biosci.png" alt="Biological Sciences">
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

    <div class="sidebar block card leftanim no_desktop" id="mySidebar">
    <button class="baritem button large" onclick="w3_close()">Close &times;</button>
        <a href="home.php" class="baritem button">Home</a>
        <a href="../undergrad/undergrad_home.php" class="baritem button">Undergraduate</a>
        <a href="/phase4/grad/grad_home.php" class="baritem button">Graduates</a>
        <a href="#" class="baritem button">Student Resources</a>
        <a href="Calender.html" class="baritem button">Clubs and Events</a>
        <a href="#" class="baritem button">Facilities</a>
        <a href="#" class="baritem button">Faculty</a>
        <a href="#" class="baritem button">Contact Us</a>
    </div>
    
    <div class="theme col-10 no_desktop">
        <button id="openNav" class="button theme xlarge" onclick="w3_open()">
            &#9776;
        </button>
    </div>
      
</header>
    <main id="<?php echo $main_id; ?>">
<!-- 
    
    File: home.html
    Author: Carl Grissom
    Team: Bugs
    Date: 10/31/2017
    CS-321 pahse 4

    Description: home page for biological sciences.
                 
-->

<?php
$page_title = "Biological Sciences Home";
$css_path = "/phase4/css/style.css";
$main_id = "main";

include('php/inc.header.php');
include('php/data.php');

?>

<div id="content_wrapper">
    <div id="sidebar" class="no_mobile col-2"> 
        <h2>Most Visited Links</h2>
        <ul class="side_menu">
            <li><a href="home.php">Course Home Page</a></li>
                <li><a href="Tut_Home.html">Tutoring</a></li>
                <li><a href="Jobs-IO.html">Internships</a></li>
                <li><a href="Adv_Home.html">Advising</a></li>
                <li><a href="faculty.html">Faculty</a></li>  
            </ul>
    </div>
            
    <div id="content" class="col-7-5">
    
        <div class="post_section">
            <div class="post_content">
            <h2>Biological Sciences at SIUE</h2>
                <div style="float: right;">
                    <a href="https://www.facebook.com/pages/SIUE-Biological-Sciences/303941963141257" target="_blank"><img alt="Facebook logo" height="27" src="images/facebook_logoS.png" width="27" /> <strong>Follow us on Facebook</strong></a>     
                </div>
                <div>
                    <iframe allowfullscreen="" frameborder="0" height="267" 
                        src="https://www.youtube.com/embed/azbvGrNrmBI">
                    </iframe>
                </div>
<br/><br/><br/>

        <?php
        # load text content into page
            $page = 'home';

            get_text_dump($page);

            display_content($content);
        ?>

    </div>
</div>
<div class="cleaner col-10"></div>
</div> 


<?php
    $copyright_year = "2017";
    $copyright_text = "Carl Grissom Team Bugs CS-321 phase 4 All rights reserved";

    include('php/inc.footer.php');
?>
<!-- 
    
    File: admission.php
    Author: Carl Grissom
    Team: Bugs
    Date: 10/31/2017
    CS-321 pahse 4

    Description:graduate admissions page.
                 
-->

<?php
$page_title = "Graduates Admissions";
$css_path = "/phase4/css/style.css";
$main_id = "main";

include('../php/inc.header.php');
include('../php/data.php');

?>

<div id="content_wrapper">
    <div id="sidebar" class="no_mobile col-2"> 
        <h2>Graduates</h2>
        <ul class="side_menu">
            <li><a href="grad_home.php">Graduate Home</a></li>
            <li><a href="admission.php">Admissions</a></li>
            <li><a href="research_topics.php">Research Topics</a></li>        
        </ul>
    </div>
            
    <div id="content" class="col-7-5">


        <?php

        

        ?>

    </div>
</div>
<div class="cleaner col-10"></div>
</div> 


<?php
    $copyright_year = "2017";
    $copyright_text = "Carl Grissom Team Bugs CS-321 phase 4 All rights reserved";

    include('../php/inc.footer.php');
?>
<!-- 
    
    File: research_topics.php
    Author: Carl Grissom
    Team: Bugs
    Date: 10/31/2017
    CS-321 pahse 4

    Description: sub-page to graduates page. Contains a list of links to 
                 research topics for graduate students. Page is responsive 
                 to web scaling @ screen widths >600px, >800px, <800px.
                 
-->

<?php
    $page_title = "Research Topics";
    $css_path = "../css/style.css";
    $main_id = "research";

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
        
    <!-- content section -->  
    <div id="content" class="col-7-5">
    
        <div class="post_section">

            <div class="post_content">
            <!-- post content here -->
              <?php
                    
                    get_research();

                    display_research_content($content);
                ?>  
                
            </div><!-- end div post content-->

        </div><!-- end div post section -->

    </div><!-- end div content -->
                        <div class="cleaner col-10"></div>
</div> <!-- end div content wrapper -->
<?php
    $copyright_year = "2017";
    $copyright_text = "Carl Grissom Team Bugs CS-321 phase 4 All rights reserved";

    include('../php/inc.footer.php');
?>
 
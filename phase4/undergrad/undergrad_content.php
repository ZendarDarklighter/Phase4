<!-- 
    
    File: undergrad_content.php
    Author: Carl Grissom
    Team: Bugs
    Date: 11/12/2017
    CS-321 pahse 4

    Description: undergrad pages template contains hard coded side nav 
                individual page content is loaded from database.
                 
-->

<?php
$page = $_GET['page'];

if($page== "ecology"){
    $page_title ="Ecology, Evolution...";
}
elseif($page == "genetics"){
    $page_title = "Genetics and Cellular Biology";
}
elseif($page == "integrative"){
    $page_title = "Integrative Biology";
}
elseif($page =="medical"){
    $page_title = "Medical Sciences";
}
elseif($page =="technology"){
    $page_title = "Medical Technology";
}
elseif($page =="minor"){
    $page_title = "Biology Minor";
}

$css_path = "/phase4/css/style.css";
$main_id = "main";

include('../php/inc.header.php');
include('../php/data.php');

?>

<!-- page content area -->
<div id="content_wrapper">
    <!-- navigation menu -->
    <div id="sidebar"> 
        <h2>Undergraduate Degrees</h2>
            <ul class="side_menu">
                <li><a href="undergrad_home.php">Undergraduates Home</a></li>
                <li><a href="undergrad_content.php?page=ecology">Ecology, Evolution...</a></li>
                <li><a href="undergrad_content.php?page=genetics">Genetics and Cellular Biology</a></li>
                <li><a href="undergrad_content.php?page=integrative">Integrative Biology</a></li>
                <li><a href="undergrad_content.php?page=medical">Medical Sciences</a></li>
                <li><a href="undergrad_content.php?page=technology">Medical Technology</a></li>
                <li><a href="undergrad_content.php?page=minor">Biology Minor</a></li>              
            </ul>
    </div><!-- end div sidebar -->
    <!-- content section -->  
    <div id="content" class="col-7-5">
    
        <div class="post_section">

            <div class="post_content">
            <!-- post content here -->
        
                <?php
                    # load text content into page

                        get_text_dump($page);

                        display_undergrad_content($content);
                ?>


                <a href="degree_req.php?page=<?php echo $page;?>">
                    <button type="button" class="but b">Degree Requirement</button>
                </a> 
                <a href="sampole_curr.php?page=<?php echo $page;?>">
                    <button type="button" class="but b">Sample Curriculum</button>
                </a>

            </div><!-- end div post content-->

        </div><!-- end div post section -->

    </div><!-- end div content -->
                        <div class="cleaner"></div>
</div> <!-- end div content wrapper -->

<!-- footer -->
<?php
    $copyright_year = "2017";
    $copyright_text = "Carl Grissom Team Bugs CS-321 phase 4 All rights reserved";

    include('../php/inc.footer.php');
?>  
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
    $css_path = "../css/carl_css/site.css";
    $main_id = "research";

    include('../php/carl/inc.research_topics.php');
    include('inc.header.php');
?>
<p>testing the header and footer</p>

<?php
    $copyright_year = "2017";
    $copyright_text = "Carl Grissom Team Bugs CS-321 phase 4 All rights reserved";

    include('inc.footer.php');
?>

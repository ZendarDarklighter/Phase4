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
    $css_path = "../css/site.css";
    $main_id = "research";

    include('../php/inc.header.php');
?>

<div id="">
    <div id="sidebar" class="no_mobile"> 
        <h2>Graduates</h2>
        <ul class="side_menu">
            <li><a href="Home-G.html">Graduate Home</a></li>
            <li><a href="Grad_Admin.html">Admissions</a></li>
            <li><a href="Re_Topic.html">Research Topics</a></li>        
        </ul>
    </div>
    <div id="content">
            <div>
            <h2>List of Research Topics:</h2>
                <div class="vertical-menu col-7-5">
                    <a href="#">Lunar Rhythm of Human Neurotransmitter-Like Factors</a>
                    <a href="#">Colonial Variation in Candida albicans</a>
                    <a href="#">Early and Late Antigens of Human Cytomegalovirus</a>
                    <a href="#">Tryptophan and Serotonin Metabolism in the CD-1 Mouse</a>
                    <a href="#">Ultraviolet Recovery in Tremella and Cryptococcus</a>
                    <a href="#">Isolation and Characterizations of a Phage from Bt</a>
                    <a href="#">Effects of THC on Larval Development in the Frog</a>
                    <a href="#">CIE of Excreted Group A Strep Polysaccharide</a>
                    <a href="#">Characterization of the Expression of a Cadherin-9 in Mouse Brain</a>
                    <a href="#">Bacteriophage Transfection of Heterologous Spheroplasts</a>
                    <a href="#">Annual Reproductive Morphology of Eumeses obsoletus</a>
                    <a href="#">The Limnology of the Whitewater River</a>
                    <a href="#">The Structure, Function, and Evolution of tRNA</a>
                    <a href="#">Effects of DDT on Adherens Junction Proteins in MDCK Cells</a>
                </div>
            </div>
    </div>
<?php
    $copyright_year = "2017";
    $copyright_text = "Carl Grissom Team Bugs CS-321 phase 4 All rights reserved";

    include('/phase4/php/inc.footer.php');
?>

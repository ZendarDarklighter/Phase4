<?php
    $page_title = "Tutoring";
    $css_path = "css/style.css";
    $main_id = "tutoring";
    $subj = $_GET["subj"];
    if($subj != "null"){
        $page_title = "Tutoring " . $subj;
        $main_id = $main_id . "_schedule";
    }
    include('../php/inc.header.php');
?>
<script src="../../Phase4/js/sidebar.js"></script>
<div id="stres_info">
<div id="sidebar">
    <script>sideBarLoad("Student Resorces","home.php","Resources Home","tutor.php?subj=null","Tutoring","","Software","","Advising","","Course Information"
    ,"","Job Market Info","","Internship Opportunities");</script>
</div>
<div id="center">
    where is it
</div>
</div>
<?php
    $copyright_year = "2017";
    $copyright_text = "bulshit";
    include('../php/inc.footer.php');
?>
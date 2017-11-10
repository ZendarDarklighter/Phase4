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
    <div id="tut_base">
    <h1>SIUE Tutoring</h1>
    <br><br>
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;The purpose of the Tutoring Resource Center is to help students succeed in their courses in a supportive learning environment. We are located in the Student Success Center 1252 and open Monday through Sunday. Students who need assistance with their SIUE courses are welcome on a walk-in basis. Individual and small group tutoring is available without an appointment. Handouts, computer software (Mathematica, Matlab, SPSS) and calculators also are available.
    </p>
    </div>
</div>
</div>
<?php
    $copyright_year = "2017";
    $copyright_text = "All praise the Guy.  The Guy is great and mighty!";
    include('../php/inc.footer.php');
?>
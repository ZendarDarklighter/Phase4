<?php
    $page_title = "Student Resource Home";
    $css_path = "css/style.css";
    $main_id = "stres_home";
    include('../php/inc.header.php');
?>
<script src="../../Phase4/js/sidebar.js"></script>
<div id="stres_info">
<div id="sidebar">
    <script>sideBarLoad("Student Resorces","home.php","Resources Home","tutor.php?subj=null","Tutoring","software.php","Software","advisor.php","Advising","course.php","Course Information","","Job Market Info","","Internship Opportunities");</script>
</div>
<div id="center">
    <h1>The Student Resorces Page Has it All</h1>
    <p class="par1">
        <!-- lot of stuff for info.  add later -->
    </p> <!-- end of par1 -->
</div>
</div>
<?php
    $copyright_year = "2017";
    $copyright_text = "All praise the Guy.  The Guy is great and mighty!";
    include('../php/inc.footer.php');
?>
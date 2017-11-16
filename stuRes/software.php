<?php
    $page_title = "Software";
    $css_path = "../../Phase4/css/styleJ.css";
    $main_id = "soft";
    include('../php/inc.header.php');
    include('../php/inc.dbcon.php');
?>
<body>
<script src="../../Phase4/js/sidebar.js"></script>
<script src="../../Phase4/js/sidebar.js"></script>
<div id="stres_info">
    <div id="sidebar">
        <script>sideBarLoad("Student Resorces","home.php","Resources Home","tutor.php?subj=null","Tutoring","software.php","Software","advisor.php","Advising","course.php","Course Information","","Job Market Info","","Internship Opportunities");</script>
    </div>
    <div id="center">
        <h1>Free Software to Make Your Life Easier</h1><br><br>
        <?php softwarePrint(); ?>
    </div>
</div>
</body>
<?php
    $copyright_year = "2017";
    $copyright_text = "All praise the Guy.  The Guy is great and mighty!";
    include('../php/inc.footer.php');
?>
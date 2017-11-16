<?php
    $page_title = "Tutoring";
    $css_path = "../../Phase4/css/styleJ.css";
    $main_id = "tutoring";
    $subj = $_GET["subj"];
    if($subj != "null"){
        $page_title = "Tutoring " . $subj;
        $main_id = $main_id . "_schedule";
    }
    include('../php/inc.header.php');
    include('../php/inc.dbcon.php');
?>
<body>
<script src="../../Phase4/js/sidebar.js"></script>
<div id="stres_info">
<div id="sidebar">
    <script>sideBarLoad("Tutoring Offered","tutor.php?subj=null","Tutoring Home","tutor.php?subj=BIOL","Biology","tutor.php?subj=CHEM","Chemestry","tutor.php?subj=PHY","Physics","tutor.php?subj=MAT","Math");</script>
</div>
<div id="center">
    <div id="tut_base">
        <h1>SIUE Tutoring</h1>
        <br><br>
        <p>
        &nbsp;&nbsp;&nbsp;&nbsp;The purpose of the Tutoring Resource Center is to help students succeed in their courses in a supportive learning environment. We are located in the Student Success Center 1252 and open Monday through Sunday. Students who need assistance with their SIUE courses are welcome on a walk-in basis. Individual and small group tutoring is available without an appointment. Handouts, computer software (Mathematica, Matlab, SPSS) and calculators also are available.
        </p>
        <br>
        <div id="tut_gen_time">
        <h2>Location:</h2><br>
        <p>SSC Room 1252</p>
        <br><br>
        <h2>Hours:</h2>
        <p><br>
            Fall Semester (8/21/17 - 12/09/17)
            <br><br>
            Mon through Thurs: 8am - 7pm
            <br><br>
            Fri: 8am - 3pm
            <br><br>
            Sat: 9am - 12 noon
            <br><br>
            Sun: 4pm - 7pm
            <br><br>
            Finals Week - TBA
            <br><br>
        </p>
        <br>
        <img src="../images/TutHome.jpg">
        </div>
    </div>
    <div id="tut_sch">
        <?php
            if($_GET['subj'] != "null"){
                tablePrint($_GET["subj"]);
            }
        ?>
    </div>
</div>
</div>
</body>
<?php
    $copyright_year = "2017";
    $copyright_text = "All praise the Guy.  The Guy is great and mighty!";
    include('../php/inc.footer.php');
?>
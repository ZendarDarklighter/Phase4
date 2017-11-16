<?php
    $page_title = "Student Resource Home";
    $css_path = "../../Phase4/css/styleJ.css";
    $main_id = "stres_home";
    include('../php/inc.header.php');
?>
<body>
<script src="../../Phase4/js/sidebar.js"></script>
<div id="stres_info">
<div id="sidebar">
    <script>sideBarLoad("Student Resorces","home.php","Resources Home","tutor.php?subj=null","Tutoring","software.php","Software","advisor.php","Advising","course.php","Course Information","../StudentResources/Jobs-JM.php","Job Market Info","../StudentResources/Jobs-IO.php","Internship Opportunities");</script>
</div>
<div id="center">
    <h1>The Student Resorces Page Has it All</h1><br><br>
    <p class="par1">
        The Biology prides itself in providing excellent resorces for out students here. From this page, you can find the following resources available:
    </p> <!-- end of par1 -->
    <p>
        <h3>Tutoring:</h3>
        The campus offers tutoring for students that need it.  The classes offered for tutoring can be found on the tutoring page <a href="tutor.php?subj=null">here</a>.
    </p>
    <p>
        <h3>Software:</h3>
        We offer our students access to a wide range of free software.  The software is desisgned to assist students in their studies, as well as provide a glimps into professional software that may be used in a real job scenario.  The list of software, and additional links can be found <a href="software.php">here</a>.
    </p>
    <p>
        <h3>Advising:</h3>
        To assist students with registering for classes, the students are assigned an advisor.  Information about advising and where to find your advisor can be seen <a href="advisor.php">here</a>.
    </p>
    <p>
        <h3>Course Information:</h3>
        The Biology department offers a large selection of classes to be taken.  We have provided a listing of all classes that are required by the department and electives that are offered under the Biology department.  This list can be found <a href="course.php">here</a>.
    </p>
    <p>
        <h3>Job Market Information:</h3>
        If you are thinking of studing for a degree in one of our offered programs, what next?  What jobs will be available to you out of college?  What is starting sallary for the feild?  What is the average highering rate?  All this and more can be found <a href="../StudentResources/Jobs-JM.php">here</a>.
    </p>
    <p>
        <h3>Internship Opportunities:</h3>
        We have also provided a small list of internships that may be offered for you either while you are still in school or for right after you graduate.  The list can be found <a href="../StudentResources/Jobs-IO.php">here</a>.
    </p>
    
</div>
</div>
</body>
<?php
    $copyright_year = "2017";
    $copyright_text = "All praise the Guy.  The Guy is great and mighty!";
    include('../php/inc.footer.php');
?>
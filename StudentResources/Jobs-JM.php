<?php 
    /* File: Jobs-JM.php */
    $page_title = "Biological Sciences - Job Market";
    $css_path = "../css/styleLogan.css";

    include('../php/inc.header.php');
?>

<body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Student Resources</h2>
                    <ul class="side_menu">
                        <li><a href="Home-SR.php">Resources Home</a></li>
                        <li><a href="Tut_Home.php">Tutoring</a></li>
                        <li><a href="Software.php">Software</a></li>
                        <li><a href="Adv_Home.php">Advising</a></li>
                        <li><a href="Course_Home.php">Course Information</a></li>
                        <li><a href="../StudentResources/Jobs-JM.php">Job Market Info</a></li>
                        <li><a href="../StudentResources/Jobs-IO.php">Internship Opportunities</a></li>              
                    </ul>
            </div>
            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                         <h2 style="font-size:2vmax">Job Market</h2>
                     </div>
                     <h2 style="font-size:1.5vmax"> Here is some info on potential jobs for a degree in Biological Sciences </h2>
                    
                            <table class="job_market">
                                <tr>
                                    <th> Title </th>
                                    <th> 2016 Median Pay </th>
                                    <th> Entry Level Education </th>
                                    <th class="smallresponsive"> Work Experience </th>
                                    <th class="responsive"> Bio </th>
                                </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teambugsphase4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT title, pay, education, experience, bio FROM job_market";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo
            "<tr>
                <td>" . $row['title']. "</td>
                <td>" . $row['pay']. "</td>
                <td>" . $row['education']. "</td>
                <td class='smallresponsive'>" . $row['experience']. "</td>
                <td class='responsive'>" . $row['bio']. "</td>
            </tr>";
        }   
    } else {
        echo "0 results";
    }
?>
    </table>
    <p class="disclosure"> Information taken from the Bureau of Labor Statistics website </p>
        <br><br>
    <p style="font-size: 1.3vw">Find more information from: <a href="https://www.bls.gov/home.htm" target="_blank">BUREAU OF LABOR STATISTICS </a></p>                     
   <img class="responsive" width=100% height=100% src="../images/biologyphdtrack.jpg">
 

</div>
        	<div class="cleaner"></div>
</div> 

    
<?php
    $copyright_year = "2017";
    $copyright_text = "CS321 - Team Bugs";
     include('../php/inc.footer.php')
?>
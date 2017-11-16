<?php 
    /* File: Jobs-IO.php */
    $page_title = "Biological Sciences - Internship Opportunities";
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


                     <h2 class="largetxt"> Internship Opportunities </h2>


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



$sql = "SELECT ID, Title, Description, Link FROM internship_opportunities";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
         echo "<h3 class='medtxt'>" . $row["Title"]. "</h3>";
 

     
echo
         "<div class='box'><p>Job Description:</p>
         <p>" . $row["Description"]. "</p>                 
         <a href=" . $row["Link"]. "target='_blank'><button type='button'>APPLY NOW</button></a> </div>
         <br> <br>";
        }   
    } else {
        echo "0 results";
    }
?>
      
                </div>
            </div>
        	<div class="cleaner"></div>
        </div> 


 
<?php
    $copyright_year = "2017";
    $copyright_text = "CS321 - Team Bugs";
    include('../php/inc.footer.php')
?>
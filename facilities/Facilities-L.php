<?php 
/* File: Facilities-L.php */
$page_title = "Biological Sciences - Internship Opportunities";
$css_path = "../css/styleLogan.css";

include('../php/inc.header.php');
?>
<body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Facilities</h2>
                    <ul class="side_menu">
                        <li><a href="../Facilities/Home-Faci.php">Facilities Home</a></li>
                        <li><a href="../Facilities/Facilities-L.php">Laboratory Information</a></li>
                        <li><a href="../Facilities/Facilities-T.php">Take a Tour</a></li>
                                      
                    </ul>
            </div>


            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                         <br><br><br><br><br><br><br><br>
 
                         <div class='lab_list'>                   
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



$sql = "SELECT ID, name FROM laboratories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
                            
   echo     "<a href='Facilities-L1.php?index=" . $row["ID"]. "'><div class='lab_link'>" . $row["name"]. "</div></a>";
        }   
    } else {
        echo "0 results";
    }
?>


<h2 class="responsive"> Click on a lab for more information! </h2>
</div>
            </div>
            </div>
        	<div class="cleaner"></div>
        </div> 
    
<?php
        $copyright_year = "2017";
        $copyright_text = "CS321 - Team Bugs";
        include('../php/inc.footer.php')
    ?>
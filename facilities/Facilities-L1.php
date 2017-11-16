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



$sql = "SELECT name, room, used_for, equipment, image_link FROM laboratories WHERE ID = " . $_GET['index']. "";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
   echo     "<h2>" . $row["name"]. "</h2> Room: " . $row["room"]. "<br><br>
        <p>This lab is used for " . $row["used_for"]. "</p>
        <div id='lab_img'><img src='../images/" . $row["image_link"]. "' style='width: 100%'></div>
        <div><p>The lab features " . $row["equipment"]. "</p></div><br>";                      
  
        }   
    } else {
        echo "0 results";
    }
?>

                         


                </div>
            </div>
</div>
        
    
<?php
        $copyright_year = "2017";
        $copyright_text = "CS321 - Team Bugs";
        include('../php/inc.footer.php')
?>
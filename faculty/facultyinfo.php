<!-- 
    
    File: facultyinfo.php
    Author: Vaibhav Patel
    Team: Bugs
    CS-321 pahse 4

    Description: The page contains detailed information about selected faculty member.
                 
-->
<?php
    $get_email = $_GET["id"];
    $query = sprintf("SELECT * FROM faculty 
    WHERE email='%s'",$get_email);

    $search_result = get_faculty($query);
    function get_faculty($query)
    {
        $conn = mysqli_connect("localhost","root","","teambugsphase4");
        if(!$conn)
        {
            die('can not connect to server');
        }
        
        $faculty = mysqli_query($conn, $query);
        return $faculty;
    }


?>
<?php
    $page_title = "Faculty Information";
    $css_path = "../css/styleVaibhav.css";
    include("../php/inc.header.php");
?>
    
    <body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Meet our People</h2>
                    <ul class="side_menu">
                        <li><a href="../faculty/faculty.php">Faculty</a></li>
                    </ul>
            </div>
            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                        <?php while($row = mysqli_fetch_array($search_result)):?>
                         <h2><?php echo $row['name'];?></h2>
                         <div>
                         <div class="facultyinfoleft">
                             <img src="<?php echo $row['imagelink'];?>"></div>       
                         <div class="facultyinforight">
                             <h3><?php echo $row['status'];?></h3>
                             <p><?php echo $row['education'];?></p>
                             <p><strong>Office: </strong><?php echo $row['office'];?></p>
                             <p><strong>Phone: </strong><?php echo $row['phone'];?></p>
                             <p><strong>Email: </strong><a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></p>
                         </div>
                         </div>
                         <p><strong>Research Lab: </strong><?php echo $row['researchlab'];?></p>
                         <p><strong>Web: </strong><a href="<?php echo $row['web'];?>" target="_blank"><?php echo $row['web'];?></a></p><br>
                         <p><strong>Courses Taught: </strong><?php echo $row['coursetaught'];?></p><br>
                         <p><strong>Research Interests: </strong><?php echo $row['researchinterests'];?></p><br>
                         <p><strong>Research Opportunities: </strong><?php echo $row['researchopportunities'];?></p><br>
                         <p><strong>Selected Publications: </strong></p>
                         <p><?php echo $row['selectedpublications'];?></p>

                            
                        <?php endwhile; ?>
                         
                            
                </div>
            </div>
        	<div class="cleaner"></div>
 
        </div>
        </div>
<?php
    $copyright_year = "2017";
    $copyright_text = "Vaibhav Patel Team Bugs CS-321 phase 4 All rights reserved";
    include("../php/inc.footer.php");
?>
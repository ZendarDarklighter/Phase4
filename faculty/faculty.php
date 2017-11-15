<!-- 
    
    File: faculty.php
    Author: Vaibhav Patel
    Team: Bugs
    CS-321 pahse 4

    Description: The page contains list of faculty members retrived from the database table faculty.
                 
-->
<?php
    $query = "select * from faculty";
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
    $page_title = "Faculty Home";
    $css_path = "../css/style.css";
    include("../php/inc.header.php");
?>
    
    <body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Meet our People</h2>
                    <ul class="side_menu">
                        <li><a href="faculty.php">Faculty</a></li>
                    </ul>
            </div>
            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                         <h2>Meet our faculty members:</h2>
                         <h3>(Click on Picture for more)</h3>

                            <table id="facultyTable">
                              <tr class="head">
                                <th style="width:30%;">Picture</th>
                                <th style="width:30%;">Name and Information</th>
                                <th style="width:40%;">Interests</th> 
                              </tr>
                            
                              <?php while($row = mysqli_fetch_array($search_result)):?>
                              <tr>
                                  <td><?php echo "<a href='facultyinfo.php?id=" . $row["email"]. "'><img src=" . $row['imagelink']. " class='facultyimg'></a>" ;?></td>
                                  <td>
                                     <p><?php echo $row['name'];?></p>
                                     <p><?php echo $row['office'];?></p>
                                     <p><?php echo $row['phone'];?></p>
                                     <p><a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></p></td>
                                  <td><p><?php echo $row['interest'];?></p></td>
                             </tr>
                                
                             <?php endwhile; ?>
                           </table>          
                </div>
            </div>
        	<div class="cleaner"></div>
 
        </div>
        </div>
        </body>
<?php
    $copyright_year = "2017";
    $copyright_text = "Vaibhav Patel Team Bugs CS-321 phase 4 All rights reserved";
    include("../php/inc.footer.php");
?>
<!-- 
    
    File: seminar.php
    Author: Vaibhav Patel
    Team: Bugs
    CS-321 pahse 4

    Description: It contains seminar table populated from database.
                 
-->
<?php
    $query = sprintf("SELECT * FROM seminars");
    $search_result = get_seminar($query);
    function get_seminar($query)
    {
        $conn = mysqli_connect("localhost","root","","teambugsphase4");
        if(!$conn)
        {
            die('can not connect to server');
        }
        
        $seminar = mysqli_query($conn, $query);
        return $seminar;
    }
?>
<?php
    $page_title = "Seminars";
    $css_path = "../css/style.css";
    include("../php/inc.header.php");
?>
    
    <body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Clubs and Events</h2>
                    <ul class="side_menu">
                        <li><a href="Home-CE.php">Clubs and Events Home</a></li>
                        <li><a href="seminar.php">Seminars</a></li>
                        <li><a href="clubs.php">Student Organizations</a></li>           
                    </ul>
            </div>
            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                         <h2>Seminars</h2>

                            <p>The Department of Biological Sciences hosts a series of weekly seminars each spring and fall semester in association with its colloquium courses for undergraduates (BIOL 492 and 492M) and graduate students (BIOL 592). Seminar speakers are usually invited from other universities and research institutions but occasionally the program will include seminar of the Department of Biological Sciences or other units at SIUE. Talks cover a wide range of topics in biology.</p>
                            <h2>Time and Location</h2>
                            <p>Science East building in lecture room 1105 (SL 1105)</p>
                            <p>Mondays from 3:00-4:00 PM.&#160;&#160;</p>
                            <p>All are welcome.</p>
                            <h2>Seminars for Fall 2017</h2>
                            <table align="center" border="1" frame="hsides" id="seminarsTable">
                              <tr class="head">
                                <th class="w-10">Date</th>
                                <th class="w-20">Speaker</th>
                                <th class="w-20">Institution</th>
                                <th class="w-50">Title or Topic</th>
                              </tr>
                            
                                <?php while($row = mysqli_fetch_array($search_result)):?>
                                <tr>
                                  <td><p><?php echo $row['date'];?></p>
                                 </td><td><p><?php echo $row['speaker'];?></p>
                                 </td><td><p><?php echo $row['institution'];?></p>
                                 </td><td><p><?php echo $row['title'];?></p>
                                 </td>
                                  </tr>
                                
                                <?php endwhile; ?>
                            </table>
                         
                            
                </div>
            </div>
        	<div class="cleaner"></div>
        </div>

        </body>
<?php
    $copyright_year = "2017";
    $copyright_text = "Vaibhav Patel Team Bugs CS-321 phase 4 All rights reserved";
    include("../php/inc.footer.php");
?>
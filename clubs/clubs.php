<!-- 
    
    File: clubs.php
    Author: Vaibhav Patel
    Team: Bugs
    CS-321 pahse 4

    Description: The page contains detailed information about selected faculty member.
                 
-->
<?php
    $page_title = "Clubs Home";
    $css_path = "../css/styleVaibhav.css";
    include("../php/inc.header.php");
?>
    
    <body>
        <div id="content_wrapper">
            <div id="sidebar" class="specialclubs"> 
                    <h2>Student Organizations</h2>
                    <ul class="side_menu">
                        <li><a href="clubs.php">Organizations Home</a></li>
                        <li><a href="https://www.facebook.com/groups/192881600734749/" target="_blank">Wildlife & Conservation Biology Club</a></li>
                        <li><a href="https://siue.campuslabs.com/engage/organization/bioclub" target="_blank">Biology Club</a></li>
                        <li><a href="https://www.facebook.com/SIUEPMA" target="_blank">Pre-Medical Association</a></li>
                        <li><a href="https://www.facebook.com/groups/1510580945825396/" target="_blank">Pre-Pharmacy Association</a></li>             
                    </ul>
            </div>
            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                         <h2 class="clubheading-lg">Get Invole Now! (Check Out Clubs on left)</h2>
                        <h2 class="clubheading-sm">Get Invole Now! (Check Out Clubs on Top)</h2>
                         <p>1. You’ll learn more about yourself</p>
                         <p>2. You’ll develop soft skills.</p>
                         <p>3. You’ll learn how to work with a team.</p>
                         <p>4. You’ll get networking opportunities.</p>
                         <p>5. You’ll gain practical experience in a safe environment.</p>
                         <p>6. You’ll be able to use the skills you’ve learned in class.</p>
                         <p>7. You’ll gain leadership skills.</p>
                         <p>Many more......</p>
                         
                         <h2>Some of the best moments:</h2>
                         <div class="clubs-slidecont">
                            <button class="clubsbutleft"onclick="plusDivs(-1)">&#10094;</button>
                             <button class="clubsbutright" onclick="plusDivs(1)">&#10095;</button>
                          <img class="clubslides" src="../images/studorg1.jpg">
                          <img class="clubslides" src="../images/studorg2.jpg">
                          <img class="clubslides" src="../images/studorg4.jpg">
                          <img class="clubslides" src="../images/studorg5.jpg">
                          
                          
                        </div>

                        <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);
                        function plusDivs(n) {
                          showDivs(slideIndex += n);
                        }
                        function showDivs(n) {
                          var i;
                          var x = document.getElementsByClassName("clubslides");
                          if (n > x.length) {slideIndex = 1}    
                          if (n < 1) {slideIndex = x.length}
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = "none";  
                          }
                          x[slideIndex-1].style.display = "block";  
                        }
                        </script>
                            
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
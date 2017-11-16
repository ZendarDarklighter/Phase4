<!-- 
    
    File: contactus.php
    Author: Vaibhav Patel
    Team: Bugs
    CS-321 pahse 4

    Description: Contact us page has fill out form. Also it has information about office members.
                 
-->
<?php
    $query = sprintf("SELECT * FROM officemembers");
    $search_result = get_member($query);
    function get_member($query)
    {
        $conn = mysqli_connect("localhost","root","","teambugsphase4");
        if(!$conn)
        {
            die('can not connect to server');
        }
        
        $member = mysqli_query($conn, $query);
        return $member;
    }


?>
<?php 

$nameerror = $emailerror = $commenterror = "";
$name = $email = $comment = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameerror = "* Name is required.";
      $success = "";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameerror = "* Only letters and White space allowed."; 
        $success = "";
    }
  }

  if (empty($_POST["email"])) {
    $emailerror = "* Email is required.";
      $success = "";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerror = "* Invalid email format. (Hint: some@some.some)"; 
        $success = "";
    }
  }
  

  if (empty($_POST["comment"])) {
    $commenterror = "* We cannot help with empty comment box.";
      $success = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if ($nameerror == '' and $emailerror == '' and $commenterror == ''){
      $success = "Your form is sent successfully.";
      $name = "";
      $email = "";
      $comment = "";
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
    $page_title = "Contact Us";
    $css_path = "../css/styleVaibhav.css";
    include("../php/inc.header.php");
?>
    
    <body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Most Visited Links</h2>
                    <ul class="side_menu">
                        
                    </ul>
            </div>
            
            <div id="content">
            
            	<div class="post_section">
        
                     <div class="post_content">
                         
                         <form id="contactus" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                             <p> (Check out links on the left)</p>
                            <p> Or</p>
                            <h2>Contact Us</h2>
                            <h3>(We will get back to you with in 24 hours)</h2>
                             <p>Name:</p>
                            <fieldset>
                              <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                              <span class="checkerror"><?= $nameerror ?></span>
                            </fieldset>
                             <p>Email:</p>
                            <fieldset>
                              <input placeholder="Your Email Address" type="email" name="email" value="<?= $email ?>" tabindex="2">
                              <span class="checkerror"><?= $emailerror ?></span>
                            </fieldset>
                             <p>Comment:</p>

                            <fieldset>
                                <textarea rows="4" cols="50" name="comment" value="<?= $comment ?>" placeholder="Comment..."></textarea>
                              <span class="checkerror"><?= $commenterror ?></span>
                            </fieldset>
                            <fieldset>
                              <button name="submit" type="submit" >Submit</button>
                            </fieldset>
                            <div class="checksuccess"><?= $success ?></div>
                          </form>
                         
                         <h3>More About Us:</h3>
                            <p>The Department of Biological Sciences is located on the first floor and the lower level of the Science West building (SLW). The Biological Sciences office reception is in room SLW 1155.</p>
                            <p>The location of the Science West building is shown on the <a href="http://www.siue.edu/maps/map_campus.pdf" target="_blank">campus map</a>. For a plan of room locations within the Science West building, <a href="http://www.siue.edu/maps/tour/pdf/science-building.pdf" target="_blank">click here</a>.</p>
                            <h4>Postal Address</h4>
                            <p>Department of Biological Sciences<br />
                             Southern Illinois University Edwardsville<br />
                             Campus Box 1651<br />
                             Edwardsville, IL 62026</p>
                             <h4>Department of Biological Sciences</h4>
                            <table align="center" border="1" frame="hsides" id="seminarsTable">
                              <tr class="head">
                                <th style="width:20%;"><strong>Name</strong></th>
                                  <th style="width:20%;"><strong>Position</strong></th>
                                  <th style="width:10%;" class="contact-low"><strong>Office</strong></th>
                                  <th style="width:15%;" class="contact-hide">
                                      <strong>Phone</strong></th>
                                  <th style="width:15%;" class="contact-hide"><strong>Fax</strong></th>
                                  <th style="width:20%;"><strong>Email</strong></th>
                              </tr>
                            
                                <?php while($row = mysqli_fetch_array($search_result)):?>
                                <tr>
                                  <td><p><?php echo $row['name'];?></p></td>
                                    <td><p><?php echo $row['position'];?></p></td>
                                    <td class="contact-low"><p><?php echo $row['office'];?></p></td>
                                    <td class="contact-hide"><p><?php echo $row['phone'];?></p></td>
                                    <td class="contact-hide"><p><?php echo $row['fax'];?></p></td>
                                    <td><p><?php echo $row['email'];?></p></td>
                                  </tr>
                                
                                <?php endwhile; ?>
                            </table>
                            
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
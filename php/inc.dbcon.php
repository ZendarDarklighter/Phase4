<?php
$sevad = "127.0.0.1:3306";
$user = "root";
$pass = "";
$conn;
try{
    $conn = new PDO("mysql:host=$sevad;dbname=cs321", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<script>console.log('database connected');</script>";
}
catch(PDOException $e){
    //echo '<script> alert("somethings fucked yo"); </script>';
}

function tablePrint($course){
    echo '<script>console.log("' . $course . '")</script>';
    global $conn;
    $result = $conn->prepare("SELECT * FROM courses WHERE Dep = ':course'");
    $result->bindParam(':course', $course);
    $result->execute();
    echo '<script>console.log("start of printing table for ' . $course . '");</script>';
    echo '<table class="basic" summary="Tutoring Hours">
        <tbody>
        <tr valign="top">
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;">Fall&#160;Term&#160;2017 Schedule</td>
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;" />
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;" />
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;" />
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;" />
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;" />
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;" />
        <td style="text-align: left !important; color: #ffffff; font-weight: bold; background-color: #7FAB06;" />
        </tr>
        <tr>
        <th>Course</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
        <th>Sun</th>
        </tr>'; //yes its a big echo.  shut up.
        while($row = $result->fetch()){
            echo '<tr><td><p>' . $row['Dep'] . ' ' . $row['Name'] . '</p></td>';
            echo '<td align="center" valign="bottom">' . $row['Mon'] . '</td>
            <td align="center" valign="bottom">' . $row['Tue'] . '</td>
            <td align="center" valign="bottom">' . $row['Wed'] . '</td>
            <td align="center" valign="bottom">' . $row['Thur'] . '</td>
            <td align="center" valign="bottom">' . $row['Fri'] . '</td>
            <td align="center" valign="bottom">' . $row['Sat'] . '</td>
            <td align="center" valign="bottom">' . $row['Sun'] . '</td>
            </tr>'; 
        }

    echo '</tbody>
        </table>';
}

function softwarePrint(){
    global $conn;
    $result = $conn->query("SELECT * FROM software");

    while($row = $result->fetch()){
        $output = "";
        $output = $output . '<div class="software_hold"><p><a href="' . $row['file'] . '"><button class="but b">' . $row['Name'] . '</button></a>';
        $output = $output . '<img src="../images/' . $row['img'] . '" align="middle"></p>';
        $output = $output . '<h3>' . $row['Name'] . ' Description:</h3>';
        $output = $output . $row['descr'] . '</div><br><br>';
        echo $output;
    }
}

?>
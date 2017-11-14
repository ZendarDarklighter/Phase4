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
    global $conn;
    $result = $conn->query("SELECT * FROM courses");
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
        
        $test = $result->fetch();
        echo '<script>console.log("' . $test['Name'] . '");</script>';        

    echo '</tbody>
        </table>';
}

function softwarePrint(){
    echo '<button class="but b">test</button>';
}

?>
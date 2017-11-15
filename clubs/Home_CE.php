<!-- 
    
    File: Home_CE.php
    Author: Vaibhav Patel
    Team: Bugs
    CS-321 pahse 4

    Description: It has responsive calendar for events.
-->


<?php
    $page_title = "Clubs and Events Home";
    $css_path = "css/style.css";
    include("../php/inc.header.php");
?>
    
    <body>
        <div id="content_wrapper">
            <div id="sidebar"> 
                    <h2>Clubs and Events</h2>
                    <ul class="side_menu">
                        <li><a href="Home_CE.php">Clubs and Events Home</a></li>
                        <li><a href="seminar.php">Seminars</a></li>
                        <li><a href="clubs.php">Student Organiztions</a></li>           
                    </ul>
            </div>
            
            <div id="content">
            
            	<div class="post_section">
                     <div class="post_content">
                         <div id="cal">
                         <script>
                                var monthsJSON = 
                                '{'+
                                    '"months":['+
                                        '{"name":"January","numberOfDays":31,"special":0,"Dates":[],"Event":[]},'+
                                        '{"name":"February","numberOfDays":28,"special":0,"Dates":[],"Event":[]},'+
                                        '{"name":"March","numberOfDays":31,"special":0,"Dates":[],"Event":[]},'+
                                        '{"name":"April","numberOfDays":30,"special":0,"Dates":[],"Event":[]},'+
                                        '{"name":"May","numberOfDays":31,"special":0,"Dates":[],"Event":[]},'+
                                        '{"name":"June","numberOfDays":30,"special":0,"Dates":[],"Event":[]},'+
                                        '{"name":"July","numberOfDays":31,"special":0,"Dates":[],"Event":[]},'+
                                        '{"name":"August","numberOfDays":31,"special":1,"Dates":[23],"Event":["Biology talk Show"]},'+
                                        '{"name":"September","numberOfDays":30,"special":1,"Dates":[20],"Event":["Pre-medical Presentation"]},'+
                                        '{"name":"October","numberOfDays":31,"special":2,"Dates":[13,25],"Event":["Genetics and MicroBio", "Ecology Talk"]},'+
                                        '{"name":"November","numberOfDays":30,"special":3,"Dates":[8,12,28],"Event":["Why Biology", "Forensic Science","Biologiy Show Off" ]},'+
                                        '{"name":"December","numberOfDays":31,"special":3,"Dates":[3,10],"Event":["Night with Biology","Biology Next Big Thing"]}'+

                                    ']'+
                                '}';
                                var daysWeek = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
                                var dates = new Date();
                                var currentMonth = dates.getMonth();
                                var currentYear = dates.getFullYear();
                                var currentDay = dates.getDate();
                                var month = currentMonth;
                                var year = currentYear;
                                var monthsJS = JSON.parse(monthsJSON);
                                function call(){
                                var calendar = '<h2>Events Calendar:</h2><p>(Hover over lightpink date)</p><table id="caltable"><caption>'+
                                    '<button id="down">&#10094;</button>'+
                                    '<span>'+ monthsJS.months[month].name+'</span>'+
                                    '<button id="up">&#10095;</button>'+
                                    '</caption><thead><tr>';
                                               for(i=0;i<7;i++){
                                               calendar += '<th>'+daysWeek[i]+'</th>';  
                                               }
                                               calendar += '</tr></thead><tr>';
                                               /*set empty days*/
                                               for(day = 0; day < new Date(year,month,1).getDay(); day++){
                                                   calendar += '<td class="empty">&nbsp</td>';
                                               }

                                               var taco = 0;       // taco holds Date array position
                                                /*set days of the month */
                                                for ( date = 1; date <= monthsJS.months[month].numberOfDays; date++){

                                                var tdClass = "";
                                                /*set css and speacil days*/
                                                if(monthsJS.months[month].special != 0){
                                                    tdClass = (date == monthsJS.months[month].Dates[taco])?"special":"";  
                                                }

                                                 var tdId = (date == currentDay && month == currentMonth)?"today" :"";

                                                 calendar += '<td id="'+tdId +'" class="'+tdClass+'">'+ date.toString();

                                                if(date == monthsJS.months[month].Dates[taco]){
                                                     calendar += '<p class="tooltipText">'+ monthsJS.months[month].Event[taco] +'</p>';            
                                                }


                                                 if (day < 6){
                                                       calendar += '</td>';
                                                 } else {
                                                     calendar += '</td></tr><tr>'
                                                 }

                                            //     /*update day */
                                                  day = (day +1) % 7;
                                                  if (date == monthsJS.months[month].Dates[taco]){    taco++; }
                                               }
                                                 if (day !=0){
                                                     for(day = day; day <= 6; day++){
                                                         calendar += '<td class="empty">&nbsp;</td>';
                                                 }}
                                            /* close row */
                                            calendar += '</tr></table><br><h2>Current Month Events: </h2>';


                                                var taco = 0;
                                                for ( date = 1; date <= monthsJS.months[month].numberOfDays; date++){
                                                if(date == monthsJS.months[month].Dates[taco]){
                                                    
                                                    calendar += '<p>'+(month+1) + '/' + date + ' - ' + monthsJS.months[month].Event[taco] + '</p>';            
                                                }
                                                  day = (day +1) % 7;
                                                  if (date == monthsJS.months[month].Dates[taco]){    taco++; }
                                               }
                                    document.getElementById('cal').innerHTML = calendar; 
                                    var previousButton = document.getElementById('down');
                                    var nextButton = document.getElementById('up');
                                    previousButton.addEventListener('click',previousMonth,false);
                                    nextButton.addEventListener('click',nextMonth,false);
                                }
                                call();
                                function previousMonth(){
                                    month = (parseInt(month + 11)) % 12;
                                    call();
                                }

                                function nextMonth(){
                                    month = (parseInt(month + 1)) % 12;
                                    call();  
                                }

                                </script>
                         </div>
                         <div id="rightcal">
                             <h2>All Events are held in MUC-Ballroom</h2>
                             <img src="../images/bioevent.png">
                         </div>
                         
                             
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
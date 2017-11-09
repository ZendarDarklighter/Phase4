function sideBarLoad(){
    box = document.getElementById('sidebar');
    box.innerHTML = "<h2>" + arguments[0] + "</h2>\n" ;
    console.log(arguments.length);
    if(arguments.length > 1){
        var i = 1;
        var innerStr = "";
        innerStr += '<ul class="side_menu">\n';
        
        console.log(box.innerHTML);
        list = document.getElementById('side_menu');
        for(i = 1; i < arguments.length; i+=2){
            console.log(arguments[i]);
            console.log(arguments[i+1]);
            innerStr += '<li><a href="' + arguments[i] +'">\n' + arguments[i + 1] + '</a></li>\n';
        }
        innerStr += '</ul>\n';
        box.innerHTML += innerStr;
        console.log(box.innerHTML);
    }
}
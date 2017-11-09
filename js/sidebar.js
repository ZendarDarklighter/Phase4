function sideBarLoad(){
    box = document.getElementById('sidebar');
    box.innerHTML = "<h2>" + arguments[0] + "</h2>\n" ;
    console.log(arguments.length);
    if(arguments.length > 1){
        var i = 1;
        box.innerHTML += '<ul class="side_menu">\n';
        
        console.log(box.innerHTML);
        //list = document.getElementById('side_menu');
        //for(i = 1; i < arguments.length; i+=2){
            console.log(arguments[1]);
            console.log(arguments[1+1]);
            box.innerHTML += '<li><a href="' + arguments[1] +'">\n';
            box.innerHTML += arguments[1 + 1] + '</a></li>\n';
            console.log(box.innerHTML);
        //}
        if(i == arguments.length){
            box.innerHTML += '</ul>\n';
        }
    }
}
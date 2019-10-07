



function loadjs(file) {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = file;
    script.onload = function(){
        console.log("Script is ready!"); 
    };
    document.body.appendChild(script);
}


/*
var interval = setInterval(function () {
    if(typeof $ !== "undefined"){

        console.log('BLEEEEEEEEE');
        interval = null;

        $(document).ready(function(){
            loadjs('js/main.js');
        });

    }else{
        console.log('jeszcze nie załadował się jQuery');
    }
}, 200);
*/



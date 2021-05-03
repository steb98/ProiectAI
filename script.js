let imagini = document.getElementsByClassName("img-item");

for (var i = 0; i < imagini.length; i++) {
    imagini[i].addEventListener("click",func1);
}
let close_button = document.getElementsByClassName("svg_button")[0];
close_button.addEventListener("click",func2);


function func2(){
    
    let transp = document.getElementsByClassName("transparancy")[0];
    transp.setAttribute("hidden",true);

    let li =document.getElementsByClassName("fullscreen")[0];
    li.classList.remove("fullscreen");

    event.currentTarget.setAttribute("hidden",true);
}


 function func1() {
     
    event.currentTarget.classList.add("fullscreen");

    document.getElementsByClassName("transparancy")[0].removeAttribute("hidden");

    let close_button = document.getElementsByClassName("svg_button")[0];
    
    close_button.removeAttribute("hidden");
    
 }

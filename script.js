let menu = document.getElementById("menu");
let link = document.querySelector(".links");
let content = document.querySelector(".content");

menu.onclick = function() {
        if(link.className == "links"){
            link.classList.add("show"); 
            content.classList.add("expand");
        }
        else{
            link.classList.remove("show");
            content.classList.remove("expand");
        }
    }
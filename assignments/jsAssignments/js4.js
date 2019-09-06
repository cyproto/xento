var modal = document.getElementById("modal");
var onclickbutton = document.getElementById("titleclick");
var close = document.getElementsByClassName("closebutton")[0];

function openModal(){
    modal.style.display = "block";
}

close.onclick = function(){
    modal.style.display = "none";
}

window.onclick = function(){
    if(event.target == modal)
    {
        modal.style.display = "none";
    }
}
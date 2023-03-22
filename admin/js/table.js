let myModal = document.getElementById("myModal");


let myBtn = document.getElementById("myBtn");


myBtn.onclick = function(){
    modal.style.display = "block";
}


window.onclick = function(event){
    if(event.target == modal){
        modal.style.display = "none";
    }
}



let myModal = document.getElementById("myModal");


let myBtn = document.getElementById("myBtn");


myBtn.onclick = function(){
    myModal.style.display = "block";
}


window.onclick = function(event){
    if(event.target == modal){
        myModal.style.display = "none";
    }
}



(document.querySelector("html")).onload = function size(){
    var Windowsize = window.innerWidth;
    console.log(Windowsize)
    document.getElementById("container").style.width = (Windowsize/100)+'%';
};



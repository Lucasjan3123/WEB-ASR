var btnContainer = document.getElementById("navbarText");
var btns = btnContainer.getElementByClassName("Btn");

/* this is an example for new snippet extension make by me xD */
 for (var i = 0; i<btns.length; i++) {
 
     btns[i].addEventListener('click', function(){
         var current = document.getElementByClassName('aktif');
         current[0].className = current[0].className.replace('aktif');
         this.className += "aktif";
     })
}
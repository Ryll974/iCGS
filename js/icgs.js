var btnCalendrier = document.getElementById("btnCalendrier");
var cercleCentral = document.querySelector(".cercleCentral");

btnCalendrier.addEventListener("click",function(){
    cercleCentral.classList.toggle("isVisible");
})
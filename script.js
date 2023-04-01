var buttons = document.getElementsByClassName("menu-toggle")[0]
buttons.addEventListener("click", function(){
   buttons.classList.toggle("toggled")
   document.getElementsByTagName("body")[0].classList.toggle("ast-main-header-nav-open")
});

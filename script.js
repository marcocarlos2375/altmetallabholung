var buttons = document.getElementsByClassName("menu-toggle")[0]
buttons.addEventListener("click", function(){
   buttons.classList.toggle("toggled")
   document.getElementsByTagName("body")[0].classList.toggle("ast-main-header-nav-open")
});


var items = document.getElementsByClassName("elementor-toggle-item")[0]
items.addEventListener("click", function(){
    console.log("click");
   var x = items.getElementsByClassName("elementor-tab-title")[0]
   x.classList.add("elementor-active")
   var y =items.getElementsByClassName("elementor-tab-content")[0]
   y.style.display="block";
});

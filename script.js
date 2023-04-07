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


var items = document.getElementsByClassName("elementor-toggle-item")
for (let i = 0; i < items.length; i++) {
  items[i].addEventListener("click", function (e) {
    e.preventDefault()
    var x = items[i].getElementsByClassName("elementor-tab-title")[0]
    if (x.classList.length == 1) {
      
      x.classList.add("elementor-active")
      var y = items[i].getElementsByClassName("elementor-tab-content")[0]
      y.style.display = "block"
    } else {
      x.classList.remove("elementor-active")
      var y = items[i].getElementsByClassName("elementor-tab-content")[0]
      y.style.display = "none"
    }

  });

} 




<script>
  var items = document.getElementsByClassName("elementor-toggle-item")
for (let i = 0; i < items.length; i++) {
  items[i].addEventListener("click", function (e) {
    e.preventDefault()
    var x = items[i].getElementsByClassName("elementor-tab-title")[0]
    if (x.classList.length == 1) {
      
      x.classList.add("elementor-active")
      var y = items[i].getElementsByClassName("elementor-tab-content")[0]
      y.style.display = "block"
    } else {
      x.classList.remove("elementor-active")
      var y = items[i].getElementsByClassName("elementor-tab-content")[0]
      y.style.display = "none"
    }

  });

}  

var buttons = document.getElementsByClassName("menu-toggle")[0]
buttons.addEventListener("click", function(){
   buttons.classList.toggle("toggled")
   document.getElementsByTagName("body")[0].classList.toggle("ast-main-header-nav-open")
});
</script>


<style>
  .elementor-7417 .elementor-element.elementor-element-8c129ac .elementor-heading-title {
    color: #fff;
    font-family: "Maax-regular", Sans-serif;
    font-weight: 400;
    line-height: 1.7em;
    letter-spacing: 0px;
    word-spacing: 0.1em;
    -webkit-text-stroke-width: 0px;
    stroke-width: 0px;
    -webkit-text-stroke-color: #000;
    stroke: #000;
}
.elementor-7417 .elementor-element.elementor-element-b1dc0f6 .elementor-heading-title {
    color: #fff;
}  
    
</style>


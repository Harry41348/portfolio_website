function myFunction(x) {
  x.classList.toggle("change");

  var menu = document.getElementById("menu");
  if(x.classList.contains("change")){
    menu.style.top = 0;
  } else {
    menu.style.top = '-22rem';
  }
} 
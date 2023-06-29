window.addEventListener('load', () => {


  // diapositiva inicial
  let slide = 1;

  // total diapositivas
  let slides = document.querySelectorAll(".slider ul li");
  total = slides.length;

  // mostrar
  showSlide(1);

  next = document.querySelector(".next");
  prev = document.querySelector(".prev")


  // boton siguiente

  next.addEventListener('click', (evt) => {
    evt.preventDefault();
    slide++;
    if (slide > total) { slide = 1; }
    showSlide(slide);
  })


  //   boton anterior

  prev.addEventListener("click", (evt) => {
    evt.preventDefault();
    slide--;
    if (slide < 1) { slide = total; }
    showSlide(slide);
  })

  /**
   * mostrar deslizador
   * 
   * @param {number} n 
   * @return {null}
   * 
   */
  function showSlide(n) {
    n--; // decrementa 1
    for (i = 0; i < slides.length; i++) {
      (i == n) ? slides[n].style.display = "block" : slides[i].style.display = "none";
    }
  }

});

//modal
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
// boton-adopción
function redirect() {
  window.location.href = "https://api.whatsapp.com/send?phone=543493461833";
}
// form
var myform = document.getElementById("FormId");
document.getElementById("LinkId").addEventListener("click", function () {
  myform.submit();
});


// toggle
function mobile() {
  var element = document.getElementById("idMobile");
  element.classList.toggle("mobile");
  let overlayDiv = document.querySelector(".overlay");
  console.log(overlayDiv.style.opacity);
  if (overlayDiv.style.opacity === '0')
    overlayDiv.style.opacity = 1;
  else
    overlayDiv.style.opacity = 0;
  
}


//overlay
// $(".toggle").on('click',function(){
//   $(this).children(".overlay").toggleClass("show");
// });

Array.from(document.getElementsByClassName("hover")).forEach(e => e.addEventListener("mouseleave", 
  function () {
    e.removeClass("hover");
  }
))

// tabla castraciones
var table = document.getElementById("racetimes");
  var rows = table.getElementsByTagName("tr");

  // Ocultar filas en pantallas pequeñas
  if (window.innerWidth < 600) {
    for (var i = 0; i < rows.length; i++) {
      rows[i].style.display = "none";
    }
  }

  // Agregar evento de redimensionamiento
  window.addEventListener("resize", function() {
    if (window.innerWidth < 600) {
      for (var i = 0; i < rows.length; i++) {
        rows[i].style.display = "none";
      }
    } else {
      for (var i = 0; i < rows.length; i++) {
rows[i].style.display = "table-row";
}
}
});
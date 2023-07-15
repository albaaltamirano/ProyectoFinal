

// slider principal

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

// tabla castraciones
Array.from(document.getElementsByClassName("hover")).forEach(e => e.addEventListener("mouseleave", 
  function () {
    e.removeClass("hover");
  }
))

// tabla castraciones
var table = document.getElementById("racetimes");
  var rows = table.getElementsByTagName("th");

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


// 

document.addEventListener("DOMContentLoaded", function() {
  var modal = document.getElementById("myModal");
  var modalImage = document.getElementById("modalImage");
  var closeButton = document.getElementsByClassName("close")[0];

  // Abrir modal automáticamente después de 2 segundos
  setTimeout(function() {
    modal.style.display = "block";
    modalImage.src = "./Assets/Carrusel/castracion.png";
  }, 2000);

  // Cerrar modal al hacer clic en la "X"
  closeButton.addEventListener("click", function() {
    modal.style.display = "none";
  });
});

// validad formulario
function validarFormulario(e){
  var error = false;
  var messages = '';
  var nombre = document.getElementsByName('nombre')[0].value;
  if (!nombre){
    messages+= 'Debe rellenar el campo nombre\n';
    error = true;
  }
  var email = document.getElementsByName('email')[0].value;
  if (!email) {
    messages+= 'Debe rellenar el campo email\n';
    error = true;
  }
  var telefono = document.getElementsByName('telefono')[0].value;
  if (!telefono){
    messages+= 'Debe rellenar el campo teléfono\n';
    error = true;
  }
  var comentarios = document.getElementsByName('mensaje')[0].value;
  if (!comentarios) {
    messages+= 'Debe rellenar el campo mensajes\n';
    error = true;
  }
  var errorDiv = document.querySelector('.errorMessages');
  errorDiv.innerText = messages;
  if (error) {
    e.preventDefault();
  }
  return !error;
}

var btnEnviar = document.querySelector('.bottom');
btnEnviar.addEventListener('click', validarFormulario);


// card +
function submenuToggle(divid) {
  var submenu = document.getElementById(divid);
  if( submenu.style.display === "none") {
      submenu.style.display = "block";
  } else {
      submenu.style.display = "none";
  }
}
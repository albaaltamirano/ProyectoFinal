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
function redirect()
{
window.location.href="https://api.whatsapp.com/send?phone=543493461833";
}
// form
var myform = document.getElementById("FormId");
document.getElementById("LinkId").addEventListener("click", function () {
  myform.submit();
});

// button card principal
function irAlSegundoDiv() {
    // Obtener el documento del segundo HTML
    var iframe = document.createElement('iframe');
    iframe.src = 'adopcion.html';
    iframe.style.display = 'none';

    // Añadir el iframe al cuerpo del documento actual
    document.body.appendChild(iframe);

    // Obtener el segundo div dentro del iframe
    iframe.onload = function() {
      var segundoDiv = iframe.contentDocument.getElementById('div-a-unir');
      
      // Desplazarse al segundo div
      segundoDiv.scrollIntoView({ behavior: 'smooth' });

      // Eliminar el iframe
      setTimeout(function() {
        document.body.removeChild(iframe);
      }, 1000); // Puedes ajustar este tiempo según tus necesidades
    };
  }

// slider rescates


// toggle
function mobile(){
  var element = document.getElementById("idMobile");
	element.classList.toggle("mobile");

}
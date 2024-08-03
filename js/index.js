

  const boxes2 = document.querySelectorAll(".box");

  window.addEventListener("scroll",() =>{


    const triggerBottom = window.innerHeight;

    boxes2.forEach(box => {
      const boxTop = box.getBoundingClientRect().top;

      if(boxTop<triggerBottom){
        box.classList.add("show");
      }else{
        box.classList.remove("show");
      }


  });
});

const boxes = document.querySelectorAll('.box');

    function checkScroll() {
        boxes.forEach(box => {
            const boxTop = box.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (boxTop < windowHeight * 0.75) {
                box.classList.add('visible');
            } else {
                box.classList.remove('visible');
            }
        });
    }

    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Para comprobar el estado inicial al cargar la página



  /*function checkBoxes(){*/



  //window.alert("Pregunta por Nuestras Promociones por WhatsApp");

window.onload = function() { // también puede usar window.addEventListener('load', (event) => {
    alert('Pregunta por Nuestras Promociones por WhatsApp');

    // la imagen es cargada al mismo tiempo
    
  };

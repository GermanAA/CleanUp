// Optimización de animación con IntersectionObserver
const boxes = document.querySelectorAll(".box");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show", "visible");
    } else {
      entry.target.classList.remove("show", "visible");
    }
  });
}, {
  threshold: 0.25 // Se activa cuando el 25% del elemento es visible
});

boxes.forEach(box => observer.observe(box));

// Mostrar alerta promocional al cargar la página
window.addEventListener('load', () => {
  alert('Pregunta por Nuestras Promociones por WhatsApp');
});

// Validación nativa de Bootstrap (form-control + needs-validation)
(() => {
  'use strict';
  const forms = document.querySelectorAll('.needs-validation');
  forms.forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    });
  });
})();

// Validación personalizada y confirmación antes de enviar formulario
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('myForm');
  if (!form) return;

  form.addEventListener('submit', event => {
    event.preventDefault();

    const name = document.getElementById('nombre')?.value || '';
    const email = document.getElementById('email')?.value || '';
    const telefono = document.getElementById('telefono')?.value || '';
    const comentario = document.getElementById('comentario')?.value || '';
    const direccion = document.getElementById('direccion')?.value || '';

    const confirmationMessage = `Confirma el envío de los siguientes datos:\n\nNombre: ${name}\nEmail: ${email}\nTeléfono: ${telefono}\nComentarios: ${comentario}\nDirección: ${direccion}`;

    if (confirm(confirmationMessage)) {
      form.submit();
    }
  });
});


document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    const body = document.body;

    // Initialize the IntersectionObserver
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const slideId = entry.target.id;
                if (entry.isIntersecting) {
                    // Add the active class for the visible slide
                    body.classList.add(`${slideId}-active`);
                } else {
                    // Remove the class when the slide is no longer visible
                    body.classList.remove(`${slideId}-active`);
                }
            });
        },
        {
            threshold: Array.from({ length: 21 }, (_, i) => i / 20), // Evalúa puntos más precisos de 0 a 1             
        }
    );


    // Observe each slide
    slides.forEach((slide) => observer.observe(slide));

  

    // Función para manejar el cambio de estado de los checkboxes
    function setupCheckbox(labelId, checkboxId) {
        const checkbox = document.getElementById(checkboxId);
        const label = document.getElementById(labelId);

        if ( checkbox ) {
            checkbox.addEventListener('change', function () {
                if (checkbox.checked) {
                    label.style.backgroundColor = '#FFBA49'; // Fondo amarillo si está marcado
                    label.style.color = '#1A1030'; // Color de texto
                } else {
                    label.style.backgroundColor = '#1A1030'; // Fondo original si no está marcado
                    label.style.color = 'white'; // Color de texto original
                }
            });
        }
    }

    // Configuración para todos los checkboxes
    setupCheckbox('labelPromo', 'promo');
    setupCheckbox('labelOfer', 'oferta');
    setupCheckbox('labelBol', 'boletin');
    setupCheckbox('labelPubli', 'publicidad');
    setupCheckbox('labelReu', 'reunion');
    setupCheckbox('labelNove', 'novedades');
    setupCheckbox('labelEvento', 'evento');
    setupCheckbox('labelNews', 'newsletter');
    setupCheckbox('labelDesc', 'descuentos');
    setupCheckbox('labelInvitacion', 'invitacion');

});


// // Fix passive event
// document.addEventListener("wheel", function () {}, { passive: false });

// var slider = {
//   slideIds: ['slide-1', 'slide-2', 'slide-3', 'slide-4', 'slide-5'],
//   index: 0,
//   canScroll: true,
//   lastTimestamp: 0, // timestamp of the last triggered event
//   lastWheelDelta: 0
// };

// function slideTo(slideIndex) {
//   slider.canScroll = false;

//   const target = document.getElementById(slider.slideIds[slider.index]);
//   if (target) {
//     window.scrollTo({
//       top: target.offsetTop,
//       behavior: "smooth"
//     });
//   }

//   setTimeout(() => {
//     slider.canScroll = true;
//   }, 600);

//   document.querySelectorAll("a[href^='#']").forEach(link => {
//     link.classList.remove('active');
//   });

//   const activeLink = document.querySelector(`a[href="#${slider.slideIds[slider.index]}"]`);
//   if (activeLink) activeLink.classList.add('active');
// }

// // Wheel event
// window.addEventListener('wheel', function (event) {
//   event.preventDefault();
//   const delta = event.deltaY;
//   const wheelDelta = event.wheelDeltaY;
//   const timeDelta = Date.now() - slider.lastTimestamp;
//   slider.lastTimestamp = Date.now();
//   const wheelDeltaDelta = Math.abs(Math.abs(wheelDelta) - Math.abs(slider.lastWheelDelta));

//   if (wheelDeltaDelta > 10) {
//     slider.lastTimestamp = 0;
//   }
//   slider.lastWheelDelta = wheelDelta;

//   if (slider.canScroll && timeDelta > 100) {
//     if (delta > 1) { // Scroll hacia abajo
//       slider.index += 1;
//       if (slider.index >= slider.slideIds.length - 1) slider.index = slider.slideIds.length - 1;
//     } else if (delta < -1) { // Scroll hacia arriba
//       slider.index -= 1;
//       if (slider.index <= 0) slider.index = 0;
//     }

//     slideTo(slider.index);
//   }
// });

// // Assign data-index to slides
// slider.slideIds.forEach((value, index) => {
//   const slide = document.getElementById(value);
//   if (slide) slide.setAttribute('data-index', index);
// });

// // Click event for navigation links
// document.querySelectorAll("a[href^='#']").forEach(link => {
//   link.addEventListener('click', function (e) {
//     e.preventDefault();
//     const targetId = this.getAttribute('href').substring(1);
//     const targetSlide = document.getElementById(targetId);
//     if (targetSlide) {
//       const index = parseInt(targetSlide.getAttribute('data-index'));
//       slider.index = index;
//       slideTo(slider.index);
//     }
//   });
// });

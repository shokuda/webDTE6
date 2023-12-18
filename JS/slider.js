document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let index = 0;
  
    function nextSlide() {
      index = (index + 1) % slides.length;
      updateSlider();
    }
  
    function updateSlider() {
      const translateX = -index * 100;
      slider.style.transform = `translateX(${translateX}%)`;
    }
  
    setInterval(nextSlide, 3000); // Cambia de diapositiva cada 3 segundos (3000 milisegundos)
  });
  
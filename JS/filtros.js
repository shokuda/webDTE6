// Obtén todas las tarjetas con la clase 'card'
var cards = document.querySelectorAll(".card");

// Obtén todas las tarjetas del contenedor de filtros con la clase 'tarjeta'
var filterButtons = document.querySelectorAll(".tarjeta");

// Maneja el evento de clic en las tarjetas del filtro
filterButtons.forEach(function (button) {
  button.addEventListener("click", function () {
    // Obtén la categoría de la tarjeta del filtro
    var category = button.getAttribute("data-category");

    // Itera sobre cada tarjeta y muestra/oculta según la categoría
    cards.forEach(function (card) {
      var cardCategories = card.id.split(" "); // Obtén todas las categorías de la tarjeta

      // Comprueba si la categoría de la tarjeta está presente en las categorías de la tarjeta de filtro
      if (cardCategories.includes(category) || category === "todos") {
        // Muestra la tarjeta si hay una coincidencia o si la categoría del filtro es "todos"
        card.style.display = "block";
      } else {
        // Oculta la tarjeta si no hay una coincidencia
        card.style.display = "none";
      }
    });
  });
});

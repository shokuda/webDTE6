// Obtén el elemento de entrada de búsqueda
var searchInput = document.getElementById("searchInput");

// Maneja el evento de entrada en el campo de búsqueda
searchInput.addEventListener("input", function () {
  // Obtén el valor de búsqueda del campo de entrada y elimina los espacios en blanco
  var searchText = searchInput.value.toLowerCase().replace(/\s/g, '');

  // Obtén todas las tarjetas con la clase 'card'
  var cards = document.querySelectorAll(".card");

  // Itera sobre cada tarjeta y muestra/oculta según el texto de búsqueda
  cards.forEach(function (card) {
    var cardId = card.id.toLowerCase().replace(/\s/g, ''); // Elimina los espacios en blanco del ID de la tarjeta
    var cardTitle = card.querySelector(".card-title").textContent.toLowerCase().replace(/\s/g, ''); // Elimina los espacios en blanco del título de la tarjeta
    var cardText = card.querySelector(".card-text").textContent.toLowerCase().replace(/\s/g, ''); // Elimina los espacios en blanco del texto de la tarjeta

    // Comprueba si el texto de búsqueda está presente en el ID, título o texto de la tarjeta
    if (cardId.includes(searchText) || cardTitle.includes(searchText) || cardText.includes(searchText)) {
      // Muestra la tarjeta si hay una coincidencia
      card.style.display = "block";
    } else {
      // Oculta la tarjeta si no hay una coincidencia
      card.style.display = "none";
    }
  });
});

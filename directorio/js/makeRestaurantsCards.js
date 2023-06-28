export default (restaurants) => {
  const imageURL = [
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXIJeHfB-vRc9CjghngJ06qX7QVmNAEFCyL-D6Orf71axwmlvLEpHc_3qxz_xP5IICDLY",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBvqnm7ejwiozLACFCjG-ROUubmym8yxkp3pf1ShYr1VSxmEIJ6Glc9pgBkLyDxpw9ekA",
  ];

  const $fragment = document.createDocumentFragment();

  restaurants.forEach(({ Nombre_Resto, Direccion }) => {
    const $cardContainer = document.createElement("div");
    $cardContainer.className = "card-restaurant";

    const $anchor = document.createElement("a");
    $anchor.className = "card-anchor";

    const $img = document.createElement("img");
    $img.className = "card-image";

    $img.src = imageURL[Math.floor(Math.random() * imageURL.length)];

    const $cardInfo = document.createElement("div");
    $cardInfo.className = "card-info";

    const $cardInfoContent = document.createElement("div");
    $cardInfoContent.className = "card-info-content";

    const $cardName = document.createElement("h5");
    $cardName.className = "card-name";
    $cardName.textContent = Nombre_Resto;

    const $cardDescription = document.createElement("p");
    $cardDescription.className = "card-description";
    $cardDescription.textContent = `Dirección: ${Direccion}`;

    $cardInfoContent.appendChild($cardName);
    $cardInfoContent.appendChild($cardDescription);

    $cardInfo.appendChild($cardInfoContent);

    $anchor.appendChild($img);
    $anchor.appendChild($cardInfo);

    $cardContainer.appendChild($anchor);

    $cardContainer.addEventListener("mouseenter", () => {
      $cardContainer.classList.add("card-restaurant-active");
    });

    $cardContainer.addEventListener("mouseleave", () => {
      $cardContainer.classList.remove("card-restaurant-active");
    });

    $fragment.appendChild($cardContainer);
  });

  return $fragment;
};

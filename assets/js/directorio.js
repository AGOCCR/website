/*
<div class="">
          <a class="">
            <img class="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBvqnm7ejwiozLACFCjG-ROUubmym8yxkp3pf1ShYr1VSxmEIJ6Glc9pgBkLyDxpw9ekA" />
            <div class="">
              <div class="">
                <h5 class="">Nombre del resto</h5>
                <p class="">Direccion: Avenida Principal, Pueblo</p>
              </div>
            </div>
          </a>
        </div>
*/

(() => {
  const imageURL = [
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXIJeHfB-vRc9CjghngJ06qX7QVmNAEFCyL-D6Orf71axwmlvLEpHc_3qxz_xP5IICDLY",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBvqnm7ejwiozLACFCjG-ROUubmym8yxkp3pf1ShYr1VSxmEIJ6Glc9pgBkLyDxpw9ekA",
  ];
  const d = document;
  const $restaurantsContainer = d.getElementById("restaurants-container");
  const $loader = d.getElementById("restaurant-loader");
  let state = {
    page: 1,
    maxPage: 1,
    is_end: false,
    restaurants: [],
    barrio: "",
  };
  //EVENTOS DE LAS CARDS

  const makeCards = (data) => {
    try {
      if (!data.length)
        return $restaurantsContainer.classList.add("restaurants-not-found");
      else $restaurantsContainer.classList.remove("restaurants-not-found");

      const $frament = document.createDocumentFragment();

      data.forEach(({ Nombre_Resto, Direccion }) => {
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

        $frament.appendChild($cardContainer);
      });

      $restaurantsContainer.appendChild($frament);
    } finally {
      $loader.classList.remove("restaurant-loader-active");
    }
  };

  const getRestaurants = async () => {
    $restaurantsContainer.innerHTML = "";
    $loader.classList.add("restaurant-loader-active");

    return fetch(
      `http://localhost:80/website/db_php/API/restaurant.php?${
        state.barrio ? `barrio=${state.barrio}` : ""
      }&page=${state.page}`
    )
      .then((res) => (res.ok ? res.json() : Promise.reject(res)))
      .then(({ results, is_end }) => {
        state.restaurants = [...state.restaurants, ...results];
        state.is_end = is_end;
      })
      .catch((err) => console.log(err));
  };

  const $input = d.querySelector("#search");
  const $prevBtn = d.querySelector("#prev-restaurants");
  const $nextBtn = d.querySelector("#next-restaurants");

  $input.addEventListener("keyup", async (e) => {
    const barrio = e.target.value;

    state = {
      page: 1,
      maxPage: 1,
      is_end: false,
      restaurants: [],
      barrio,
    };

    getRestaurants().then(() => makeCards(state.restaurants));
  });

  $prevBtn.addEventListener("click", () => {
    if (state.page === 1) return;

    state.page -= 1;
    makeCards(
      state.restaurants.slice((state.page - 1) * 10, (state.page - 1) * 10 + 10)
    );
  });

  $nextBtn.addEventListener("click", () => {
    if (state.maxPage !== state.page) {
      state.page += 1;

      $restaurantsContainer.innerHTML = "";
      $loader.classList.add("restaurant-loader-active");

      makeCards(
        state.restaurants.slice(
          (state.page - 1) * 10,
          (state.page - 1) * 10 + 10
        )
      );
    } else if (!state.is_end) {
      state.page += 1;
      state.maxPage += 1;

      $restaurantsContainer.innerHTML = "";
      $loader.classList.add("restaurant-loader-active");

      getRestaurants().then(() =>
        makeCards(
          state.restaurants.slice(
            (state.page - 1) * 10,
            (state.page - 1) * 10 + 10
          )
        )
      );
    }
  });

  getRestaurants().then(() => makeCards(state.restaurants));
})();

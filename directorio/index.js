import fetchRestaurants from "./js/fetchRestaurants.js";
import loadPreferencesForm from "./js/loadPreferencesForm.js";
import makeRestaurantsCards from "./js/makeRestaurantsCards.js";
import state from "./js/state.js";
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

const d = document;

//SELECTS
// if ($selectPreference.value === "ninguno")
//   return ($selectType.disabled = true);

// $selectType.disabled = false;

// if ($selectPreference.value === "precio") {
//   $selectType.innerHTML = `
//     <option value="">selecciona un valor</option>
//     <option value="menor">menor a mayor</option>
//     <option value="mayor">mayor a menor</option>
//   `;
// }

// if ($selectPreference.value === "categoria") {
//   const categories = await fetchCategories();

//   $selectType.innerHTML =
//     "<option selected disabled>Selecciona una opción</option>" +
//     categories
//       .map(
//         ({ ID_Categoria, Nombre_Categoria }) => `
//     <option value=${ID_Categoria}>${Nombre_Categoria}</option>
//   `
//       )
//       .join("");
// }

const $restaurantsContainer = d.getElementById("restaurants-container");
const $loader = d.getElementById("restaurant-loader");

const $input = d.querySelector("#search");
const $prevBtn = d.querySelector("#prev-restaurants");
const $nextBtn = d.querySelector("#next-restaurants");

const loading = () => {
  $restaurantsContainer.innerHTML = "";
  $loader.classList.add("restaurant-loader-active");
};

const removeLoading = () =>
  $loader.classList.remove("restaurant-loader-active");

const updateCardsRestaurants = () => {
  const $cards = makeRestaurantsCards(state.getRestaurantsPerPage());

  if ($cards.childElementCount) {
    $restaurantsContainer.classList.remove("restaurants-not-found");
    $restaurantsContainer.appendChild($cards);
  } else $restaurantsContainer.classList.add("restaurants-not-found");
};

$input.addEventListener("keyup", async (e) => {
  if (
    e.key === "Enter" ||
    ($input.value === state.getBarrio() && state.getBarrio() === "")
  )
    return;

  const barrio = e.target.value;

  loading();

  state.reset();

  state.setBarrio(barrio);

  const { results, is_end } = await fetchRestaurants();

  state.addRestaurants(results);
  state.setIsEnd(is_end);

  updateCardsRestaurants();

  removeLoading();
});

$prevBtn.addEventListener("click", () => {
  if (!state.decrementPage()) return;

  loading();

  updateCardsRestaurants();

  removeLoading();
});

$nextBtn.addEventListener("click", async () => {
  const isEnd = state.getIsEnd();
  const isMaxPage = state.getPage() >= state.getMaxPage();

  if (isEnd && isMaxPage) return;

  loading();

  state.incrementPage();

  if (!isEnd) {
    state.incrementMaxPage();
    const { results, is_end } = await fetchRestaurants();

    state.addRestaurants(results);
    state.setIsEnd(is_end);

    updateCardsRestaurants();
  } else if (!isMaxPage) updateCardsRestaurants();

  removeLoading();
});

fetchRestaurants().then(({ results, is_end }) => {
  state.addRestaurants(results);
  state.setIsEnd(is_end);

  updateCardsRestaurants();
});

state.setToReload(async () => {
  loading();

  state.reset();

  const { results, is_end } = await fetchRestaurants();

  state.addRestaurants(results);
  state.setIsEnd(is_end);

  console.log(results);

  updateCardsRestaurants();

  removeLoading();
});

d.addEventListener("DOMContentLoaded", loadPreferencesForm);

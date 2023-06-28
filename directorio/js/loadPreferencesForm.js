import fetchCategories from "./fetchCategories.js";
import state from "./state.js";

export default async () => {
  const d = document;
  const $preferencesForm = d.getElementById("preferences-form");

  const categories = await fetchCategories();

  const categoriesOptions = categories
    .map(
      ({ Nombre_Categoria, ID_Categoria }) => `
    <div class="preferences-option">
      <label  for="categoria-${Nombre_Categoria}">${Nombre_Categoria}</label>
      <input id="categoria-${Nombre_Categoria}" value="${ID_Categoria}" name="categoria" type="radio" />
    </div>
    `
    )
    .join("");

  $preferencesForm.innerHTML = `
    <h5 class="preferences-title">Precio</h5>
    <div class="preferences-option">
      <label  for="precio-ninguno-preference">Ninguno</label>
      <input id="precio-ninguno-preference" value="" name="precio" type="radio" checked/>
    </div>
    <div class="preferences-option">
      <label  for="precio-menor-preference">De menor a mayor</label>
      <input id="precio-menor-preference" value="menor" name="precio" type="radio" />
    </div>
    <div class="preferences-option">
      <label  for="precio-mayor-preference">De mayor a menor</label>
      <input id="precio-mayor-preference" value="mayor" name="precio" type="radio" />
    </div>
    <h5 class="preferences-title">Categoria</h5>
    <div class="preferences-option">
      <label  for="categoria-ninguno-preference">Ninguno</label>
      <input id="categoria-ninguno-preference" value="" name="categoria" type="radio" checked/>
    </div>
    ${categoriesOptions}
    <div class="preferences-form-buttons">
      <button id="cancel-preferences" type="button" class="preferences-button-cancel">Cancelar</button>
      <button type="submit" class="preferences-button-send">Enviar</button>
    </div>
  `;

  d.addEventListener("click", (e) => {
    if (!e.target.matches("#cancel-preferences")) return;

    $preferencesForm.classList.toggle("preferences-form-active");
  });

  $preferencesForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const { precio, categoria } = $preferencesForm;

    state.setPrecio(precio.value);
    state.setCategoria(categoria.value);

    state.getToReload()();

    $preferencesForm.classList.remove("preferences-form-active");
  });

  d.addEventListener("click", (e) => {
    if (e.target.matches("#preferences-button"))
      return $preferencesForm.classList.toggle("preferences-form-active");

    if (
      !e.target.closest("#preferences-form") &&
      $preferencesForm.classList.contains("preferences-form-active")
    )
      $preferencesForm.classList.remove("preferences-form-active");
  });
};

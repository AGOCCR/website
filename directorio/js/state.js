class DirectorioState {
  static NUMBER_PER_PAGE = 15;
  #page;
  #maxPage;
  #isEnd;
  #restaurants;
  #barrio = "";
  #precio = "";
  #categoria = "";
  #toReload;

  constructor() {
    this.reset();
  }

  //PAGE METHODS
  getPage() {
    return this.#page;
  }

  incrementPage() {
    if (!this.#isEnd || this.#page < this.#maxPage) {
      this.#page++;
      return true;
    }

    return false;
  }

  decrementPage() {
    if (this.#page > 1) {
      this.#page--;
      return true;
    }

    return false;
  }

  //MAXPAGE METHODS
  getMaxPage() {
    return this.#maxPage;
  }

  incrementMaxPage() {
    this.#maxPage++;
  }

  //IS_END METHODS
  getIsEnd() {
    return this.#isEnd;
  }

  setIsEnd(isEnd) {
    if (typeof isEnd === "boolean") {
      this.#isEnd = isEnd;
      return true;
    }

    return false;
  }

  //RESTAURANTS METHODS
  getRestaurantsPerPage() {
    const skip = (this.#page - 1) * DirectorioState.NUMBER_PER_PAGE;

    return this.#restaurants.slice(
      skip,
      skip + DirectorioState.NUMBER_PER_PAGE
    );
  }

  addRestaurants(newRestaurants) {
    if (Array.isArray(newRestaurants)) {
      this.#restaurants = [...this.#restaurants, ...newRestaurants];
      return true;
    }

    return false;
  }

  //BARRIO METHODS
  getBarrio() {
    return this.#barrio;
  }

  setBarrio(barrio) {
    if (typeof barrio === "string") {
      this.#barrio = barrio;
      return true;
    }
    return false;
  }

  getPrecio() {
    return this.#precio;
  }

  setPrecio(precio) {
    this.#precio = precio;
  }

  getCategoria() {
    return this.#categoria;
  }

  setCategoria(categoria) {
    this.#categoria = categoria;
  }

  setToReload(cb) {
    this.#toReload = cb;
  }

  getToReload() {
    return this.#toReload;
  }

  reset() {
    this.#page = 1;
    this.#maxPage = 1;
    this.#isEnd = false;
    this.#restaurants = [];
  }
}

export default new DirectorioState();

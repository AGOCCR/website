import state from "./state.js";
import host from "../../assets/js/helpers/host.js";

export default async () => {
  const barrio = state.getBarrio();
  const page = state.getPage();
  const precio = state.getPrecio();
  const categoria = state.getCategoria();

  try {
    const url = `${host}/API/restaurant.php?
    barrio=${barrio}&page=${page}&precio=${precio}&categoria=${categoria}`;

    const res = await fetch(url);

    if (!res.ok) throw res;

    const json = await res.json();

    return json;
  } catch (e) {
    console.log("Error", e);
  }
};

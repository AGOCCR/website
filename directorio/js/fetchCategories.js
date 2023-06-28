import host from "../../assets/js/helpers/host.js";

export default async () => {
  try {
    const url = `${host}/API/categorias.php`;

    const res = await fetch(url);

    if (!res.ok) throw res;

    const json = await res.json();

    return json;
  } catch (e) {
    console.log("Error fetch categories", e);
  }
};

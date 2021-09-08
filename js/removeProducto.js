import {
  disableAnchorChilds,
  removeProduct,
  restarPrecioATotal,
} from "./xojeFunciones.js";
const tableBody = document.querySelector("tbody");
const filas = tableBody.querySelectorAll("tr");
filas.forEach((producto) => {
  const btn_remove = producto.querySelector(".product-remove");
  disableAnchorChilds(btn_remove);
  btn_remove.onclick = () => {
    const id = producto.querySelector(".d-none").innerText;
    const precio = producto.querySelector(".price").innerText;
    removeProduct(id);
    restarPrecioATotal(parseInt(precio));
    producto.classList.add("d-none");
  };
});

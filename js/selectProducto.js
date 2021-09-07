import { disableAnchorChilds, addProduct } from "./xojeFunciones.js";
const productos = document.querySelectorAll(".product");
productos.forEach((producto) => {
  disableAnchorChilds(producto);
  const btn_add = producto.querySelector(".buy-now");
  btn_add.onclick = () => {
    const idCliente = sessionStorage.getItem("idcliente");
    if (idCliente) {
      addProduct(producto);
    }
  };
  producto.onclick = (e = new Event("click")) => {
    if (!e.target.classList.contains("ion-ios-cart")) {
      if (e.target.classList.contains("ion-ios-log-in")) {
        window.location.href = `http://fruitbenidorm.es/php/pages/clientes.php`;
      } else {
        const idProducto = producto.querySelector(".d-none");
        window.location.href = `http://fruitbenidorm.es/php/pages/product-single.php?id=${idProducto.innerText}`;
      }
    }
  };
});

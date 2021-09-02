import { addProduct, disableAnchorChilds } from './xojeFunciones.js';
const producto = document.querySelector(".product");
const btn_add = producto.querySelector(".buy-now");
const btn_cart = btn_add.querySelector(".ion-ios-cart");
disableAnchorChilds(producto);
btn_add.onclick = () => {
    if (btn_cart) {
        const id = producto.querySelector(".d-none").innerText;
        const precio = parseInt(producto.querySelector(".price-sale").innerText);
        const modo_venta=producto.querySelector(".price-sale").innerText.split('/')[1];
        console.log(modo_venta);
        alert("Stop");
        addProduct({ id, precio });
    } else {
        window.location.href = "http://fruitbenidorm.es/php/pages/shop.php";
    }
};

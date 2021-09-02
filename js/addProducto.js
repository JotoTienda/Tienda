import { addProduct, disableAnchorChilds } from './xojeFunciones.js';
const producto = document.querySelector(".product");
const btn_add = producto.querySelector(".buy-now");
const btn_cart = btn_add.querySelector(".ion-ios-cart");
disableAnchorChilds(producto);

btn_add.onclick = (e = new Event("click")) => {

    if (btn_cart) {
        addProduct(producto);
    } else {
        //window.location.href = "http://fruitbenidorm.es/php/pages/shop.php";
    }
};

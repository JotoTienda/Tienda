import { addProduct,disableAnchorChilds } from './xojeFunciones.js';
const producto=document.querySelector(".product");
const btn_add=producto.querySelector(".buy-now");
const btn_cart=btn_add.querySelector(".ion-ios-cart");
disableAnchorChilds(producto);
btn_add.onclick=()=>{
    if (btn_cart) {
        alert("add carrito");
    } else {
        alert("Redirect loggin");
    }
};

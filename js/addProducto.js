import { addProduct,disableAnchorChilds } from './xojeFunciones.js';
const producto=document.querySelector(".product");
const btn_add=producto.querySelector(".buy-now");
const btn_cart=btn_add.querySelector(".ion-ios-cart");
disableAnchorChilds(producto);
btn_add.onclick=()=>{
    if (btn_cart) {
        const id=producto.querySelector(".d-none").innerText;
        const precio=parseInt(producto.querySelector(".price-sale").innerText);
        addProduct({id,precio});
    } else {
        window.location.href = "http://fruitbenidorm.es/php/pages/shop.php";
    }
};

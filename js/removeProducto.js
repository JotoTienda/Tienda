import { disableAnchorChilds, removeProduct } from './xojeFunciones.js';
const tableBody=document.querySelector("tbody");
const filas=tableBody.querySelectorAll("tr");
filas.forEach(producto=>{
    const btn_remove=producto.querySelector(".product-remove");
    disableAnchorChilds(btn_remove);
    btn_remove.onclick=()=>{
        const id = producto.querySelector(".d-none").innerText;
        removeProduct(id);
        producto.classList.add("d-none");
    };
    
});

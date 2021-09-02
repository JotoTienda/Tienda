import { disableAnchorChilds, addProduct } from './xojeFunciones.js';

const productos = document.querySelectorAll('.product');

productos.forEach(producto => {
	disableAnchorChilds(producto);
	const btn_add = producto.querySelector(".buy-now");

	producto.onclick = (e = new Event("click")) => {

		if (e.target.classList.contains("ion-ios-cart")) {
			btn_add.onclick = () => {
				const id = producto.querySelector(".d-none").innerText;
				const precio = parseInt(producto.querySelector(".price-sale").innerText);
				addProduct({ id, precio });
			};
		} else {
			const idProducto = producto.querySelector(".d-none");

			window.location.href = `http://fruitbenidorm.es/php/pages/product-single.php?id=${idProducto.innerText}`;
		}
	};
});

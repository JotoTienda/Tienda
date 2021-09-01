import { disableAnchorChilds } from './xojeFunciones.js';

const productos = document.querySelectorAll('.product');
productos.forEach(producto => {
	disableAnchorChilds(producto);
	producto.onclick = () => {
		console.log(producto);
		const idProducto=producto.querySelector(".d-none");
		window.location.href=`http://fruitbenidorm.es/php/pages/product-single.php?id=${idProducto.innerText}`;
	};
});

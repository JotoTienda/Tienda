import { addProduct } from './xojeFunciones.js';
const productos = document.querySelectorAll('.product');
productos.forEach(producto => {
	const hijosProductos = producto.querySelectorAll('a');
	hijosProductos.forEach(hijo => {
		hijo.onclick = e => {
			e.preventDefault();
		};
	});
	producto.onclick = () => {
		if (producto.querySelector('.ion-ios-cart')) {
			const nombreProducto = producto.querySelector('h3').innerText;
			const precio = parseInt(
				producto.querySelector('.price-sale').innerText[0]
			);
			addProduct({ nombre: nombreProducto, precio: precio });
		} else {
			window.location.href = 'clientes.php';
		}
	};
});

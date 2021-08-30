const productos = document.querySelectorAll('.product');
productos.forEach(producto => {
	const hijosProductos = producto.querySelectorAll('a');
	hijosProductos.forEach(hijo => {
		hijo.onclick = e => {
			e.preventDefault();
		};
	});
	producto.onclick = () => {
		const idProducto=producto.querySelector(".d-none");
		window.location.href=`http://fruitbenidorm.es/php/pages/product-single.php?id=${idProducto.innerText}`;
	};
});

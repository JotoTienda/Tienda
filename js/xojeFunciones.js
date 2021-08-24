export function addProduct(newProduct = { nombre: '', precio: 0 }) {
	let carrito = getCookie('carrito');
	if (!carrito) {
		let data = {
			cliente: {
				nombre: 'Juan',
				apellido1: 'Sánchez',
				apellido2: 'Alvarez',
				pais: 'suecia',
				direccion: 'Paseo de la carreta',
				piso: '4º A',
				ciudad: 'Callosa',
				cPostal: '03502',
				telefono: '123123123',
				email: 'a@ejemplo.com',
			},
			productos: [],
		};
		data.productos.push({
			nombre: newProduct.nombre,
			cantidad: 1,
			coste: newProduct.precio,
		});
		setCookie('carrito', data);
	} else {
		let aumentado = false;
		carrito = JSON.parse(carrito);
		carrito.productos.forEach(producto => {
			if (producto.nombre == newProduct.nombre) {
				producto.cantidad++;
				producto.coste += producto.coste;
				aumentado = true;
			}
		});
		if (!aumentado) {
			carrito.productos.push({ nombre: newProduct, cantidad: 1 });
		}
		setCookie('carrito', carrito);
	}
	actualizaNumCarrito();
}
export function getCookie(cname) {
	let name = cname + '=';
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return '';
}
export function setCookie(cname, cvalue) {
	const d = new Date();
	d.setTime(d.getTime() + 30 * 60 * 1000);
	let expires = 'expires=' + d.toUTCString();
	document.cookie =
		cname + '=' + JSON.stringify(cvalue) + ';' + expires + ';path=/';
}
export function actualizaNumCarrito() {
	const logoCarrito = document.getElementById('logo_cart');
	let carrito = getCookie('carrito');
	if (carrito) {
		carrito = JSON.parse(carrito);
		let cantidadProductos = 0;
		carrito.productos.forEach(producto => {
			cantidadProductos += producto.cantidad;
		});
		logoCarrito.innerHTML = `<span class="icon-shopping_cart"></span>[${cantidadProductos}]`;
	}
}
export function printCarrito() {
	const output = document.querySelector('tbody');
	let carrito = getCookie('carrito');
	carrito = JSON.parse(carrito);
	const productos = carrito.productos;
	console.log(productos);
	output.innerHTML = `
	<tr class="text-center">
	<td class="product-remove">
		<a href="#"><span class="ion-ios-close"></span></a>
	</td>
	<td class="image-prod">
		<div
			class="img"
			style="background-image: url(../images/product-3.jpg)"
		></div>
	</td>
	<td class="product-name">
		<h3>Pimiento variado</h3>
		<p>
			De las montañas de Alicante hasta nuestra Costa Blanca Tomates,
	Naranjas, Turrones, Dátiles, Chocolates...
		</p>
	</td>
	<td class="price">3.90</td>
	<td class="quantity">
		<div class="input-group mb-3">
			<input
				type="text"
				name="quantity"
				class="quantity form-control input-number"
				value="1"
				min="1"
				max="100"
			/>
		</div>
	</td>
	<td class="total">$4.90</td>
</tr>`;
}
export function printCliente() {
	let carrito = getCookie('carrito');

	if (carrito) {
		carrito = JSON.parse(carrito);
		const cliente = carrito.cliente;
		const nombre = document.getElementById('cliente_nombre');
		nombre.value = cliente.nombre;
		document.getElementById('cliente_apellido1').value = cliente.apellido1;
		document.getElementById('cliente_apellido2').value = cliente.apellido2;
		document.getElementById('cliente_pais').value = cliente.pais;
		document.getElementById('cliente_direccion').value = cliente.direccion;
		document.getElementById('cliente_piso').value = cliente.piso;
		document.getElementById('cliente_ciudad').value = cliente.ciudad;
		document.getElementById('cliente_cPostal').value = cliente.cPostal;
		document.getElementById('cliente_telefono').value = cliente.telefono;
		document.getElementById('cliente_email').value = cliente.email;
	}
}
export function printTotal() {
	let carrito = getCookie('carrito');

	if (carrito) {
		carrito = JSON.parse(carrito);
		const productos = carrito.productos;
		productos.forEach(producto => {});
	}
}
export function checkIsLogged() {
	const login = getCookie('isLogged');
}
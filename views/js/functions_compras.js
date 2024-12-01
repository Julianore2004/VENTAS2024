
// Función para listar los productos
async function listar_compras() {
    try {
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=listar_compras');
        let json = await respuesta.json();

        if (json.status) {

            let datos = json.contenido;
            let cont = 0;
            // Agregar filas a la tabla
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + item.id;
                cont += 1
                nueva_fila.innerHTML = `
                 <tr>
                        <th>${cont}</th>
                         <td>${item.producto.nombre}</td>
                        <td>${item.cantidad}</td>
                        <td>${item.precio}</td>
                        <td>${item.fecha_compra}</td>
                        <td>${item.trabajador.razon_social}</td>
                        <td>${item.options}</td>

                    </tr>
                `;
                document.querySelector("#tbl_compras")
                    .appendChild(nueva_fila);

            });
        };
        console.log(json);
    } catch (error) {
        console.error("Error al listar productos" + error);
    }
}
if (document.querySelector('#tbl_compras')) {
    listar_compras();
}
async function registrar_compras() {
    let producto = document.getElementById('producto').value;
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let trabajador = document.getElementById('trabajador').value;

    if (producto == "" || cantidad == "" ||
        precio == "" || trabajador == "") {
        swal.fire("error, campos vacios");
        return;

    }

    try {
        const datos = new FormData(frmRegistrar);

        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=registrar_compras', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        json = await respuesta.json();
        if (json.status) {
            swal.fire("Registro exitoso", json.mensaje, 'success');
        } else {
            swal.fire("Registro fallido", json.mensaje, 'error');
        }
        console.log(json);
    } catch (e) {
        console.error("Oops, ocurrió un error: " + e);
    }
}

// listar proveedores en compras
async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url +
            'controller/Persona.php?tipo=listar_trabajadores');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });

            document.getElementById('trabajador').innerHTML =
                contenido_select;
        }
    } catch (e) {
        console.error("Error al cargar trabajador: " + e);

    }
}
// listar productos en compras
async function listar_productos() {
    try {
        let respuesta = await fetch(base_url +
            'controller/Producto.php?tipo=listar_producto');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });

            document.getElementById('producto').innerHTML =
                contenido_select;
        }
    } catch (e) {
        console.error("Error al cargar producto: " + e);

    }
}
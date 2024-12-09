

async function listar_compras() {
    try {
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=listar_compras');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            let tbody = document.querySelector("#tbl_compras");
            tbody.innerHTML = ''; // Limpiar la tabla antes de agregar nuevas filas
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + item.id;
                cont += 1;
                nueva_fila.innerHTML = `
                    <td>${cont}</td>
                    <td>${item.producto.nombre}</td>
                    <td>${item.cantidad}</td>
                    <td>${item.precio}</td>
                    <td>${item.fecha_compra}</td>
                    <td>${item.trabajador.razon_social}</td>
                    <td>${item.options}</td>
                `;
                tbody.appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Error al listar compras: " + error);
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
        console.log("Oops, ocurrió un error: " + e);
    }
}
async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listar_trabajadores');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });
            document.getElementById('trabajador').innerHTML = contenido_select;
        }
    } catch (e) {
        console.log("Error al cargar trabajadores: " + e);
    }
}

async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=listar_producto');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('producto').innerHTML = contenido_select;
        }
    } catch (e) {
        console.log("Error al cargar productos: " + e);
    }
}

async function ver_compras(id) {
    const formData = new FormData();
    formData.append('id_compra', id);

    try {
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=ver_compras', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        let json = await respuesta.json();
        if (json.status) {
            document.getElementById('id_compra').value = json.contenido.id;
            document.getElementById('producto').value = json.contenido.id_producto;
            document.getElementById('cantidad').value = json.contenido.cantidad;
            document.getElementById('precio').value = json.contenido.precio;
            document.getElementById('trabajador').value = json.contenido.id_trabajador;
        } else {
            window.location = base_url + "compras";
        }
        console.log(json);
    } catch (error) {
        console.log("Ops ocurrió un error: " + error);
    }
}


async function actualizar_compra() {
    const datos = new FormData(document.getElementById('frm_editar'));
    datos.append('id_compra', document.getElementById('id_compra').value); // Asegúrate de que el id_compra se envíe

    try {
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=actualizar_compra', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        if (json.status) {
            swal.fire("Actualización exitosa", json.mensaje, 'success');
        } else {
            swal.fire("Actualización fallida", json.mensaje, 'error');
        }
        console.log(json);
    } catch (e) {
        console.error("Oops, ocurrió un error: " + e);
    }
}


async function eliminar_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id);

    try {
        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=eliminar_compra', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        let json = await respuesta.json();
        if (json.status) {
            swal.fire("Eliminación exitosa", json.mensaje, 'success');
            document.querySelector(`#fila${id}`).remove();
        } else {
            swal.fire("Eliminación fallida", json.mensaje, 'error');
        }
        console.log(json);
    } catch (error) {
        console.error("Error al eliminar compra: " + error);
    }
}

// Resto de tus funciones...

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
                    <td>${item.estado == 1 ? 'Habilitado' : 'Deshabilitado'}</td> <!-- Mostrar el estado -->
                    <td>
                        <a href="${base_url}editar-compra/${item.id}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <button onclick="toggle_estado(${item.id}, ${item.estado == 1 ? 2 : 1});" class="btn btn-warning"><i class="fa fa-${item.estado == 1 ? 'ban' : 'check'}"></i></button>
                    </td>
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
            document.getElementById('estado').value = json.contenido.estado; // Cargar el estado
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
    datos.append('estado', document.getElementById('estado').value); // Enviar el estado

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


async function deshabilitar_compra(id) {
    swal.fire({
        title: '¿Está seguro de deshabilitar la compra?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, deshabilitar!',
        cancelButtonText: 'Cancelar',
        buttons: true,
        dangerMode: true
    }).then((result) => {
        if (result.isConfirmed) {
            fnt_deshabilitar_compra(id);
        }
    });

    async function fnt_deshabilitar_compra(id) {
        const formData = new FormData();
        formData.append('id_compra', id);

        try {
            let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=deshabilitar_compra', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: formData
            });
            let json = await respuesta.json();
            if (json.status) {
                swal.fire("Deshabilitación exitosa", json.mensaje, 'success');
                document.querySelector(`#fila${id} td:nth-child(7)`).textContent = 'Deshabilitado'; // Actualizar el estado en la tabla
            } else {
                swal.fire("Deshabilitación fallida", json.mensaje, 'error');
            }
            console.log(json);
        } catch (error) {
            console.error("Error al deshabilitar compra: " + error);
        }
    }
}
async function toggle_estado(id, nuevo_estado) {
    swal.fire({
        title: `¿Está seguro de ${nuevo_estado == 1 ? 'habilitar' : 'deshabilitar'} la compra?`,
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, continuar!',
        cancelButtonText: 'Cancelar',
        buttons: true,
        dangerMode: true
    }).then((result) => {
        if (result.isConfirmed) {
            fnt_toggle_estado(id, nuevo_estado);
        }
    });

    async function fnt_toggle_estado(id, nuevo_estado) {
        const formData = new FormData();
        formData.append('id_compra', id);
        formData.append('nuevo_estado', nuevo_estado);

        try {
            let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=toggle_estado', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: formData
            });
            let json = await respuesta.json();
            if (json.status) {
                swal.fire("Operación exitosa", json.mensaje, 'success');
                document.querySelector(`#fila${id} td:nth-child(7)`).textContent = nuevo_estado == 1 ? 'Habilitado' : 'Deshabilitado'; // Actualizar el estado en la tabla
                document.querySelector(`#fila${id} td:nth-child(8) button i`).className = `fa fa-${nuevo_estado == 1 ? 'ban' : 'check'}`; // Actualizar el ícono del botón
            } else {
                swal.fire("Operación fallida", json.mensaje, 'error');
            }
            console.log(json);
        } catch (error) {
            console.error("Error al cambiar el estado de la compra: " + error);
        }
    }
}


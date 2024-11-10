
async function registrar_compras() {
    let producto = document.querySelector('#producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha_compra = document.querySelector('#fecha_compra').value;
    let trabajador = document.querySelector('#trabajador').value;

    if (producto == "" || cantidad == "" || precio == "" ||
        fecha_compra == "" || trabajador == "") {
        alert("error, campos vacios")
        return;

    }

    try {
        const datos = new FormData(frmRegistrar);

        let respuesta = await fetch(base_url + 'controller/Compras.php?tipo=registrar', {
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
            'controller/Trabajador.php?tipo=listar');
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
            'controller/Producto.php?tipo=listar');
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
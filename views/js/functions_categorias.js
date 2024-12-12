async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + item.id;
                cont += 1;
                nueva_fila.innerHTML = `
                    <td>${cont}</td>
                    <td>${item.nombre}</td>
                    <td>${item.detalle}</td>
                    <td>${item.options}</td>
                `;
                document.querySelector("#tbl_categoria").appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.error("Error al listar categorías: " + error);
    }
}

if (document.querySelector('#tbl_categoria') != null) {
    listar_categorias();
}

async function registrar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;

    if (nombre == "" || detalle == "") {
        swal.fire("Error, campos vacíos");
        return;
    }

    try {
        const datos = new FormData(document.getElementById('frmRegistrar'));

        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=registrar_categoria', {
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

async function ver_categoria(id) {
    const formData = new FormData();
    formData.append('id_categoria', id);

    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=ver_categorias', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_categoria').value = json.contenido.id;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
        } else {
            window.location = base_url + "categorias";
        }
        console.log(json);
    } catch (error) {
        console.log("Ops ocurrió un error: " + error);
    }
}

async function actualizar_categoria() {
    const datos = new FormData(document.getElementById('frm_editar'));

    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=actualizar_categoria', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
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


async function eliminar_categoria(id) {
    swal.fire({
        title: '¿Está seguro de eliminar la categoría?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar',
        buttons: true,
        dangerMode: true
    }).then((result) => {
        if (result.isConfirmed) {
            fnt_eliminar_categoria(id);
        }
    });

    async function fnt_eliminar_categoria(id) {
        const formData = new FormData();
        formData.append('id_categoria', id);

        try {
            let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=eliminar_categoria', {
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
            console.error("Error al eliminar categoría: " + error);
        }
    }
}


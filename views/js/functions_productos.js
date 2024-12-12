
// Función para listar los productos
async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=listar_producto');
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
                        <td>${item.codigo}</td>
                        <td>${item.nombre}</td>
                        <td>${item.stock}</td>
                        <td>${item.categoria.nombre}</td>
                        <td>${item.proveedor.razon_social}</td>
                        <td>${item.options}</td>
                    </tr>
                `;
                document.querySelector("#tbl_product")
                    .appendChild(nueva_fila);

            });
        };
        console.log(json);
    } catch (error) {
        console.log("Error al listar productos" + error);
    }
}
if (document.querySelector('#tbl_product')) {
    listar_productos();
}

async function registrar_producto() {

    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let img = document.querySelector('#img').value;
    let proveedor = document.querySelector('#proveedor').value;

    if (codigo == "" || nombre == "" || detalle == "" ||
        precio == "" || stock == "" || categoria == "" ||
        img == "" || proveedor == "") {
        swal.fire("error, campos vacios");
        return;

    }
    try {
        // capturamos datos del formulario HTML
        const datos = new FormData(frmRegistrar);
        // envia datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        // convertimos la respuesta en formato JSON
        json = await respuesta.json();
        if (json.status) {
            swal.fire("Registro exitoso", json.mensaje, 'success');

        } else {
            swal.fire("Registro fallido", json.mensaje, 'error');
        }

        //console.log(json);
        console.log(json);


    } catch (e) {
        console.log("Oops, ocurrio un error" + e)
    }

}

// //  listar_categorias registrados en la base de datos

// async function listar_categorias() {
//     try {
//         // envia datos hacia el controlador
//         let respuesta = await fetch(base_url +
//             'controller/Categoria.php?tipo=listar');
//         json = await respuesta.json();
//         if (json.status) {
//             let datos = json.contenido;
//             datos.forEach(element => {
//                 $('#categoria').append($('<option />', {
//                     text: `${element.nombre}`,
//                     value: `${element.id}`
//                 })); 
//             });
//         }
//         console.log(respuesta);
//     } catch (e) {
//         console.e("Error al cargar categorias" + e)
//     }
// }


async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('categoria').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar categorias: " + e);
    }
}

async function listar_proveedores() {
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listar_proveedores');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });
            document.getElementById('proveedor').innerHTML = contenido_select;
        }
    } catch (e) {
        console.log("Error al cargar proveedores: " + e);
    }
}


async function ver_producto(id) {
    const formData = new FormData();
    formData.append('id_producto', id);

    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=ver_productos', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        let json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#categoria').value = json.contenido.id_categoria;
            document.querySelector('#proveedor').value = json.contenido.id_proveedor;
            document.querySelector('#img').value = json.contenido.img;
        } else {
            window.location = base_url + "productos";
        }
        console.log(json);
    } catch (error) {
        console.log("Ops ocurrio un error" + error);
    }
}


async function actualizar_producto() {
    const datos = new FormData(frmEditar);
    try {

        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        // convertimos la respuesta en formato JSON
        json = await respuesta.json();
        if (json.status) {
            swal.fire("Registro exitoso", json.mensaje, 'success');

        } else {
            swal.fire("Registro fallido", json.mensaje, 'error');
        }

        //console.log(json);
        console.log(json);


    } catch (e) {
        console.log("Oops, ocurrio un error" + e)
    }
}

async function eliminar_producto(id) {
    swal.fire({
        title: '¿Está seguro de eliminar el producto?',
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
            fnt_eliminar(id);
        }
    });

    async function fnt_eliminar(id) {
        const formdata = new FormData();
        formdata.append('id_producto', id);

        try {
            let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=eliminar_producto', {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: formdata
            });
            let json = await respuesta.json();
            if (json.status) {
                swal.fire("Eliminación exitosa", json.mensaje, 'success');
                document.querySelector('#fila' + id).remove();
            } else {
                swal.fire("Eliminación fallida", json.mensaje, 'error');
            }
            console.log(json);
        } catch (error) {
            console.log("Error al eliminar producto: " + error);
        }
    }
}




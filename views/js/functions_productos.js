
// Función para listar los productos
async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {

            let datos = json.contenido;
            let cont = 0;
            // Agregar filas a la tabla
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila" + item.id;
                cont+=1
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
        console.error("Error al listar productos" + error);
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
        alert("error, campos vacios")
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
        console.e("Oops, ocurrio un error" + e)
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
        // envia datos hacia el controlador

        let respuesta = await fetch(base_url +
            'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });

            document.getElementById('categoria').innerHTML =
                contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.e("Error al cargar categorias" + e)
    }
}

async function listar_proveedores() {
    try {
        let respuesta = await fetch(base_url +
            'controller/Persona.php?tipo=listar_proveedores');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });

            document.getElementById('proveedor').innerHTML =
                contenido_select;
        }
    } catch (e) {
        console.error("Error al cargar proveedores: " + e);

    }
}
// 
    async function registrar_producto() {

        let codigo = document.getElementById('codigo').value;
        let nombre = document.querySelector('#nombre').value;
        let detalle = document.querySelector('#detalle').value;
        let precio = document.querySelector('#precio').value;
        let stock = document.querySelector('#stock').value;
        let categoria = document.querySelector('#categoria').value;
        let imagen = document.querySelector('#imagen').value;
        let proveedor = document.querySelector('#proveedor').value;

        if (codigo == "" || nombre == "" || detalle == "" ||
            precio == "" || stock == "" || categoria == "" ||
            imagen == "" || proveedor == "") {
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

    async function listar_proveedores(){
        try {
            let respuesta = await fetch(base_url +
                'controller/Proveedor.php?tipo=listar');
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
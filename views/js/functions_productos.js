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
        console.log(respuesta);
    } catch (e) {
        console.log("Oops, ocurrio un error" + e)
    }

}
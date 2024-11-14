async function registrar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.querySelector('#detalle').value;
    const base_url = "/Ventas2024/"; // Asegúrate de usar el valor correcto para tu proyecto


    if (nombre == "" || detalle == "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        const datos = new FormData(document.getElementById('frmRegistrar'));

        let respuesta = await fetch(`${base_url}controller/Categoria.php?tipo=registrar`, {
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

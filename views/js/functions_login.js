async function iniciar_sesion() {
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#password');

    if (usuario == "" || password == "") {
        swal.fire("error, campos vacios");
        return;
    }
    try {
        // capturamos datos del formulario HTML
        const datos = new FormData(frmLogin);
        // envia datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/login.php?tipo=iniciar_sesion', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        // convertimos la respuesta en formato JSON
        json = await respuesta.json();
        if (json.status) {
            // swal.fire("iniciar_sesion", json.mensaje, 'success');
            location.replace(base_url + "principal")

        } else {
            swal.fire("iniciar_sesion", json.mensaje, 'error');
        }

        //console.log(json);
        console.log(json);


    } catch (e) {
        console.e("Oops, ocurrio un error" + e)
    }

}

if (document.querySelector('#frmLogin')) {
    // evita que se envie el formulario
    let frmLogin = document.querySelector('#frmLogin');
    frmLogin.onsubmit = function (e) {
        e.preventDefault();
        iniciar_sesion();
    }
}

async function cerrar_sesion() {
    try {
        let respuesta = await fetch(base_url + 'controller/login.php?tipo=cerrar_sesion', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
        });
        let json = await respuesta.json();
        if (json.status) {
            location.replace(base_url + "login");
        }
    } catch (e) {
        console.error("Oops, ocurrió un error: " + e);
    }
}



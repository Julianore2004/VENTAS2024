async function registrar_personas() {

    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codigo_postal = document.querySelector('#codigo_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#nro_identidad').value;
    const base_url = "/Ventas2024/"; 


    if (nro_identidad == "" || razon_social == "" || telefono == "" ||
        correo == "" || departamento == "" || provincia == "" ||
        distrito == "" || codigo_postal == ""|| razon_social == "" || direccion == "" ||
        rol == "" || password == "" ) {
        alert("error, campos vacios")
        return;
       
    }
    try {
        const datos = new FormData(document.getElementById("frmRegistrar"));
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
            method: 'POST',
            body: datos
        });
        const json = await respuesta.json();
        if (json.status) {
            swal.fire("Registro exitoso", json.mensaje, 'success');
        } else {
            swal.fire("Registro fallido", json.mensaje, 'error');
        }
    } catch (e) {
        console.error("Oops, ocurrió un error", e);
    }
}
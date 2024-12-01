
// Función para listar las Personas
async function listar_personas() {
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listar_persona');
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
                        <td>${item.nro_identidad}</td>
                        <td>${item.razon_social}</td>
                        <td>${item.telefono}</td>
                        <td>${item.correo}</td>
                        <td>${item.departamento}</td>
                        <td>${item.provincia}</td>
                        <td>${item.distrito}</td>
                        <td>${item.codigo_postal}</td>
                        <td>${item.direccion}</td>
                        <td>${item.rol}</td>
                        <td>${item.fecha_reg}</td>
                       <td>${item.options}</td>
                    </tr>
                `;
                document.querySelector("#tbl_personas")
                    .appendChild(nueva_fila);

            });
        };
        console.log(json);
    } catch (error) {
        console.error("Error al listar Personas" + error);
    }
}
if (document.querySelector('#tbl_personas')) {
    listar_personas();
}

async function registrar_personas() {

    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.getElementById('razon_social').value;
    let telefono = document.getElementById('telefono').value;
    let correo = document.getElementById('correo').value;
    let departamento = document.getElementById('departamento').value;
    let provincia = document.getElementById('provincia').value;
    let distrito = document.getElementById('distrito').value;
    let codigo_postal = document.getElementById('codigo_postal').value;
    let direccion = document.getElementById('direccion').value;
    let rol = document.getElementById('rol').value;


    if (nro_identidad == "" || razon_social == "" || telefono == "" ||
        correo == "" || departamento == "" || provincia == "" ||
        distrito == "" || codigo_postal == "" || razon_social == "" || direccion == "" ||
        rol == "" /* || password == "" */) {
            swal.fire("error, campos vacios");
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

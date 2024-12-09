
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
async function ver_persona(id) {
    const formData = new FormData();
    formData.append('id_persona', id);

    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=ver_persona', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#codigo_postal').value = json.contenido.codigo_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
        } else {
            window.location = base_url + "personas";
        }
        console.log(json);
    } catch (error) {
        console.log("Ops ocurrió un error: " + error);
    }
}

async function actualizar_persona() {
    const datos = new FormData(document.getElementById('frm_editar'));

    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=actualizar_persona', {
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

// Función para listar las categorias
async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
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
                        <td>${item.nombre}</td>
                        <td>${item.detalle}</td>
                        <td>${item.options}</td>
                    </tr>
                `;
                document.querySelector("#tbl_categoria")
                .appendChild(nueva_fila);
                
            });
        };
        console.log(json);
    } catch (error) {
        console.error("Error al listar categorias" + error);
    }
}
if (document.querySelector('#tbl_categoria') != null) {
    listar_categorias();
}
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

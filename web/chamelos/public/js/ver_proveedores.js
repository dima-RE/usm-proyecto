const tabla = document.querySelector("#table-proveedores");

const cargarTabla = async(proveedores)=>{
    let tbody = document.querySelector("#tbody-proveedores");
    tbody.innerHTML = "";

    // Recorrer proveedores
    for(let i=0; i < proveedores.length; i++){
        let tr = document.createElement("tr");

        let tdCodigo = document.createElement("td");
        tdCodigo.innerText = proveedores[i].id_proveedor;

        let tdNombre = document.createElement("td");
        tdNombre.innerText = proveedores[i].nom_proveedor;
        
        let tdEmpresa = document.createElement("td");
        tdEmpresa.innerText = proveedores[i].id_empresa;

        let tdFono = document.createElement("td");
        tdFono.innerText = proveedores[i].fono_proveedor; 
        
        let tdAccion = document.createElement("td");
        // Agregar boton "Suspender" o "Habilitar"
        if(proveedores[i].estado == 1){
            tdAccion.innerText = "Vigente";
        }else{
            tdAccion.innerText = "Suspendido";
        }
        
        tr.appendChild(tdCodigo);
        tr.appendChild(tdNombre);
        tr.appendChild(tdEmpresa);
        tr.appendChild(tdFono);
        tr.appendChild(tdAccion);
        
        tbody.appendChild(tr);
    };
};

document.addEventListener("DOMContentLoaded", async()=>{
    let proveedores = await getProveedores();
    cargarTabla(proveedores); 
});
const cargarTabla = async(empresas)=>{
    let tbody = document.querySelector("#tbody-empresas");
    tbody.innerHTML = "";

    // Recorrer empresas
    for(let i=0; i < empresas.length; i++){
        let tr = document.createElement("tr");

        let tdRut = document.createElement("td");
        tdRut.innerText = empresas[i].id_empresa;

        let tdNombre = document.createElement("td");
        tdNombre.innerText = empresas[i].nom_empresa;

        let tdDir = document.createElement("td");
        tdDir.innerText = empresas[i].dir_empresa;

        let tdFono = document.createElement("td");
        tdFono.innerText = empresas[i].fono_empresa; 

        let tdEmail = document.createElement("td");
        tdEmail.innerText = empresas[i].email_empresa;

        let tdAccion = document.createElement("td");
        // Agregar boton "Suspender" o "Habilitar"
        if(empresas[i].estado == 1){
            tdAccion.innerText = "Vigente";
        }else{
            tdAccion.innerText = "Suspendido";
        }
        
        tr.appendChild(tdRut);
        tr.appendChild(tdNombre);
        tr.appendChild(tdDir);
        tr.appendChild(tdFono);
        tr.appendChild(tdEmail);
        tr.appendChild(tdAccion);
        
        tbody.appendChild(tr);
    };
};

document.addEventListener("DOMContentLoaded", async()=>{
    let empresas = await getEmpresas();
    cargarTabla(empresas);
    
    new Tablesort(document.getElementById('table-empresas'));
});
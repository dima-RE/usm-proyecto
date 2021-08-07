
const cargarTabla = async(empresas)=>{
    let tbody = document.querySelector("#tbody-empresas");
    tbody.innerHTML = "";

    // Recorrer empresas
    for(let i=0; i < empresas.length; i++){
        let tr = document.createElement("tr");

        let tdRut = document.createElement("td");
        tdRut.innerText = empresas[i].rut;

        let tdNombre = document.createElement("td");
        tdNombre.innerText = empresas[i].nombre;

        let tdDir = document.createElement("td");
        tdDir.innerText = empresas[i].direccion;

        let tdFono = document.createElement("td");
        tdFono.innerText = empresas[i].fono; 

        let tdEmail = document.createElement("td");
        tdEmail.innerText = empresas[i].email;

        let tdAccion = document.createElement("td");
        tdAccion.innerText = empresas[i].estado;
        
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
});
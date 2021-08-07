document.querySelector("#btn-agregar").addEventListener("click", async()=>{
    let rut = document.querySelector("#txt-codigo").value;
    let nombre = document.querySelector("#txt-nombre").value;
    let direccion = document.querySelector("#txt-direccion").value;
    let fono = document.querySelector("#txt-fono").value;
    let email = document.querySelector("#txt-email").value;

    let empresa = {};
    empresa.rut = rut;
    empresa.nombre = nombre;
    empresa.direccion = direccion;
    empresa.fono = fono;
    empresa.email = email;
    empresa.estado = 1;

    let res = await postEmpresa(empresa);
});
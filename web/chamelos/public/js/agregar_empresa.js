document.querySelector("#btn-agregar").addEventListener("click", async()=>{
    let rut = document.querySelector("#txt-codigo").value.trim();
    let nombre = document.querySelector("#txt-nombre").value.trim();
    let direccion = document.querySelector("#txt-direccion").value.trim();
    let fono = document.querySelector("#txt-fono").value.trim();
    let email = document.querySelector("#txt-email").value.trim();

    let empresa = {};
    empresa.rut = rut;
    empresa.nombre = nombre;
    empresa.direccion = direccion;
    empresa.fono = fono;
    empresa.email = email;
    empresa.estado = 1;

    let res = await postEmpresa(empresa);
});
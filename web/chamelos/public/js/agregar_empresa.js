document.querySelector("#btn-agregar").addEventListener("click", async()=>{
    let rut = document.querySelector("#txt-codigo").value.trim();
    let nombre = document.querySelector("#txt-nombre").value.trim();
    let direccion = document.querySelector("#txt-direccion").value.trim();
    let fono = document.querySelector("#txt-fono").value.trim();
    let email = document.querySelector("#txt-email").value.trim();

    let errores = [];
    if(rut == ""){
        errores.push("Debe ingresar un rut.");
    }else{
        let ides = await getEmpresas();
        let finded = ides.find(e=>e.id_empresa === rut);
        if(finded != undefined){
            errores.push("La empresa ya existe.");
        };
    };
    if(nombre == ""){
        errores.push("Debe ingresar un nombre.");
    };
    if(direccion == ""){
        errores.push("Debe ingresar una dirección.");
    };
    if(isNaN(fono)){
        errores.push("El fono debe ser numérico.");
    }else if(fono.toString().length != 12){
        errores.push("El fono debe tener 9 dígitos más el prefijo.");
    };
    if(email == ""){
        errores.push("Debe ingresar un correo.")
    };

    if(errores.length == 0){
        let empresa = {};
        empresa.rut = rut;
        empresa.nombre = nombre;
        empresa.direccion = direccion;
        empresa.fono = fono;
        empresa.email = email;

        let res = await postEmpresa(empresa);
        await Swal.fire("Registro exitoso","La empresa ha sido registrada exitosamente","success");
    }else{
        Swal.fire({
            title: 'Errores de validación',
            html: errores.join("<br />"),
            icon: 'warning'
          });
    };
});
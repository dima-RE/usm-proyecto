const cargarEmpresas = async()=>{
    let empresas = await getEmpresas();
    empSelect = document.querySelector("#select-empresa");
    empresas.forEach(e=>{
        let option = document.createElement("option");
        option.innerText = e.nom_empresa;
        empSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarEmpresas();
});

document.querySelector("#btn-agregar").addEventListener("click", async()=>{
    let codigo = document.querySelector("#txt-codigo").value.trim();
    let nombre = document.querySelector("#txt-nombre").value.trim();
    let empresa = document.querySelector("#select-empresa").value;
    let fono = document.querySelector("#txt-fono").value.trim();
    // Windows esta con problemas, no me dejo cambiar el idioma del teclado y quedo en ingles por el momento.
    let errores = [];
    if(codigo == ""){
        errores.push("Debe ingresar el codigo.");
    }else{
        let codes = await getProveedores();
        let finded = codes.finded(p=>p.id_proveedor.toUpperCase() === codigo.toUpperCase());
        if(finded != undefined){
            errores.push("El vendedor ya existe.");
        };
    };
    if(nombre == ""){
        errores.push("Debe ingresar un nombre.");
    };
    if(isNaN(fono)){
        errores.push("El fono debe ser numérico.");
    }else if(fono.toString().length != 12){
        errores.push("El fono debe tener 9 dígitos más el prefijo.");
    };

    if(errores.length == 0){
        let proveedor = {};
        proveedor.codigo = codigo;
        proveedor.nombre = nombre;
        proveedor.empresa = empresa;
        proveedor.fono = fono;
        proveedor.estado = 1;

        let res = await postProveedor(proveedor);
        await Swal.fire("Registro exitoso","El proveedor ha sido registrado satisfactoriamente","success");
    }else{
        Swal.fire({
            title: 'Errores de validacion',
            html: errores.join("<br />"),
            icon: 'warning'
        });
    };
});
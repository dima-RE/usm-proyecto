const cargarCategorias = async()=>{
    let categorias = await getCategorias();
    catSelect = document.querySelector("#select-categoria");
    categorias.forEach(c=>{
        let option = document.createElement("option");
        option.innerText = c;
        catSelect.appendChild(option);
    });
};

const cargarProveedores = async()=>{
    let proveedores = await getProveedores();
    provSelect = document.querySelector("#select-proveedor");
    proveedores.forEach(p=>{
        let option = document.createElement("option");
        let valor = document.createAttribute("value");
        valor.value = p.id_proveedor;
        option.innerText = p.nom_proveedor;
        option.setAttributeNode(valor);
        provSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarCategorias();
    cargarProveedores();
});

document.querySelector("#btn-agregar").addEventListener("click", async()=>{
    let codigo = document.querySelector("#txt-codigo").value.trim();
    let nombre = document.querySelector("#txt-nombre").value.trim();
    let categoria = document.querySelector("#select-categoria").value;
    let proveedor = document.querySelector("#select-proveedor").value;
    let precio = document.querySelector("#txt-precio").value.trim();
    let critico = document.querySelector("#txt-critico").value.trim();
    let stock = document.querySelector("#txt-stock").value.trim();
    // Windows esta con problemas, no me dejo cambiar el idioma del teclado y quedo en ingles por el momento.
    let errores = [];
    if(isNaN(codigo)){
        errores.push("Debe ingresar el codigo numerico del producto.");
    }else{
        let codes = await getProductos();
        let finded = codes.find(p=>p.id_producto === codigo);
        if(finded != undefined){
            errores.push("El producto ya esta registrado.");
        };
    };
    if(nombre == ""){
        errores.push("Debe ingresar un nombre.");
    };
    if(isNaN(precio)){
        errores.push("Debe ingresar un precio.");
    }else if(precio < 0){
        errores.push("El precio no puede ser un valor negativo.")
    };
    if(isNaN(critico)){
        errores.push("El stock critico debe ser un valor numerico.")
    }else if(critico < 0){
        errores.push("El valor del stock critico no puede ser un numero negativo.")
    };
    if(isNaN(stock)){
        errores.push("El stock debe ser un valor numerico.")
    }else if(stock < 0){
        errores.push("El valor del stock no puede ser un numero negativo.")
    };

    if(errores.length == 0){
        let producto = {};
        producto.codigo = codigo;
        producto.nombre = nombre;
        producto.categoria = categoria;
        producto.proveedor = proveedor;
        producto.precio = precio;
        producto.critico = critico;
        producto.stock = stock;
        
        let res = await postProducto(producto);
        await Swal.fire("Registro exitoso","El producto ha sido registrado satisfactoriamente","success");
    }else{
        Swal.fire({
            title: 'Errores de validacion',
            html: errores.join("<br />"),
            icon: 'warning'
        });
    };
});
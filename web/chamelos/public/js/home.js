const cargarProducto = async(codigo)=>{
    let productos = await getProductos();
    prodSelect = document.querySelector("#txt-nombre");
    let producto = productos.find(p=>p.cod_producto == codigo);
    return producto;
};
document.addEventListener("DOMContentLoaded", ()=>{
    document.querySelector("#txt-nombre").value = "";
})

document.querySelector("#btn-buscar").addEventListener("click", async()=>{
    let codigo = document.querySelector("#txt-codigo").value.trim();
    // buscar el producto en la BD
    const producto = await cargarProducto(codigo);

    if(producto == undefined){
        Swal.fire("Error","El producto no existe.","warning");
    }else{
        document.querySelector("#txt-nombre").value = producto.nom_producto;
    }
})

document.querySelector("#btn-agregar").addEventListener("click", async()=>{
    let cantidad = document.querySelector("#txt-cantidad");
    // Windows esta con problemas, no me dejo cambiar el idioma del teclado y quedo en ingles por el momento.
    if(isNaN(cantidad)){
        Swal.fire("Error","La cantidad debe ser un valor numerico.","warning");
    }else if(cantidad < 0){
        Swal.fire("Error","La cantidad no puede ser un numero negativo.","warning");
    };

    console.log(producto);
/*
    let venta = {};
    venta.codigo = codigo;
    venta.cantidad = cantidad;
    venta.total = total;
        
    let res = await postVenta(venta);
    await Swal.fire("Registro exitoso","La venta ha sido registrada satisfactoriamente","success");*/
});
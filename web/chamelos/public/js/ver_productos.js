const cargarTabla = async(productos)=>{
    let tbody = document.querySelector("#tbody-productos");
    tbody.innerHTML = "";

    // Recorrer productos
    for(let i=0; i < productos.length; i++){
        let tr = document.createElement("tr");

        let tdCodigo = document.createElement("td");
        tdCodigo.innerText = productos[i].cod_producto;

        let tdNombre = document.createElement("td");
        tdNombre.innerText = productos[i].nom_producto;

        let tdCategoria = document.createElement("td");
        tdCategoria.innerText = productos[i].categoria;
        
        let tdProveedor = document.createElement("td");
        let proveedores = await getProveedores();
        let finded = proveedores.find(p=>p.id_proveedor.toUpperCase() === proveedores[i].id_proveedor.toUpperCase());
        tdProveedor.innerText = finded.nom_proveedor;

        let tdPrecio = document.createElement("td");
        tdPrecio.innerText = productos[i].precio;
        
        let tdStock = document.createElement("td");
        tdStock.innerText = productos[i].stock;
        if(productos[i].stock <= productos[i].stock_critico){
            tdStock.classList.add("text-danger");
        }else{
            tdStock.classList.add("text-info");
        }
        
        let tdAccion = document.createElement("td");
        // Agregar boton "Suspender" o "Habilitar"
        if(proveedores[i].estado == 1){
            tdAccion.innerText = "Vigente";
        }else{
            tdAccion.innerText = "Suspendido";
        }
        
        tr.appendChild(tdCodigo);
        tr.appendChild(tdNombre);
        tr.appendChild(tdCategoria);
        tr.appendChild(tdProveedor);
        tr.appendChild(tdPrecio);
        tr.appendChild(tdStock);
        tr.appendChild(tdAccion);
        
        tbody.appendChild(tr);
    };
};

document.addEventListener("DOMContentLoaded", async()=>{
    let productos = await getProductos();
    cargarTabla(productos);
    new Tablesort(document.getElementById('table-productos'));
});
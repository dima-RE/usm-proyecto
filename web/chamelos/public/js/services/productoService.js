const getProductos = async()=>{
    let resp = await axios.get("api/productos/get");
    return resp.data;
};

const getCategorias = async()=>{
    let resp = await axios.get("api/categorias/get");
    return resp.data;
};

const postProducto = async(producto)=>{
    let resp = await axios.post("api/productos/post", producto, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};
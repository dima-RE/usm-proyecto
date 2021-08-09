const getProveedores = async()=>{
    let resp = await axios.get("api/proveedores/get");
    return resp.data;
};

const postProveedor = async(proveedor)=>{
    let resp = await axios.post("api/proveedores/post", proveedor, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};
const getEmpresas = async()=>{
    let resp = await axios.get("api/empresas/get");
    return resp.data;
};

const postEmpresa = async(empresa)=>{
    let resp = await axios.post("api/empresas/post", empresa, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};
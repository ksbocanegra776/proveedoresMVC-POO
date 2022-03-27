<div class="col-12 mt-2">

    <form action="?c=ProveedorController&a=searchProve" method="POST" class="formSearch">
        <div class="col-5">
            <select name="selecTablaBD" id="" style="height: 29px;margin-left: 8%">
                <option value="D-N/A">Seleccionar</option>
                <option value="R-Soc">Razón Social</option>
                <option value="C-Pro">Código Proveedor</option>
                <option value="N-Doc">Documento</option>
                <option value="N-Ema">Email</option>
            </select>
        </div>
        <div class="col-7">
            <input type="text" name="buscador" placeholder="Busqueda" style="margin-left: -5px;width:200px" required>
            <input type="submit" name="buscarDato" value="Buscar" class="search col-3" style="margin-top: -30px;margin-left: 195px;">
        </div>
    </form> 

</div>

<!--Modal agregar libro-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar libro</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="insert.php" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Título:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="titulo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Autor:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="autor">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Editorial:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="editorial">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Gender:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Resumen:</label>
                            </div>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="resumen" rows="3"></textarea>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Existencia:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" name="existencia">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Estatus:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="estatus">
                                    <option value="Colima">Colima</option>
                                    <option value="Villa de Alvárez">Villa de Alvárez</option>
                                    <option value="Coquimatlán">Coquimatlán</option>
                                    <option value="Técoman">Técoman</option>
                                    <option value="Manzanillo">Manzanillo</option>
                                    <option value="Minatitlán">Minatitlán</option>
                                    <option value="Ixtlahuacán">Ixtlahuacán</option>
                                    <option value="Cuahutemóc">Cuahutemóc</option>
                                    <option value="Armería">Armería</option>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Campus:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="campus">
                                    <option>Coquimatlán</option>
                                    <option>Colima</option>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Fecha/registro:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="date" class="form-control" name="fecha">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Profile Image:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" class="filestyle" name="foto" id="foto" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-floppy-disk"></span> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

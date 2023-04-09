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
                                <label class="control-label" style="position:relative; top:7px;">Resumen:</label>
                            </div>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="resumen" rows="3"></textarea>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Categoria:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="genero">
                                    <option value="Seleccione">Seleccione...</option>
                                    <?php while ($row_categoria = $sqlCategoria->fetch_assoc()) { ?>
                                    <option value="<?php echo $row_categoria["idgenero"]; ?>"><?= $row_categoria["genero"] ?></option>
                                    <?php } ?>
                                </select>
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
                                    <option value="Seleccione">Seleccione...</option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="No Disponible">No disponible</option>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Campús:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="campus">
                                    <option value="Seleccione">Seleccione...</option>
                                    <?php while ($row_campus = $sqlCampus->fetch_assoc()) { ?>
                                    <option value="<?php echo $row_campus["idcampus"]; ?>"><?= $row_campus["campus"] ?></option>
                                    <?php } ?>
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

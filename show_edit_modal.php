<!-- Edit Model -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
            </div>
            <div class="modal-body">
                <?php
                $edit=$mysqli->query("select * from libros where id=".$row['id']);
                $erow=$edit->fetch_assoc();
                $sqlCategoria = $mysqli->query("select * from genero");
                $row_categoria = $sqlCategoria->fetch_assoc();
                ?>
                <div class="container-fluid">
                    <form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Título:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="titulo" class="form-control" value="<?php echo $erow['titulo']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Autor:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="autor" class="form-control" value="<?php echo $erow['autor']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Editorial:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="editorial" class="form-control" value="<?php echo $erow['editorial']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Resumen:</label>
                            </div>
                            <div class="col-lg-8">
                                <textarea name="resumen" class="form-control" rows="3"><?php echo $erow['resumen']; ?></textarea>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Categoria:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="genero">
                                    <?php while ($row_categoria = $sqlCategoria->fetch_assoc()) { ?>
                                    <option><?php echo $row["genero"]; ?></option>
                                    <option value="<?php echo $row_categoria["idgenero"]; ?>"><?= $row_categoria["genero"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Existencia:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" name="existencia" value="<?php echo $erow['existencia']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Estatus:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <select name="estatus">
                                    <?php if ($erow['estatus']=="Disponible") {?>
                                        <option selected>Disponible</option>
                                        <option>No disponible</option>
                                    <?php }else{ ?>
                                        <option selected>No disponible</option>
                                        <option>Disponible</option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Categoria:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <select name="campus">
                                    <?php if ($row['campus']=="Seleccione") {?>
                                        <option selected><?php echo $row['campus'];?></option>
                                    <?php }else{ ?>
                                        <option selected><?php echo $row['campus'];?></option>

                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Fecha/registro:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="date" class="form-control" name="fecha" value="<?php echo $erow['fecha']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Profile Image:</label>
                            </div>
                            <div class="col-lg-8">
                            <img src="profile_images/<?php echo $row['id'] . '.jpg?n=' . time(); ?> " width="70">
                                <input type="file" class="filestyle" name="foto" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> Cancel
                            </button>
                            <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
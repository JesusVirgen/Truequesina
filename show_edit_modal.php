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
                $edit=$mysqli->query("select * from employee_basics where id=".$row['id']);
                $erow=$edit->fetch_assoc();
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
                                <textarea name="resumen" class="form-control" rows="3" value="<?php echo $erow['resumen']; ?>"></textarea>
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
                                        <option>Disponible</option>
                                        <option selected>No disponible</option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Campús:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <select name="campus">
                                    <?php if ($erow['campus']=="Colima") {?>
                                        <option value="Colima" selected>Colima</option>
                                        <option value="Villa de Alvárez">Villa de Alvárez</option>
                                        <option value="Coquimatlán">Coquimatlán</option>
                                        <option value="Técoman">Técoman</option>
                                        <option value="Manzanillo">Manzanillo</option>
                                        <option value="Minatitlán">Minatitlán</option>
                                        <option value="Ixtlahuacán">Ixtlahuacán</option>
                                        <option value="Cuahutemóc">Cuahutemóc</option>
                                        <option value="Armería">Armería</option>
                                    <?php }else{ ?>
                                        <option value="Colima">Colima</option>
                                        <option value="Villa de Alvárez" selected>Villa de Alvárez</option>
                                        <option value="Coquimatlán">Coquimatlán</option>
                                        <option value="Técoman">Técoman</option>
                                        <option value="Manzanillo">Manzanillo</option>
                                        <option value="Minatitlán">Minatitlán</option>
                                        <option value="Ixtlahuacán">Ixtlahuacán</option>
                                        <option value="Cuahutemóc">Cuahutemóc</option>
                                        <option value="Armería">Armería</option>
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
                                <input type="file" class="filestyle" name="pimage" />
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
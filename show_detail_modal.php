<!-- Detail Model -->
<div class="modal fade in" id="detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3> Profile Details </h3>
            </div>
            <div class="modal-body">
                <?php
                $edit = $mysqli->query("select * from employee_basics where id=" . $row['id']);
                $erow = $edit->fetch_assoc();
                ?>
                <div class="row">
                    <div class="col-lg-10" align="right">
                        <button style="button; position:relative; left:40px; top:1px;" class="btn btn-primary" data-toggle="modal" data-target="#bus">Buscar lector</button>
                    </div>
                </div>
                <script>
                    $("#bus").draggable({
                        handle: ".modal-header"
                    }); 
                </script>
                <div class="modal fade" id="bus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <center><h4 class="modal-title" id="myModalLabel">Agregar libro</h4></center>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form method="post" action="#" class="form-horizontal" enctype="multipart/form-data" >
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="control-label" style="position:relative; top:7px;">Título:</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="titulo">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <form method="POST" action="update.php?id=<?php echo $erow['id']; ?>"enctype="multipart/form-data">
                        <div style="margin:20px auto">
                            <div class="container">
                                <div style="text-align:center;color:green">
                                <div style="height:50px;"></div>
                                    <table class="table table-striped table-bordered table-hover" id="empTable">
                                        <thead class="table-dark">
                                            <th><center>No.<center></th>
                                            <th><center>Portada</center></th>
                                            <th><center>Título</center></th>
                                            <th><center>Autor</center></th>
                                            <th><center>Editorial</center></th>
                                            <th><center>Resumen</center></th>
                                            <th><center>Campús</center></th>
                                            <th><center>Salida</center></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $contador; ?></td>
                                                <td><?php $img = "profile_images/" . $row['id'] . ".jpg";?>
                                                <img src='<?php echo $img ?>' height="70px" width="70px" /></td>
                                                <td><?php echo $erow['titulo']; ?></td>
                                                <td><?php echo $erow['autor']; ?></td>
                                                <td><?php echo $erow['editorial']; ?></td>
                                                <td><?php echo $erow['resumen']; ?></td>
                                                <td><?php echo $erow['campus']; ?></td>
                                                <td><input type="checkbox"></td>
                                            </tr>                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8" align="left">
                                <label style="position:relative;  left:60px; top:1px;">Datos de libro entrada</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8" align="left">
                                <label style="position:relative;  left:60px; top:1px;">Buscar por</label>
                            </div>
                        </div>
                        <div style="margin:20px auto">
                            <div class="container">
                                <div style="text-align:center;color:green">
                                <div style="height:50px;"></div>
                                    <table class="table table-striped table-bordered table-hover" id="empTable">
                                        <thead class="table-dark">
                                            <th><center>No.<center></th>
                                            <th><center>Portada</center></th>
                                            <th><center>Título</center></th>
                                            <th><center>Autor</center></th>
                                            <th><center>Editorial</center></th>
                                            <th><center>Resumen</center></th>
                                            <th><center>Campús</center></th>
                                            <th><center>Entrada</center></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $contador; ?></td>
                                                <td><?php $img = "profile_images/" . $row['id'] . ".jpg";?>
                                                <img src='<?php echo $img ?>' height="70px" width="70px" /></td>
                                                <td><?php echo $erow['titulo']; ?></td>
                                                <td><?php echo $erow['autor']; ?></td>
                                                <td><?php echo $erow['editorial']; ?></td>
                                                <td><?php echo $erow['resumen']; ?></td>
                                                <td><?php echo $erow['campus']; ?></td>
                                                <td><input type="checkbox"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
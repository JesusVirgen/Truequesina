<!DOCTYPE html>
<html lang="es">
  <head>
	<!-- meta tags requeridos -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="author" content="Universidad de Colima"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="Universidad de Colima"/>
	<meta property="og:image" content="http://wayf.ucol.mx/ucol_mini.png"/>
	<meta property="og:locale:alternate" content="es_ES" />
	<meta property="og:site_name" content="Universidad de Colima" />

	<!-- Titulo principal -->
	<title>Universidad de Colima</title>
	<!-- link requeridos -->
	<link href="http://wayf.ucol.mx/ucol_mini.png" rel="image_src" />
	<link href="//www.ucol.mx/cms/img/favicon.ico" type="image/x-icon" rel="icon" />
	<!-- jQuery -->
	<script src="//www.ucol.mx/cms/beta/js/jquery.min.js"></script>
	<!-- Bootstrap y header & footer agregados -->
	<link href="//www.ucol.mx/cms/headerfooterapp2.css?v=3" rel="stylesheet">
	<link href="//www.ucol.mx/cms/beta/css/carrusel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
	<script>
    $(document).ready(function(){
    $('#empTable').dataTable();
    $('.file-upload').file_upload();
    });
	</script>
    <style>
		.breadcrumb li {
			font-size: 14px !important;
		}
		.page-breadcrumb a.btn-danger {
			padding: 0 15px;
			color: #fff !important;
		}
	</style>
  </head>
<body>
	<div id="estructura">
	<!-- Fixed navbar -->
		<nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
						<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;</button>			        
						<div class="collapse navbar-toggleable-sm" id="navbar-header">
			            	<a class="navbar-brand" id="logo" href="//www.ucol.mx/">Universidad de Colima</a>
			            	<span class="home-href"><a href="./"></a></span>
			        	</div>
					</div>
				</div>
			</div>
    	</nav> <!-- /navbar -->
	</div>
	<section class="page-breadcrumb">
		<div class="container ">
			<div id="path">
				<ol class="breadcrumb">
					<li><a href="/">Inicio</a></li>
					<li></li>
					<br>
					<br>
					<li>Está en: Registrar Libros</li>
				</ol>
			</div>
			<div id="sesion">
				<ol class="breadcrumb">
					<li class="user-name"></li>
					<li><a href="#">Salir</a></li>
				</ol>
			</div>
		</div> <!--cierra path-->
	</section>
	<section class="page-header">
		<div class="container">
			<h1 class="title-ucol">Libros</h1>
		</div><!--/ Cierra .container /-->
    </section>
	<div class="col-xl-2 col-lg-4 col-md-4 col-xs-12 sidebar">
		<div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
			<div class="sidebar">
				<h5 class="sidebar-top">Responsable</h5>
				<div id="navcontainer">
					<ul id="navlist">
						<li><a href="#"> Libros</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<span class="pull-left">
		<button style="button; position:relative; left:1000px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnew">
			Agregar Libro
		</button>
	</span>
    <div style="margin:10px auto">
        <div class="container">
            <div style="text-align:center;color:green">
            <div style="height:50px;"></div>
                <table class="table table-striped table-bordered table-hover" id="empTable">
                    <thead class="table-dark">
                        <th><center>No.</center></th>
                        <th><center>Portada</center></th>
                        <th><center>Título</center></th>
                        <th><center>Autor</center></th>
                        <th><center>Editorial</center></th>
                        <th><center>Resumen</center></th>
						<th><center>Categorias</center></th>
                        <th><center>Existencia</center></th>
                        <th><center>Estatus</center></th>
                        <th><center>Campús</center></th>
                        <th><center>Fecha</center></th>
                        <th><center>Acción</center></th>
                    </thead>

                    <tbody>
						<?php
						include_once "database.php";
						$contador = 0;
						$result = $mysqli->query("select * from libros inner join genero on id_categoria=idgenero inner join campus on id_campus=idcampus");

						while ($row = $result->fetch_assoc()) {
    						$contador++;
    					?>
                        	<tr>
                            	<td><?=$contador;?></td>
                            	<td><img src="profile_images/<?php echo $row['id'] . '.jpg?n=' . time(); ?> " width="70"></td>
                            	<td><?php echo $row['titulo']; ?></td>
                            	<td><?php echo $row['autor']; ?></td>
                            	<td><?php echo $row['editorial']; ?></td>
                            	<td><?php echo $row['resumen']; ?></td>
								<td><?php echo $row['genero']; ?></td>
                            	<td><?php echo $row['existencia']; ?></td>
                            	<td><?php echo $row['estatus']; ?></td>
                            	<td><?php echo $row['campus']; ?></td>
                            	<td><?php echo $row['fecha']; ?></td>
                            	<td>
                                	<a href="#detail<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm">
                                	<span class="glyphicon glyphicon-floppy-open"></span>Intercambiar</a>&nbsp;
                                	<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
                                	<span class="glyphicon glyphicon-edit"></span> Edit</a>&nbsp
                                	<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">
                                	<span class="glyphicon glyphicon-trash">
                                	</span> Delete</a>
                                	<!-- include edit modal -->
                                	<?php include 'show_detail_modal.php';?>
                                	<!-- End -->
                                	<!-- include edit modal -->
                                	<?php include 'show_edit_modal.php';?>
                                	<!-- End -->
                                	<!-- include delete modal -->
                                	<?php include 'show_delete_modal.php';?>
                                	<!-- End -->
                            	</td>
                        	</tr>
                        <?php }?>
                    </tbody>
                </table>
				<?php
				$sqlCategoria = $mysqli->query("select * from genero");
				$sqlCampus = $mysqli->query("select * from campus");
				?>
            </div>
            <!-- include insert modal -->
            <?php include 'show_add_modal.php';?>
            <!-- End -->
        </div>
    </div>
    <footer class="bd-footer text-muted" role="contentinfo" class="fixed-buttom">
	    <div class="container">
		    <div class="row">
			    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
				    <img src="//www.ucol.mx/cms/beta/img/icon/ubicacion.svg" width="20"> Direcci&oacute;n: Av. Universidad No. 333, Las V&iacute;boras; CP 28040 Colima, Colima, M&eacute;xico
			    </div>
			    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
				    &copy; Derechos Reservados 2022-2025 Universidad de Colima
			    </div>
		    </div>
	    </div>
	</footer>

    <!-- JS Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="//www.ucol.mx/cms/beta/dist/js/tether.min.js" type="text/javascript"></script>
	<script src="//www.ucol.mx/cms/beta/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/dist/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <!-- JS adds -->
    <script src="//www.ucol.mx/cms/beta/js/jquery.slides.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/js/carruselV3.2.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/js/jquery.flexisel0815.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/beta/js/purl.js"></script>
    <script src="//www.ucol.mx/cms/beta/js/custom.min.js" type="text/javascript"></script>
    <script src="//www.ucol.mx/cms/js/custom.js" type="text/javascript"></script>
</body>
</html>
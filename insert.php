<?php
    include 'database.php';
 
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $editorial=$_POST['editorial'];
    $resumen=$_POST['resumen'];
    $categorias=$_POST['genero'];
    $existencia=$_POST['existencia'];
    $estatus=$_POST['estatus'];
    $campus=$_POST['campus'];
    $fecha=$_POST['fecha'];
    $mysqli->query("insert into libros (titulo, autor, editorial, resumen, id_categoria, existencia, estatus, id_campus, fecha) values ('$titulo', '$autor', '$editorial', '$resumen', '$categorias', '$existencia', '$estatus', '$campus', '$fecha')"
    );
    $id = $mysqli->insert_id;

    if($_FILES['foto']['error'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg");
        if(in_array($_FILES['foto']['type'], $permitidos)){

            $dir = "profile_images";

            $info_img = pathinfo($_FILES['foto']['name']);
            $info_img['extension'];

            $portada = $dir . '/' . $id . '.jpg';

            if(!file_exists($dir)) {
                mkdir($dir, 0777);
            }

            if(!move_uploaded_file($_FILES['foto']['tmp_name'], $portada)){
            }
        } else {

        }
    }

    header('location:index.php');
?>
<?php
include 'database.php';
$id = $_GET['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$resumen = $_POST['resumen'];
$categorias=$_POST['genero'];
$existencia = $_POST['existencia'];
$estatus = $_POST['estatus'];
$campus = $_POST['campus'];
$fecha = $_POST['fecha'];

$mysqli->query("update libros set titulo='$titulo', autor='$autor', editorial='$editorial', resumen='$resumen', id_categoria=$categorias, existencia='$existencia', estatus='$estatus', id_campus=$campus, fecha='$fecha' where id=$id");

// Set a constant
define("FILEREPOSITORY", "profile_images");

// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
// Was the file a JPEG?
    if ($_FILES['foto']['type'] != "image/jpeg") {
        echo "<p>Profile image must be uploaded in JPEG format.</p>";
    } else {

//$name = $_FILES['classnotes']['name'];
        $filename = $id . ".jpg";

        unlink(FILEREPOSITORY . $filename);
        $result = move_uploaded_file($_FILES['foto']['tmp_name'], FILEREPOSITORY . $filename);
//$result = move_uploaded_file($_FILES['pimg']['tmp_name'], "http://localhost/php_crud/profile_images/28.jpg");
        if ($result == 1) {
            echo "<p>File successfully uploaded.</p>";
        } else {
            echo "<p>There was a problem uploading the file.</p>";
        }

    }
}

header('location:index.php');

<?php
include 'database.php';
$id = $_GET['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$gender = $_POST['gender'];
$resumen = $_POST['resumen'];
$existencia = $_POST['existencia'];
$estatus = $_POST['estatus'];
$campus = $_POST['campus'];
$post = $_POST['post'];

$mysqli->query("update employee_basics set titulo='$titulo', autor='$autor', editorial='$editorial', gender='$gender', resumen='$resumen', existencia='$existencia', estatus='$estatus', campus='$campus', post='$post' where id=$id");

// Set a constant
define("FILEREPOSITORY", "profile_images/");

// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name'])) {
// Was the file a JPEG?
    if ($_FILES['pimage']['type'] != "image/jpeg") {
        echo "<p>Profile image must be uploaded in JPEG format.</p>";
    } else {

//$name = $_FILES['classnotes']['name'];
        $filename = $id . ".jpg";

        unlink(FILEREPOSITORY . $filename);
        $result = move_uploaded_file($_FILES['pimage']['tmp_name'],
            FILEREPOSITORY . $filename);
//$result = move_uploaded_file($_FILES['pimg']['tmp_name'], "http://localhost/php_crud/profile_images/28.jpg");
        if ($result == 1) {
            echo "<p>File successfully uploaded.</p>";
        } else {
            echo "<p>There was a problem uploading the file.</p>";
        }

    }
}

header('location:index.php');

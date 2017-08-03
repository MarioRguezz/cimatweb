<?PHP
include 'conexion.php';
$color ="";
$target_file="";
 $conexion = conect();
if($_FILES['fotografia']['name'] != "") {
  $path = $_FILES['fotografia']['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);

        $path = "/img/custom/";
        $filename= "logo" . "." . $ext;
        $target_file = $path.$filename;
          	if (move_uploaded_file($_FILES['fotografia']["tmp_name"], $target_file)){
         echo "The file ". basename($filename). " has been uploaded.";
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
   }
    if(isset($_POST['barracolor'])){
      $color = $_POST[barracolor];
    }

    	$consx = "UPDATE plantilla SET background = '$color', logo = '$target_file' WHERE idplantilla = '1';";
	if(mysqli_query($conexion,$consx)){
      header('Location: ../views/admin.php');
  }else {
      header('Location: ..//views/admin.php');
  }

?>

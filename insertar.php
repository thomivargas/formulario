<?php include ("basededatos.php");?>
<?php
if(isset($_POST['registrarse'])){
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$clave = $_POST["clave"];

$insertDatos = "INSERT INTO datos VALUES('$usuario',
                                          '$email',
                                          '$clave')";
$ejecutarInsertar = mysqli_query($enlace, $insertDatos);

}
?>
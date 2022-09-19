<?php include ("basededatos.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tabla">
        <h1>Base de Datos</h1>
    <table>
        <tr>
            <th>usuario</th>
            <th>email</th>
            <th>clave</th>
        </tr>
        <?php
        $consulta = "SELECT * FROM datos";
        $ejecutarConsulta = mysqli_query($enlace, $consulta);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);
        if(!$ejecutarConsulta){
            echo"error en la con";
        }else{
            if($verFilas<1){
                echo"<tr><td>Sin registros</td></tr>";
            }else{
                for($i = 0; $i <= $fila;$i++){
                    echo'
                        <tr>
                            <td>'.$fila[0].'</td>
                            <td>'.$fila[1].'</td>
                            <td>'.$fila[2].'</td>
                        </tr>
                    ';
                    $fila = mysqli_fetch_array($ejecutarConsulta);
                }
            }
        }
        ?>
    </table>
    <a href="index.php">Formulario</a>
    </div>
</body>
</html>


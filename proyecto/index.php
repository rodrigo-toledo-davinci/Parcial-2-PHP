<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tabla de registros</h1>

<?php

require_once "conexion.php";

$sql = "SELECT * FROM estudiantes";

if($result = $pdo->query($sql)){
    if($result->rowCount() > 0){
        echo '<table class="table table-bordered table-striped">';
            echo '<thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Detalle</th>
                    </tr>
                </thead>
            <tbody>';
            while($row = $result->fetch()){
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['apellido'].'</td>';

                echo '<td>';
                echo '<a href="detalle.php?id='. $row['id'].'>Ver Registro</a>';               
                echo '</td>';

            echo '</tr>';
        }

        echo '</tbody>';                            
    echo '</table>';
    unset($result);

    }else{
        echo '<h3>Ningún registro fue encontrado</h3>';
    }
} else{
    echo 'Lo sentimos! Algo anduvo mal. Por Favor intente más tarde';
}
unset($pdo);
?>

</body>
</html>
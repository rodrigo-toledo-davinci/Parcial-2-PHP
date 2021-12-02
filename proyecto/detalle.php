<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

require_once 'config.php';
    

$sql = "SELECT * FROM estudiantes WHERE id = :id";
    
    if($stmt = $pdo->prepare($sql)){
       
        $stmt->bindParam(':id', $param_id);

        $param_id = trim($_GET['id']);

        if($stmt->execute()){
            if($stmt->rowCount() == 1){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                $name = $row['dni'];
                $address = $row['nombre'];
                $salary = $row['apellido'];
            } else{
                exit();
            }
            
        } else{
            echo 'Lo sentimos! Algo anduvo mal. Por Favor intente más tarde';
        }
    }

    unset($stmt);

    unset($pdo);
} else{
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        <div>
            <h1>Registro</h1>

            <h3>DNI</h3>
            <p><?php echo $row['dni']; ?></p>
                    
            <h3>Nombre</h3>
            <p><?php echo $row['nombre']; ?></p>

            <h3>Apellido</h3>
            <p><?php echo $row['apellido']; ?></p>

            <a href='index.php'>Volver</a>   
        </div>
              
    </div>
</div>
</body>
</html>
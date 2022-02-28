<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Empresa</title>
</head>

<body>

<table>

        <h1>Registros Personales</h1>
        <tr >
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Celular</th>
            <th>Correo</th>
        </tr>

        <?php
        $db_host="localhost";
        $db_nombre="empresa";
        $db_usuario="root";
        $db_contra="";
    
        $coneccion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

        if(mysqli_connect_errno())
        {
            echo "Fallo al conectar la base de datos";
        
        exit();
        }
    
        mysqli_set_charset($coneccion, "utf8");

        mysqli_select_db($coneccion, $db_nombre) or die ("No se encuentra la base de Datos");

        $consulta="SELECT * FROM empleados";
        $resultados=mysqli_query($coneccion,$consulta);

        while($fila=mysqli_fetch_row($resultados)){

        ?>
            <tr>
                <td><?php echo $fila['1']?></td>
                <td><?php echo $fila['2']?></td>
                <td><?php echo $fila['3']?></td>
                <td><?php echo $fila['4']?></td>
                <td><?php echo $fila['5']?></td>
                <td><?php echo $fila['6']?></td>
            </tr>
        <?php }?>
    </table>
    
    <br>
    <br>
    <br>
    <br>
    <br>

            
    <h1>Proyecto empresarial</h1>
    <p>Parrafo agregado</p>
</body>


</html>

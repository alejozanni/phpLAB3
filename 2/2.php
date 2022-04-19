<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>    
</head>

<body>
<?php
$numero = 3;
$x= "X";
?>

<table>
    <tr>
        <td> 
            Tabla del <?php echo $numero ?> 
        </td>
    </tr>
    
    <?php
    for ($i =1; $i<=3; $i++){
        echo "<tr><td>", $numero, $x, $i,"</td><td>",$i * $numero, "</td></tr>";
    }
    ?>

    <tr>
        <td> Multiplicacion </td>
        <td> Resultado</td>
    </tr>


</table>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>    
</head>
<table>
  <tr>
    <td>
      <?php 
        echo date("l")," ", date("d")," de ", date("F"), " de ", date("o"); 
      ?>
    </td>
  </tr>

  <tr>
    <td>
    <?php 
      echo date("d"), "/", date("n"), "/", date("Y"); 
    ?>
    </td>
  </tr>

  <tr>
    <td>
    <?php 
      echo date("D"), " ", date("j"), " ", date("H"), ":",date("i"), " ", date("a"); 
    ?>
    </td>
  </tr>

  <tr>
    <td>
    <?php 
      echo date("W"), " semana del mes del ", date("o"); 
    ?>
    </td>
  </tr>
</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 5</title> 
</head>

<body>
<h1>Formulario</h1>

<form action="formulario5.php" method="get"/>

<p>Nombre: <input type="text" name="nombre" placeholder="Nombre" required>   
   Apellidos: <input type="text" name="apellidos" size="20" required>   
   e-mail: <input type="text" name="email" size="35" required>
   DNI: <input type="text" name="dni" size="8" required>
   Edad: <input type="text" name="edad" size="3" required><br/></p>
<table>
Domicilio<br/>
   País: <input type="text" name="pais" size="14"  required> 
   Provincia: <input type="text" name="provincia"size="14"  required> 
   Localidad: <input type="text" name="localidad" size="14" required>
   <br> <br>Calle: <input type="text" name="calle"size="14"  required> 
   Numero: <input type="text" name="numero" size="4" required> 
   Torre: <input type="text" name="torre"size="4" > 
   Piso: <input type="text" name="piso"size="4" >
   Departamento: <input type="text" name="departamento" size="4" >
</table>

<table>
   <tr>
     <td>
         Sexo <br/>
   <input type="radio" name="sexo" value="Hombre"  required> Hombre<br/>
   <input type="radio" name="sexo" value="Mujer"> Mujer</p>
    </td>

    <td>
   Estado Civil<br>
   <input type="radio" name="estado" value="Soltero" checked="checked"  required>
     Soltero/a<br>
   <input type="radio" name="estado" value="Casado"> 
     Casado/a<br>
   <input type="radio" name="estado" value="Viudo"> 
     Viudo/a<br>
    <input type="radio" name="estado" value="Divorciado"> 
    Divorciado/a<br>
    </td>

    <td>
        Hijos<input type="text" name="hijos" size="5"> <br/>
    </td>

    <td>

   Hobbies: <br/>
   <input type="radio" name="hobbies" value="Deportes "> Deportes<br/>
   <input type="radio" name="hobbies" value="Cine "> Cine<br/>
   <input type="radio" name="hobbies" value="Libros"> Libros<br/>
   <input type="radio" name="hobbies" value="Ciencia"> Ciencia</p>
   </td>

</table>
<input value="Enviar" type="submit">
</form>
</body>
</html>
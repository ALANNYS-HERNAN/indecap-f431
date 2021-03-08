<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablas</title>
</head>
<body>
<!-- tabals  -->

    <table border="1">
        <tr>
            <td>clumna 1</td>
            <td>clumna 2</td>
        </tr>
        <tr>
            <td>FL 1</td>
            <td>FL 2</td>
        </tr>
    </table>
    <!-- tablas con encabezado -->
    <table border="1">
        <thead>
            <tr>
                <th>nombre </th>
                <th>apellido</th>
            </tr>
       
        </thead>
        <tbody> 
            <tr>
                <td>hernan</td>
                <td>salazar</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>nombre</td>
                <td>apellido</td>
            </tr>
        </tfoot>
        <caption>Descripcion de la tabla </caption>
    </table>
    <!-- tablas con union de columnas -->
    <table border="1">
        <tr>
            <th>nombre</th>
            <td>hernan</td>
        </tr>
        <tr>
            <th>apellido</th>
            <td>salazar</td>
        </tr>
    </table>
    <table border="1">
        <tr>
            <td colspan="2">ac</td>
        </tr>
        <tr>
            <td>b</td>
            <td>d</td>
        </tr>
    </table>
    <!-- tablas con union de filas  -->
    <table border="1">
        <tr>
            <td rowspan="2">a</td>
            <td>b</td>
        </tr>
        <tr>
            <td>c</td>
        </tr>
    </table>
   
</body>
</html>
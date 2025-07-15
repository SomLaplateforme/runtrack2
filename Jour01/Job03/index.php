<?php
$mybool = true;
$nombre = 3;
$texto = "je suis moi";
$nbvirgule = 1.2345;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau PHP</title>
    <link href="style.css" rel="stylesheet"/>
</head>

<body>
<table>
    <thead>
    <tr>
        <th>
            TYPE
        </th>
        <th>
            NOM
        </th>
        <th>
            VALEUR
        </th>
    </tr> 
    </thead>

    <tbody>      
    <tr>
        <td>
          <?php
          echo gettype($mybool);
          ?>  
        </td>
        <td>
            mybool
        </td>
        <td>
            <?php
            echo $mybool;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo gettype($nombre);
            ?>
        </td>
        <td>
            nombre
        </td>
        <td>
           <?php
           echo $nombre;
           ?>

        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo gettype($texto);
            ?>
        </td>
        <td>
            texto
        </td>
        <td>
            <?php
            echo $texto;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo gettype($nbvirgule);
            ?>
        </td>
        <td>
            nbvirgule
        </td>
        <td>
            <?php 
            echo $nbvirgule;
            ?>
        </td>
    </tr>
    </tbody>
  </table>  
</table>
<body>
    
</body>
</html>
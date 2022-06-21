<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Semana 1 Sesion 1</title>
</head>
<body>
    

<?php
    //echo("Hola desde PHP ");
    //phpinfo();
    //echo($_SERVER['REQUEST_URI']);
    $nombre = "Roberto";
    $apellido = "Pineda";
    $edad = 39;
    $estadoCivil = true; //true es Soltero y false es casado
    $saldoCtaBanco = 9999.99;
    echo($saldoCtaBanco);

    //Arrays

    $arrNumerosSuerte = [10,25,69];
    echo("<br>");
    echo($arrNumerosSuerte[2]);

    $arrEdadesPersonas = array(
        "roberto"=>39,
        "david"=>25,
        "karen"=>27
    );
    echo("<br>");
    echo($arrEdadesPersonas["karen"]);

    $carros = array(
        array("BMW", "M3", 2017),
        array("Mercedes Benz", "C4", 2000),
        array("Shelby", "Cobra", 1975)
    );
    echo("<br>");
    print_r($carros);
    echo("<br>");
    var_dump($carros);
    echo("<br>");
    echo("Mi carro favorito es ".$carros[0][0]." modelo ".$carros[0][1]. " del año ".$carros[0][2]);
?>

<TABLE BORDER>
	<TR>
		<TD>Nombre</TD> <TD>Edad</TD> <TD>Estado Civil</TD>
	</TR>
	<TR>
		<TD><?php echo($nombre . " " . $apellido);?></TD> <TD><?php echo($edad);?></TD> <TD><?php echo($estadoCivil);?></TD>
	</TR>
</TABLE>

<?php
echo("<table>
<tr>
  <th>Nomnre</th>
  <th>Edad</th>
  <th>Estado Civil</th>
</tr>
<tr>
  <td>$nombre $apellido</td>
  <td>$edad</td>
  <td>$estadoCivil</td>
</tr>
<tr>
  <td>Centro comercial Moctezuma</td>
  <td>Francisco Chang</td>
  <td>Mexico</td>
</tr>
</table>");

echo('$nombre $apellido');
?>

</body>
</html>
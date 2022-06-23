<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 01 sesion 02</title>
</head>
<body>
    <?php
        $sueldo = 12101.99;
        if ($sueldo < 1025) {
            echo("menor al sueldo basico");
        }
        elseif($sueldo >= 1025 and $sueldo <= 2500){
            echo("sueldo mayor a 1025 y menor o igual a 2500");
        }
        else{
            echo("sueldo mayor a 2500");
        }

        echo("<br>");
        $color = "verde";

        switch ($color) {
            case 'rojo':
                echo("es rojo");
                break;
            case 'amarillo':
                echo("es amarillo");
                break;
            case 'azul':
                echo("es azul");
                break;
            default:
                echo("color no seleccionado");
                break;
        }
        $carros = array(
            array("BMW", "M3", 2017),
            array("Mercedes Benz", "C4", 2000),
            array("Shelby", "Cobra", 1975)
        );

        echo("<br>");
        for ($i=0; $i < count($carros); $i++) { 
            echo("auto ". $carros[$i][0]);
            echo("marcha ". $carros[$i][1]);
            echo("<br>");
        }

        echo("<br>");
        for ($i=0; $i < count($carros); $i++) { 
            for ($j=0; $j < count($carros[$i]); $j++) { 
                echo("Mi carro:". $carros[$i][$j] . " ");
            }
            echo("<br>");
        }

        echo("<br>");

        foreach ($carros as $key => $value) {
            echo("<br>");
            echo($key);
            echo("\t");
            echo($value[2]);
        }

        echo("<br>");

        $nro = 0;
        while ($nro <= 10) {
            echo($nro);
            echo("<br>");
            $nro ++;
        }

        $texto = "perú - país de incas";
        echo($texto);
        echo("<br>");
        echo mb_convert_case($texto, MB_CASE_UPPER , "UTF-8");
        echo("<br>");
        echo mb_strtolower($texto);
        echo("<br>");
        echo substr($texto,8, 4);

        $fecha = "1983/08/28 11:35:34"; 

        echo "<br>";
        $año = substr($fecha,0,4);
        
        $mes =substr($fecha,5,2);
        
        $dia = substr($fecha,8,2);

        $hora= substr($fecha,11,2);
      
        $min = substr($fecha,14,2);
        $seg = substr($fecha,17,2);
        

        echo($seg);
        echo "<br>";
        echo strpos($texto, 'a'); 


        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];

        if (isset($_GET["nombres"]) and isset($_GET["email"])) {
           echo $_GET["nombres"];
           $email = $_GET["email"];
           $valArroba = strpos($email, '@');
           $valPunto = strpos($email,'.' );
           echo "<br>";
           echo ($valArroba. "punto ".$valPunto); 
           if(!$valArroba and !$valPunto){
            echo "el correo es incorrecto";
           }else{
            echo "el correo $email es correcto";
           }
           $nombres = $_GET["nombres"];
           $arrNombres = explode(' ',$nombres);
           echo "<br>";
           echo("bienvenido tu nombre es: $arrNombres[0], tu apellido es $arrNombres[1] y tu correo es $email");
        }
        
    ?>

<form action="" method="get">
    <label for="">Nombres: </label>
    <input type="text" name="nombres" id="">
    <label for="">email: </label>
    <input type="email" name="email" id="">
    <input type="submit" value="enviar">
        </form>
</body>
</html>
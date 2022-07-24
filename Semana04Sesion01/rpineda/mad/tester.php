<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tester MAD</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/default.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
	<?php
	include_once(dirname(__FILE__) . '/include/ws_function_def.php');
	global $ws_funciones_def;
	$tot = $ws_funciones_def;
	$json_output = json_encode($tot, true);
	echo "<script>
	var valoresDefinidos = $json_output;
</script>";
	?>
	<div style="margin: 0px 2%; vertical-align: top;">
		<div style="display: inline-block; width: 40%; vertical-align: top;">
			<h4>Funciones:</h4>
			<?php
			echo '<SELECT class="form-control"  name="selCombo" id= "selCombo" onChange=onSelectFunction() >';
			$tot = count($ws_funciones_def["FUN_ID_DEF"]);
			for ($i = 0; $i < $tot; $i++) {
				$def_id = $ws_funciones_def["FUN_ID_DEF"][$i];
				$def_name = $ws_funciones_def["FUN_NAME_DEF"][$i];
				echo "<OPTION VALUE=\"$def_id\">$def_name</OPTION>";
			}
			echo '</SELECT>' ?>
			<br> <input class="btn btn-block btn-primary" type="submit" name="but_consultar" id="but_consultar" value="Consultar" onclick="consultar()" />
		</div>
		<div style="display: inline-block; width: 58%; vertical-align: top;">
			<h4>Argumentos</h4>
			<textarea class="form-control" rows="5" id="argumentos">{}</textarea>
		</div>
	</div>
	<div style="margin: 0px 2%; vertical-align: top;">
		<h4>Resultado</h4>
		<pre style="height: 120px;" id="resultado"> </pre>
		<h3>Funciones GET</h3>
		<table width="85%" class="table table-striped table-bordered table-condensed" border="1">
			<tr>
				<th scope="col">Descripcion</th>
				<th scope="col">Funcion</th>
				<th scope="col">Ejemplo</th>
			</tr>
			<?php
			$tot = count($ws_funciones_def["FUN_ID_DEF"]);
			for ($i = 0; $i < $tot; $i++) {
				$def_id = $ws_funciones_def["FUN_ID_DEF"][$i];
				$def_name = $ws_funciones_def["FUN_NAME_DEF"][$i];
				$def_desc = $ws_funciones_def["FUN_EXAMPLE_DEF"][$i];
				echo "<tr>
							<td>$def_id</td>
							<td>$def_name</td>
							<td><pre><code class='json'>$def_desc</code></pre></td>
						</tr>";
			}
			?>
		</table>
	</div>




	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript">
		hljs.highlightAll();
		var http = new XMLHttpRequest();
		var url = window.location.origin + "/Semana04Sesion01/rpineda/mad/";

		function consultar() {
			var selcombo = document.getElementById('selCombo');
			var funcion = selcombo.value;
			var txtArgumentos = document.getElementById('argumentos');
			var argumentos = eval("(" + txtArgumentos.value + ")");
			var jsonArgumentos = {};
			jsonArgumentos.funcion = funcion;
			jsonArgumentos.args = argumentos;
			var strparams = "PARAM=" + JSON.stringify(jsonArgumentos);
			http.onreadystatechange = handle_json;
			http.open("POST", url, true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.send(strparams);
		}

		function handle_json() {
			if (http.readyState == 4) {
				if (http.status == 200) {
					var json_data = http.responseText;
					var txtResult = document.getElementById('resultado');
					txtResult.innerHTML = json_data;
					Swal.fire(
						'MAD',
						'Ejecutado Correctamente',
						'success'
					)
				} else {
					Swal.fire(
						'MAD',
						'Hubo un error' + http.status,
						'error'
					)
				}
			}
		}

		function onSelectFunction() {
			var select = document.getElementById('selCombo');
			var asd = select.selectedOptions[0].index;
			var div = document.getElementById('argumentos');
			div.innerHTML = valoresDefinidos["FUN_EXAMPLE_DEF"][asd];
		}
	</script>


</body>

</html>
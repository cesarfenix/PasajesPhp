<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel = "preconnect" href = "https://fonts.gstatic.com">
<link href = "https://fonts.googleapis.com/css2? family = New + Tegomin & family = Open + Sans + Condensado: wght @ 700 & display = swap "rel =" stylesheet ">
	<title>Viajes</title>
</head>
<body>
	<form action="resultado.php"method="post">
		<div class="container"  >
  <div class="row">
    <div class="col-sm"2>
      Cantidad de pasajeros a Neira
    </div>
    <div class="col-sm"2>
       Cantidad de pasajeros a Aranzazu
    </div>
    <div class="col-sm"2>
      Cantidad de pasajeros a Salamina
    </div>
    <div class="col-sm"2>
       Cantidad de pasajeros a Pacora
    </div>
    <div class="col-sm"2>
       Cantidad de pasajeros a Aguadas
    </div>
  </div>
  <div class="row">
    <div class="col-sm"2>
      <input type="number" name="pasajerosNeira">
    </div>
    <div class="col-sm"2>
       <input type="number" name="pasajerosAranzazu">
    </div>
    <div class="col-sm"2>
       <input type="number" name="pasajerosSalamina">
    </div>
    <div class="col-sm"2>
       <input type="number" name="pasajerosPacora">
    </div>
    <div class="col-sm"2>
        <input type="number" name="pasajerosAguadas">
    </div>
  </div>
</div><br>
<dir class="row"><button type="submit" >Calcular saldo recogido</button></dir>
	</form>
</body>
</html>
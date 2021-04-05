<!DOCTYPE html>
<html lang="en">
<head>
	<div align="center">
	<!--
	<div class="container">
  <div class="row">
    <div class="col-sm">-->
      <img src="bus.jpg" alt="bus"style="width:500px;height:200px;">
    </div>     
    <!--</div>
	</div>-->
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Viajes</title>
</head>
<body>
	<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Neira</th>
      <th scope="col">Aranzazu</th>
      <th scope="col">Salamina</th>
      <th scope="col">Pácora</th>
      <th scope="col">Aguadas</th>
      <th scope="col">Total recogido</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $Viaje->getpasajerosNeira() ?></td>
      <td><?= $Viaje->getpasajerosAranzazu() ?></td>
      <td><?= $Viaje->getpasajerosSalamina() ?></td>
      <td><?= $Viaje->getpasajerosPacora() ?></td>
      <td><?= $Viaje->getpasajerosAguadas() ?></td>
      <td><?= $Viaje->gettotal() ?></td>
     </tr>
    </tbody>
</table>
</div>
</body>
</html>
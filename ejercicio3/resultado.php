<?php 
require_once"model/Viaje.php";
$Viaje = new Viaje($_POST["pasajerosNeira"],$_POST["pasajerosAranzazu"],$_POST["pasajerosSalamina"],$_POST["pasajerosPacora"],$_POST["pasajerosAguadas"]);
require_once"view/vresultado.php";
 ?>
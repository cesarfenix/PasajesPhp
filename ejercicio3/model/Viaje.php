<?php
class Viaje
{
	private $pasajerosNeira;
	private $pasajerosAranzazu;
	private $pasajerosSalamina;
	private $pasajerosPacora;
	private $pasajerosAguadas;

	public function __construct(int $ne, int $ar, int $sa,int $pa, int $ag)
	{
		$this->pasajerosNeira=$ne;
		$this->pasajerosAranzazu=$ar;
		$this->pasajerosSalamina=$sa;
		$this->pasajerosPacora=$pa;
		$this->pasajerosAguadas=$ag;
	}
		public function Viaje():int
		{
		return $this->pasajerosNeira.$this->pasajerosAranzazu.$this->pasajerosSalamina.$this->pasajerosPacora.$this->pasajerosAguadas;
		}
		public function getpasajerosNeira():int
		{
			return $this->pasajerosNeira*4000;
		}
		public function setpasajerosNeira():int
		{
			return $this->pasajerosNeira;
		}
		public function getpasajerosAranzazu():int
		{
			return $this->pasajerosAranzazu*8000;
		}
		public function setpasajerosAranzazu():int
		{
			return $this->pasajerosAranzazu;
		}
		public function getpasajerosSalamina():int
		{
			return $this->pasajerosSalamina*12000;
		}
		public function setpasajerosSalamina():int
		{
			return $this->pasajerosSalamina;
		}
		public function getpasajerosPacora():int
		{
			return $this->pasajerosPacora*15000;
		}
		public function setpasajerosPacora():int
		{
			return $this->pasajerosPacora;
		}
		public function getpasajerosAguadas():int
		{
			return $this->pasajerosAguadas*20000;
		}
		public function setpasajerosAguadas():int
		{
			return $this->pasajerosAguadas;
		}
		public function gettotal():int
		{
			return $this->getpasajerosNeira()+$this->getpasajerosAranzazu()+$this->getpasajerosSalamina()+$this->getpasajerosPacora()+$this->getpasajerosAguadas();
		}
}
?>
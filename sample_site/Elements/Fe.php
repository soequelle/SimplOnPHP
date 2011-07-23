<?php
class Fe extends \DOF\Elements\Element
{
	protected 
		$id,
		$cabeza,
		$condenado,
		$home;
	
	public function __construct($id = null, &$specialDataStorage = null)
	{
	    $this->id = new \DOF\Datas\Id('Id');
		$this->cabeza = new \DOF\Datas\String('¿Cuando tendrás Fe?');
		$this->condenado = new \DOF\Datas\String('Contenido');
		$this->home = new \DOF\Datas\ElementContainer(new Home(), 'Home');
		
		parent::__construct($id, $specialDataStorage);
	}
}
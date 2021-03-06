<?php
class Home extends \DOF\Elements\Element
{
	protected
		$id,
		$cabeza,
		$contenido;
	
	public function __construct($id = null, &$specialDataStorage = null)
	{
	    $this->id = new \DOF\Datas\Id('Id');
		$this->cabeza = new \DOF\Datas\String('Cabeza','VCUSL');
		$this->contenido = new \DOF\Datas\String('Contenido', 's');
		
		$this->storage('home');
		
		//$this->filterCriteria('.cabeza OR contenido == "igual" OR contenido ^= "empieza" OR contenido $= "acaba" OR contenido ~= "papas a \"la\" .contenido francesa"');
		
		parent::__construct($id, $specialDataStorage);
	}
}
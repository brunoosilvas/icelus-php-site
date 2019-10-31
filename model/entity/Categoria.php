<?php

namespace site\model\entity;

use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

/**
 * @icelus\orm\annotation\Table {name : "categoria"};
 */
class Categoria
{
	private $id;
    private $categoria;
    private $documento;

    /**
     * @icelus\orm\annoation\Column {"id" : true, "name" : "id", "nullable" : false, "type" : "Integer"};
     */
	public function getId()
	{
		return $this->id;
	}
	
	public function setId(\Integer $id) 
	{
		$this->id = $id;
    }
    
    /**
     * @icelus\orm\annoation\Column {"name" : "categoria", "nullable" : false, "type" : "Strings"};
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria(\Strings $categoria) 
    {
        $this->categoria = $categoria;
    }

    /**
     * @icelus\orm\annoation\Reference {"name" : "documento", "nullable" : false, "type" : "Documento"};
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    public function setDocumento(\Documento $documento)
    {
        $this->documento = $documento;
    }

}
<?php

namespace Site\Model\Entity;

use Icelus\Orm\Type\Integer;
use Icelus\Orm\Type\Strings;

/**
 * @Icelus\Orm\Annotation\Table {name : "categoria"};
 */
class Categoria
{
	private $id;
    private $categoria;
    private $documento;

    /**
     * @Icelus\Orm\Annoation\Column {"id" : true, "name" : "id", "nullable" : false, "type" : "Integer"};
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
     * @Icelus\Orm\Annoation\Column {"name" : "categoria", "nullable" : false, "type" : "Strings"};
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
     * @Icelus\Orm\Annoation\Reference {"name" : "documento", "nullable" : false, "type" : "Documento"};
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
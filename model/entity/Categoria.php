<?php

namespace site\model\entity;

use icelus\orm\model\Entity;
use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

/**
 * @Table({name : "categoria"})
 */
class Categoria
{
	private $id;
    private $categoria;
    private $documento;

    /**
     * @Column({"id" : true, "name" : "id", "nullable" : false, "type" : "Integer"})
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
     * @Column({"name" : "categoria", "nullable" : false, "type" : "Strings"})
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
     * @Reference({"name" : "documento", "nullable" : false, "type" : "Documento"})
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
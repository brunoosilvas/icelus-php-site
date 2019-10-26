<?php

namespace site\model\entity;

use icelus\orm\model\Entity;
use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

/**
 * @Table({name : "caracteristica"})
 */
class Caracteristica extends Entity
{
	private $id;
    private $caracteristica;
    private $identificacao;
    private $categoria;

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
     * @Column({"name" : "caracteristica", "nullable" : false, "type" : "Strings"})
     */
    public function getCaracteristica()
    {
        return $this->caracteristica;
    }

    public function setCaracteristica(\Strings $caracteristica) 
    {
        $this->caracteristica = $caracteristica;
    }

    /**
     * @Column({"name" : "identificacao", "nullable" : false, "type" : "Strings"})
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    public function setIdentificacao(\Strings $identificacao) 
    {
        $this->identificacao = $identificacao;
    }

    /**
     * @Foreign({"name" : "categoria", "nullable" : false, "type" : "Categoria"})
     */
    public function getCategoria()
    {
        return $this->carategoria;
    }

    public function setCategoria(\Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

}
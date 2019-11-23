<?php

namespace site\model\entity;

use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

/**
 * @icelus\orm\annotation\Table {name : "caracteristica"};
 */
class Caracteristica
{
	private $id;
    private $caracteristica;
    private $identificacao;
    private $categoria;

    /**
     * @icelus\orm\annotation\Column {"id" : true, "name" : "id", "nullable" : false, "type" : "Integer"};
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
     * @icelus\orm\annotation\Column {"name" : "caracteristica", "nullable" : false, "type" : "Strings"};
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
     * @icelus\orm\annotation\Column {"name" : "identificacao", "nullable" : false, "type" : "Strings"};
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
     * @icelus\orm\annotation\Reference {"name" : "categoria", "nullable" : false, "type" : "Categoria"};
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
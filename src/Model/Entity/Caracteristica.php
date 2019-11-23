<?php

namespace Site\Model\Entity;

use Icelus\Orm\Type\Integer;
use Icelus\Orm\Type\Strings;

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
     * @Icelus\Orm\Annotation\Column {"id" : true, "name" : "id", "nullable" : false, "type" : "Integer"};
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
     * @Icelus\Orm\Annotation\Column {"name" : "caracteristica", "nullable" : false, "type" : "Strings"};
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
     * @Icelus\Orm\Annotation\Column {"name" : "identificacao", "nullable" : false, "type" : "Strings"};
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
     * @Icelus\Orm\Annotation\Reference {"name" : "categoria", "nullable" : false, "type" : "Categoria"};
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
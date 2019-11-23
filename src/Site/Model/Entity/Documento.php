<?php

namespace Site\Model\Entity;

use Icelus\Orm\Type\Integer;
use Icelus\Orm\Type\Strings;

/**
 * @Icelus\Orm\Annotation\Table {name : "documento"};
 */
class Documento
{
	private $id;
    private $documento;
    private $versao;

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
     * @Icelus\Orm\Annotation\Column {"name" : "documento", "nullable" : false, "type" : "Strings"};
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    public function setDocumento(\Strings $documento) 
    {
        $this->documento = $documento;
    }

    /**
     * @Icelus\Orm\Annotation\Column {"name" : "versao", "nullable" : false, "type" : "Strings"};
     */
    public function getVersao()
    {
        return $this->versao;
    }

    public function setVersao(\Strings $versao)
    {
        $this->versao = $versao;
    }

}
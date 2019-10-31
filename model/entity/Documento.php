<?php

namespace site\model\entity;

use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

/**
 * @icelus\orm\annotation\Table {name : "documento"};
 */
class Documento
{
	private $id;
    private $documento;
    private $versao;

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
     * @icelus\orm\annotation\Column {"name" : "documento", "nullable" : false, "type" : "Strings"};
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
     * @icelus\orm\annotation\Column {"name" : "versao", "nullable" : false, "type" : "Strings"};
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
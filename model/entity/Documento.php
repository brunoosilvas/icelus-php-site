<?php

namespace site\model\entity;

use icelus\orm\model\Entity;
use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

/**
 * @Table({name : "documento"})
 */
class Documento extends Entity
{
	private $id;
    private $documento;
    private $versao;

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
     * @Column({"name" : "documento", "nullable" : false, "type" : "Strings"})
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
     * @Column({"name" : "versao", "nullable" : false, "type" : "Strings"})
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
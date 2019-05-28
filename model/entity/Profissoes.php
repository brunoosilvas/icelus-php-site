<?php

namespace site\model\entity;

use icelus\orm\model\Entity;
use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

use site\model\dao\Perfis;

/**
 * @Table({name : "profissoes", view = false})
 */
class Profissoes extends Entity
{

    private $id;
    private $profissao;
    private $perfis;

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
     * @Column({"name" : "profissao", "type" : "Strings", "nullable" : false})
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    public function setProfissao(\Strings $profissao)
    {
        $this->profissao = $profissao;
    }

    /**
     * @Foreign({"name" : "perfil", "type" : "Perfis", "nullable" : false})
     */
    public function getPerfis()
    {
        return $this->perfis;
    }

    public function setPerfis(Perfis $perfis)
    {
        $this->perfis = $perfis;
    }
}

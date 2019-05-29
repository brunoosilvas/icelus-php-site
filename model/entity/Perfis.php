<?php

namespace site\model\entity;

use icelus\orm\model\Entity;
use icelus\orm\type\Integer;
use icelus\orm\type\Strings;

/**
 * @Table({name : "perfis", schema = "icelus", view = false})
 */
class Perfis extends Entity
{
    private $id;
    private $perfil;

    /**
     * @Column({"name" : "id", "type" : "icelus\\orm\\type\\Integer", "nullable" : false})
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId(Integer $id)
    {
        $this->id = $id;
    }

    /**
     * @Column({"name" : "perfil", "type" : "icelus\\orm\\type\\String", "nullable" : false})
     */
    public function setPerfil(Strings $perfil)
    {
        $this->perfil = $perfil;
    }

    public function getPerfil()
    {
        return $this->perfil;
    }
}

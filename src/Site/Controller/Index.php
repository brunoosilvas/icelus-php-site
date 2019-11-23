<?php

namespace Site\Controller;

use Icelus\Controller\ActionController;
use Icelus\Orm\mapping\Entity;

use Site\Model\Entity\Caracteristica;
use Site\Model\Entity\Categoria;
use Site\Model\Entity\Documento;

class Index extends ActionController {
			
	public function action($param) {
        
        $caracteristica = new Caracteristica();

        $entity = new Entity(Caracteristica::class);
        $entity->doReader();

        $entity = new Entity(Categoria::class);
        $entity->doReader();

        $entity = new Entity(Documento::class);
        $entity->doReader();
    }
    
    private function teste2(Type $type)
    {
        print_r($type);
    }

    public function teste($param)
    {
        echo var_dump($param);
    }
	
	public function hasSession() {
		
	}
}
<?php

namespace site\controller;

use icelus\controller\ActionController;
use icelus\orm\mapping\Entity;

use site\model\entity\Caracteristica;
use site\model\entity\Categoria;
use site\model\entity\Documento;

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
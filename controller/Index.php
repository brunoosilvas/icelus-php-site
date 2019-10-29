<?php

namespace site\controller;

use icelus\controller\ActionController;
use icelus\orm\mapping\Entity;

use site\model\entity\Caracteristica;

class Index extends ActionController {
			
	public function action($param) {
        
        $caracteristica = new Caracteristica();

        $entity = new Entity(Caracteristica::class);
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
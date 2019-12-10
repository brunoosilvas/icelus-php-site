<?php

namespace Site\Controller;

use Icelus\Controller\ActionController;
use Icelus\Orm\mapping\Entity;

use Site\Model\Entity\Caracteristica;
use Site\Model\Entity\Categoria;
use Site\Model\Entity\Documento;

class Index extends ActionController {
			
	public function action($param) {
        
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
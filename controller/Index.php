<?php

namespace site\controller;

use icelus\controller\ActionController;
use icelus\orm\type\Integer;
use icelus\orm\type\Type;
use site\model\entity\Profissoes;

class Index extends ActionController {
			
	public function action($param) {
        
        
        $profissoes = new Profissoes();
        print_r($profissoes);
        echo var_dump($profissoes->getId());

		//echo "<pre>";		
		//$profissoes = new Profissoes();

		/*$sessionFactory = SessionFactory::instance()
			->configure("/site/config.mysql")
            ->build();*/
        /*    
		$sessionFactory->getSession()->begin();

		$sessionFactory->getSession()->commit();

		echo var_dump($sessionFactory);
		echo var_dump($sessionFactory->getSession()->getDbc());
		echo var_dump($sessionFactory->getSession()->getDialect());*/
		
		//$this->view->render();*/
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
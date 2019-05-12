<?php

namespace site\controller;

use icelus\controller\ActionController;

/**
 * @Path("{})
 */
class Index extends ActionController {
			
	public function action($param) {
        
        echo "aquui";
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

    public function teste($param)
    {
        echo var_dump($param);
    }
	
	public function hasSession() {
		
	}
}
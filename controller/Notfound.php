<?php

namespace site\controller;

use icelus\controller\ActionController;

class NotFound extends ActionController {
			
	public function action($param) {
		//$this->view->add("title", "Santo Graal");
        //$this->view->render();
        echo "aqui";
	}
	
	public function testeAdmin() {

        echo "aqui 2";
    }

    public function hasSession()
    {
        
    }
}
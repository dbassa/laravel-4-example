<?php

class Authors extends BaseController
{
	// controlador amb un fitxer
	//public function action_index() {

	//}

	// restful controller get (http verb)
	public function getIndex() {
		// return View::make('authors.index',array('name'=>'Daniel Bassa'));
		// return View::make('authors.index')->with('name','Josy De Brito Lira');
		$view = View::make('authors.index',array('name'=>'Daniel Bassa'));
		$view->edat = 39;
		$view['poblacio'] = 'Palafrugell';
		return $view;
	}
}
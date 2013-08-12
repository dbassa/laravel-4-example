<?php

class Restful extends BaseController
{
	// restful controller get (http verb)
	public function getIndex() {
		return View::make('restful');
	}
}
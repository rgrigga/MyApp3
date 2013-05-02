<?php
class Calc_Controller extends Base_Controller {

	public function action_index()
	{
		// echo "foo!"
	    return View::make('calc.index');
	}

}
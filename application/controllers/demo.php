<?php
class Demo_Controller extends Base_Controller
{
//http://codehappy.daylerees.com/using-controllers
public function action_index($name="guest", $place="home")
{
	$data = array(
		'name' => $name,
		'place' => $place
		);

	return View::make('demo.demo', $data);
}

public function action_login()
{
	echo "This is the login form.";
}
public function action_logout()
{
	echo "This is the logout action.";
}
}

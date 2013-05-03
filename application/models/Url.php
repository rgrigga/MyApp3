<?php
class Url extends Eloquent{
	
	public static $rules = array('url' => 'required|url');

	public static function validate($input){
		$v= Validator::make($input, static::$rules);
		return $v->fails()
		? $v
		: true;

	}

	public static function get_unique_short_url()
	{
		$surl = base_convert(rand(10000,99999),10,36);
		//base 62 should be used, but will require a custom funciton, php only goes to 36.
		
		if( static::where_surl($surl)->first() )
		//if the result of this attempt exists
		{
			static::get_unique_short_url();//try again
		}
		return $surl; //it's unique now
	}

}
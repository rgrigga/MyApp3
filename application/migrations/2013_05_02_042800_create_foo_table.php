<?php

class Create_Foo_Table {

	public function up()
{
		Schema::create('foo', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
	});

}

	public function down()
{
		Schema::drop('foo');

}

}
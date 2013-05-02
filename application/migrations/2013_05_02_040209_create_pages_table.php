<?php

class Create_Pages_Table {

	public function up()
{
		Schema::create('pages', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->text('body');
			$table->timestamps();
	});

}

	public function down()
{
		Schema::drop('pages');

}

}
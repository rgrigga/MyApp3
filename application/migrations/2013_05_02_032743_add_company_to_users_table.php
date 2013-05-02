<?php

class Add_Company_To_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function ($table){
			$table->string('company');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function ($table){
			$table->drop_column('company');//can pass string or array
		});
	}

}
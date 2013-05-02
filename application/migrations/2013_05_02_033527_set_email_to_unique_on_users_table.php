<?php

class Set_Email_To_Unique_On_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function ($table){
			$table->unique('company');
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
			$table->drop_unique('users_company_unique');
		});
	}

}
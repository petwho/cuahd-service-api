<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExcelFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('excel_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('filepath');
			// $table->string('user_id');
			$table->string('status');
			$table->datetime('started_at')->nullable()->defalt(null);
			$table->datetime('ended_at')->nullable()->defalt(null);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('excel_files');
	}

}

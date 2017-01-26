<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('embed', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');

            $table->string('src');
            $table->string('title');
            $table->string('description');
            $table->string('category_id');
            $table->string('img');
            
            $table->softDeletes();
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
		Schema::drop('embed');
	}

}

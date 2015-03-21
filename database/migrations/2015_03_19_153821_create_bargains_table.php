<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBargainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bargains', function($table){
            $table->increments('bargain_id');

            $table->integer('flat_id')->unsigned();
//            $table->foreign('flat_id')->references('flat_id')->on('flats');

//            $table->integer('owner_id')->unsigned();
//            $table->foreign('owner_id')->references('owner_id')->on('owners');

            $table->integer('client_id')->unsigned();
//            $table->foreign('client_id')->references('client_id')->on('clients');

            $table->integer('manager_id')->unsigned();
//            $table->foreign('manager_id')->references('manager_id')->on('managers');

            $table->date('coming_date')->nullable();

            $table->integer('day_count')->nullable();

            $table->string('status_bargain', 50)->default('Заявка');

            $table->integer('bank_account_num')->nullable();

            $table->text('note')->nullable();

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
        Schema::drop('bargains');
	}

}

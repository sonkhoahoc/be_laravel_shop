<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDa5CustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('da5_customer', function (Blueprint $table) {
            $table->id();       
            $table->integer("id_user")->unsigned()->nullable();
            $table->integer("order_id")->unsigned()->nullable();
            $table->string("name",100)->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("sex",5)->nullable();
            $table->integer("number_phone")->unsigned()->nullable();
            $table->string("email",100)->nullable();
            $table->string("adress",100)->nullable();
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
        Schema::dropIfExists('customer');
    }
}

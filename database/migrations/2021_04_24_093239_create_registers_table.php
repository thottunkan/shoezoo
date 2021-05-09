<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            
            $table->bigIncrements('reg_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('login_id');
            $table->unsignedBigInteger('addr_id');
            $table->timestamps();
            $table->foreign('login_id')->references('id')->on('logins')->onDelete('cascade');
            $table->foreign('addr_id')->references('id')->on('addresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}

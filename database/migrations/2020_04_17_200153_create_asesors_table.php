<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','30')->required();
            $table->string('dni','10')->required()->unique();
            $table->string('tel','10')->required();
            $table->date('date')->required();
            $table->string('gen','10')->required();
            $table->string('client','50')->required();
            $table->string('sede' , ' 20')->required();
            $table->string('age' , '3')->required();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asesors');
    }
}

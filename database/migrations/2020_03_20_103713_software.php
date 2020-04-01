<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Software extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwares', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->decimal("version");
            $table->string("type");
            $table->dateTime("dateStart");
            $table->dateTime("dateFinish");
            $table->decimal("cost");
            $table->decimal("URL")->nullable();
            $table->boolean('develop');
            $table->unsignedBigInteger('user_id'); $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('software');
    }

}

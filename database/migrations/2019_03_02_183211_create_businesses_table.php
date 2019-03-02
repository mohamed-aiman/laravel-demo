<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable  extends Migration
{

    public function up()
    {
        Schema::create('businesses', function(Blueprint $table){
            $table->increments('id');
            $table->string('name')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('businesses');
    }


}
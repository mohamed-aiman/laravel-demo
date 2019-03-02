<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{

    public function up()
    {
        Schema::create('documents', function(Blueprint $table){
            $table->increments('id');
            $table->string('path')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }


}
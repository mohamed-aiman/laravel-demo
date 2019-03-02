<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpendingsTable extends Migration
{

    public function up()
    {
        Schema::create('spendings', function(Blueprint $table){
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->double('amount')->nullable();
            $table->datetime('spent_at');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('business_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('spendings');
    }


}
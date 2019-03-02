<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpendingTagTable extends Migration
{

    public function up()
    {
        Schema::create('spending_tag', function(Blueprint $table){
            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('spending_id');
            $table->timestamps();

            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('spending_id')->references('id')->on('spendings');
        });
    }

    public function down()
    {
        Schema::dropIfExists('spending_tag');
    }


}
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentSpendingTable extends Migration
{

    public function up()
    {
        Schema::create('document_spending', function(Blueprint $table){
            $table->unsignedInteger('spending_id');
            $table->unsignedInteger('document_id');
            $table->timestamps();

            $table->foreign('spending_id')->references('id')->on('spendings');
            $table->foreign('document_id')->references('id')->on('documents');
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_spending');
    }


}
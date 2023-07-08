<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyerQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('question_id')->unique();
            $table->unsignedInteger('product_id');
            $table->text('question');
            $table->text('answer')->nullable();
            $table->text('answer2')->nullable();
            $table->unsignedInteger('asked_by');
            $table->boolean('is_read')->default(0);
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
        Schema::dropIfExists('buyer_questions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('budget');
            $table->(my_role);
            $table->(collaborator_role);
            $table->integer('page');
            $table->integer('book_size');
            $table->(file_format);
            $table->(desired_color_impression);
            $table->(desired_content_impression);
            $table->(file_attachment);
            $table->(application_deadline);
            $table->(deadline);
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
        Schema::dropIfExists('requests');
    }
};

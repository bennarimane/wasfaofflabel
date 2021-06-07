<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('age');
            $table->integer('poids');
            $table->string('unite');
            $table->unsignedBigInteger('pathologie_id');
            $table->foreign('pathologie_id')->references('id')->on('pathologies')->onDelete('cascade');
             $table->unsignedBigInteger('indication_id');
            $table->foreign('indication_id')->references('id')->on('indications')->onDelete('cascade');
            $table->longText('description');
            $table->text('tags');
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
        Schema::dropIfExists('posts');
    }
}
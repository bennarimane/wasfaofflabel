<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('age');
            $table->integer('poids');
            $table->string('unite');
            $table->integer('quantite');
            $table->integer('duré');
            $table->boolean('matin');
            $table->boolean('midi');
            $table->boolean('soir');
            $table->boolean('avant_coucher');
            $table->boolean('avant_v');
            $table->boolean('apres_v');
            $table->string('type');
            $table->integer('etat');
            $table->text('descr');
            $table->unsignedBigInteger('medicament_id');
            $table->foreign('medicament_id')->references('id')->on('medicaments')->onDelete('cascade');
            $table->unsignedBigInteger('classification_id');
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');
            $table->unsignedBigInteger('pathologie_id');
            $table->foreign('pathologie_id')->references('id')->on('pathologies')->onDelete('cascade');
             $table->unsignedBigInteger('indication_id');
            $table->foreign('indication_id')->references('id')->on('indications')->onDelete('cascade');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('prescriptions');
    }
}

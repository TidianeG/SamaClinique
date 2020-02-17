<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('substance');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('statut');
            $table->string('type');
            $table->string('manifestation');
            $table->string('severite');
            $table->string('commentaire');
            $table->string('resultat');
            $table->string('desensibilisation');
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
        Schema::dropIfExists('allergies');
    }
}

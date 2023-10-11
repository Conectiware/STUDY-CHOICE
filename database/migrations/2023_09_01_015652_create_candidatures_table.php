<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('naissance');
            $table->string('email');
            $table->string('tel');
            $table->string('genre');
            $table->string('document');
            $table->string('num_doc');
            $table->string('direction')->nullable();
            $table->string('pays_del');
            $table->string('date_del');
            $table->string('date_exp');
            $table->string('residence');
            $table->string('adresse');
            $table->string('province')->nullable();
            $table->string('bp')->nullable();
            $table->string('pere')->nullable();
            $table->string('mere')->nullable();
            $table->string('prof_pere')->nullable();
            $table->string('prof_mere')->nullable();
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
        Schema::dropIfExists('candidatures');
    }
}

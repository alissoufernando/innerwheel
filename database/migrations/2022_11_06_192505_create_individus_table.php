<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individus', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('poste')->nullable();
            $table->foreignId('poste_id')->nullable()->constrained('postes')->onUpdate('cascade')->onDelete('cascade');
            $table->string('adresse');
            $table->string('email');
            $table->string('tel');
            $table->string('pays')->nullable();
            $table->string('club')->nullable();
            $table->foreignId('club_id')->nullable()->constrained('clubs')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('isDelete')->default(0);
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
        Schema::dropIfExists('individus');
    }
}

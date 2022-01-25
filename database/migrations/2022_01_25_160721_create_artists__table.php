<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists_', function (Blueprint $table) {
            $table->id();
            $table->integer('artist_id');
            // nome band o nome d'arte
            $table->string('name');
            $table->integer('monthly_plays');
            $table->string('description');
            $table->date('tour_dates');
            $table->string('merch');
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
        Schema::dropIfExists('artists_');
    }
}

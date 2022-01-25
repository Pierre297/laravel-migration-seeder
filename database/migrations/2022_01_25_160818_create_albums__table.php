<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums_', function (Blueprint $table) {
            $table->id();
            $table->integer('album_id');
            $table->string('album_name');
            $table->date('released_date');
            $table->string('contract');
            $table->string('license');
            $table->string('song');
            $table->string('artist');
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
        Schema::dropIfExists('albums_');
    }
}

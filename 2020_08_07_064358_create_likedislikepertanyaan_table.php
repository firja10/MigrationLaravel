<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikedislikepertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likedislikepertanyaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBitInteger('pertanyaan_id'); 
            $table->unsignedBitInteger('profile_namalengkap');
            $table->integer('point_INT');
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
        Schema::dropIfExists('likedislikepertanyaan');
    }
}

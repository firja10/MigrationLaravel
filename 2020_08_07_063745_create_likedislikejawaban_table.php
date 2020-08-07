<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikedislikejawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likedislikejawaban', function (Blueprint $table) {
            $table->id();
            $table->unsignedBitInteger('jawaban_isi');
            $table->unsignedBitInteger('jawaban_profile_namalengkap');
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
        Schema::dropIfExists('likedislikejawaban');
    }
}

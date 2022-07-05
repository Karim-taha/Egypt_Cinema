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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('att_id');
            $table->foreign("att_id")
                ->references('id')
                ->on('attendees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('m_id');
            $table->foreign("m_id")
                ->references('id')
                ->on('movies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('eventday_id');
            $table->foreign("eventday_id")
                ->references('id')
                ->on('eventdays')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('showtim_id');
            $table->foreign("showtim_id")
                ->references('id')
                ->on('showtimes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tickets');
    }
};

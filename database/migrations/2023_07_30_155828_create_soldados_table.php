<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soldados', function (Blueprint $table) {
            $table->id();
            $table->string('nom_s');
            $table->string('apell_s');
            $table->integer('grado_S');
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();


            $table->foreign('servicio_id')
            ->references('id')
            ->on('servicios')->onDelete('set null');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('set null');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldados');
    }
};

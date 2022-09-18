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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id');
            $table->unsignedBigInteger('service_id');
            $table->string('name');
            $table->float('price');
            $table->string('quality')->nullable();
            $table->string('start')->nullable();
            $table->string('speed')->nullable();
            $table->string('write_offs')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('max')->nullable();
            $table->string('peculiarities')->nullable();
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
        Schema::dropIfExists('services');
    }
};

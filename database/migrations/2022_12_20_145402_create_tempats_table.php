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
        Schema::create('tempats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->nullable();
            $table->string('name');
            $table->string('desc');
            $table->string('alamat');
            $table->integer('harga');
            $table->float('rating');
            $table->string('img');
            $table->string('telp');
            $table->string('gmaps');
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
        Schema::dropIfExists('tempats');
    }
};

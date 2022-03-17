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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('emri');
            $table->string('kodi')->unique();
            $table->string('img_slug')->unique();
            $table->double('cmimi');
            $table->unsignedBigInteger('kategoria_id');
            $table->string('sasia');
            $table->timestamps();

            $table->foreign('kategoria_id')->references('id')->on('kategori')->onDelete('cascade');
            $table->index(['id','kodi']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

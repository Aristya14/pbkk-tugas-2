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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            // $table->foreignId('user_name');
            $table->string('title');
            $table->string('slug')->unique();
            // $table->string('author');
            $table->text('body');
            $table->string('excerpt');// untuk menampilkan text singkat di list artikel
            $table->timestamp('published_at')->nullable();//nullable artinya tidak wajib diisi
            $table->timestamps(); //untuk menyimpan record", penting untuk keperluan audit
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};

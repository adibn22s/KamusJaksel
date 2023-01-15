<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
            ->index('fk_materi_to_users'); 
            $table->string('judul')->nullable();
            $table->string('kategori')->nullable();
            $table->longtext('isi_materi')->nullable();
            $table->string('contoh1')->nullable();
            $table->longtext('isi_contoh1')->nullable();
            $table->string('contoh2')->nullable();
            $table->longtext('isi_contoh2')->nullable();
            $table->longtext('video')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materi');
    }
}

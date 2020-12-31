<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Artikelanjing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
			'artikel_anjings',
			function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->unsignedBigInteger('user_id');
                $table->string('judul');
                $table->string('author');
                $table->string('gambar')->nullable();
                $table->longtext('konten');
				$table->timestamps();

				$table->foreign('user_id')->references('id')->on('users');
			}
		);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikelanjing');
    }
}

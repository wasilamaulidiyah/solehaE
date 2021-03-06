<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kulit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
			'gangguan_kulits',
			function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->unsignedBigInteger('user_id');
				$table->string('soal1');
                $table->string('soal2');
                $table->string('soal3');
                $table->string('soal4');
                $table->string('soal5');
                $table->string('soal6');
                $table->longText('feedback');
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
        Schema::dropIfExists('kulit');
    }
}

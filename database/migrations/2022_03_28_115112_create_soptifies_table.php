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
        Schema::create('soptifies', function (Blueprint $table) {
            $table->id();
            $table->String('JudulLagu');
            $table->String('PenciptaLagu');
            $table->longtext('Lirik');
            $table->String('Lagu');
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
        Schema::dropIfExists('soptifies');
    }
};
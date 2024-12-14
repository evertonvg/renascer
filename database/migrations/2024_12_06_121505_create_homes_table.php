<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Definindo o campo 'title'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('homes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class CreateIncidentsTable extends Migration {

    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->dateTime('reported_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('status')->default('Open');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('incidents');
    }
}




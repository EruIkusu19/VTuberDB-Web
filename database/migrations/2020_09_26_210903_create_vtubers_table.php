<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVtubersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vtubers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('alias');
            $table->string('status');
            $table->string('agency');
            $table->string('description');
            $table->string('channel_url');
            $table->string('channel_name');
            $table->date('debut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vtubers');
    }
}

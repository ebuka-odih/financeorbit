<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStakedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakeds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('staking_id');
            $table->bigInteger('user_id');
            $table->decimal('amount');
            $table->integer('status')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stakeds');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('amount',11, 2);
            $table->decimal('roi',11, 2);
            $table->string('name');
            $table->string('hash_al')->nullable(); // hash algorithm
            $table->string('hash_rate')->nullable();
            $table->integer('interval')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minings');
    }
}

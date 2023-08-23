<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_trades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('copy_traders_id');
            $table->bigInteger('user_id');
            $table->decimal('amount', 11, 2)->nullable();
            $table->decimal('roi', 11, 2)->nullable();
            $table->string('roi_pec')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copy_trades');
    }
}

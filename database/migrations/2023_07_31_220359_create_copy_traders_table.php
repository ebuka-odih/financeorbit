<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_traders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pro_image')->nullable();
            $table->string('username');
            $table->string('accuracy')->nullable();
            $table->string('won_trades')->nullable();
            $table->string('lost_trades')->nullable();
            $table->string('total_pec')->nullable();
            $table->integer('pro_trade')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copy_traders');
    }
}

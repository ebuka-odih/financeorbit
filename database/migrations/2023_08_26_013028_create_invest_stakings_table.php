<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestStakingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invest_stakings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('staking_id');
            $table->bigInteger('user_id');
            $table->integer('status')->default(0);
            $table->decimal('amount', 11, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invest_stakings');
    }
}

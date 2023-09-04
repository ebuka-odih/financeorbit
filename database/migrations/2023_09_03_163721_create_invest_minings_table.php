<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestMiningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invest_minings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('user_id');
            $table->bigInteger('mining_id');
            $table->decimal('amount', 11, 2);
            $table->decimal('roi', 11, 2)->nullable();
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invest_minings');
    }
}

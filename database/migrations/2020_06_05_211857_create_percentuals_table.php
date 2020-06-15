<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePercentualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percentages', function (Blueprint $table) {
            $table->increments('id');

            $table->text('name');
            $table->float('farmer')->nullable();
            $table->float('plataform')->nullable();
            $table->float('separation')->nullable();
            $table->float('fund')->nullable();
            $table->float('bags')->nullable();
            $table->float('payment_online')->nullable();
            $table->float('accounting_close')->nullable();
            $table->float('marketing')->nullable();
            $table->float('administration')->nullable();
            $table->float('seeller')->nullable();
            $table->float('pickup_location')->nullable();
            $table->float('logistic')->nullable();
            $table->float('client_contact')->nullable();

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
        Schema::dropIfExists('percentages');
    }
}

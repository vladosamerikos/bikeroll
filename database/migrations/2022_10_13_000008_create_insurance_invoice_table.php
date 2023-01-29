<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_invoice', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('insurance_id');
            $table->foreign('insurance_id')->references('id')->on('insurances');

            $table->unsignedInteger('runner_id');
            $table->foreign('runner_id')->references('id')->on('runners');

            $table->integer('number_races');
            $table->float('total');
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
        Schema::dropIfExists('insurance_invoice');
    }
}

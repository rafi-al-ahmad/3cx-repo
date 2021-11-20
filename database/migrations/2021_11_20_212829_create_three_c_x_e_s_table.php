<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreeCXESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('three_c_x_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('historyid')->nullable();
            $table->string('callid')->nullable();
            $table->string('duration')->nullable();
            $table->string('time-start')->nullable();
            $table->string('time-answered')->nullable();
            $table->string('time-end')->nullable();
            $table->string('reason-terminated')->nullable();
            $table->string('from-no')->nullable();
            $table->string('to-no')->nullable();
            $table->string('from-dn')->nullable();
            $table->string('to-dn')->nullable();
            $table->string('dial-no')->nullable();
            $table->string('reason-changed')->nullable();
            $table->string('final-number')->nullable();
            $table->string('final-dn')->nullable();
            $table->string('bill-code')->nullable();
            $table->string('bill-rate')->nullable();
            $table->string('bill-cost')->nullable();
            $table->string('bill-name')->nullable();
            $table->text('chain')->nullable();
            $table->string('from-type')->nullable();
            $table->string('to-type')->nullable();
            $table->string('final-type')->nullable();
            $table->string('from-dispname')->nullable();
            $table->string('to-dispname')->nullable();
            $table->string('final-dispname')->nullable();
            $table->string('missed-queue-calls')->nullable();
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
        Schema::dropIfExists('three_c_x_e_s');
    }
}




























<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_for_quotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('purchase_request_id')->nullable();
            $table->string('request_for_quotation_no')->nullable();
            $table->string('mode_of_procurement')->nullable();
            $table->unsignedBigInteger('spo_id')->nullable();
            $table->unsignedBigInteger('bac_id')->nullable();
            $table->string('spo_status')->nullable()->comment('1 = Approve and 2 = Disapprove');
            $table->string('bac_status')->nullable()->comment('1 = Approve and 2 = Disapprove');
            $table->integer('print_status')->max(2)->nullable()->comment('1 = Done Print');
            $table->integer('canvassing_status')->max(2)->nullable()->comment('1 = Done Canvas');
            $table->integer('cancel_status')->max(2)->nullable();
            $table->longText('remarks')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('spo_id')->references('id')->on('users');
            $table->foreign('bac_id')->references('id')->on('users');
            $table->foreign('purchase_request_id')->references('id')->on('purchase_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_for_quotations');
    }
};

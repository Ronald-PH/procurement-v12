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
        Schema::create('abstract_of_quotation_suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aoq_id')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->string('company')->nullable();
            $table->string('address')->nullable();
            $table->string('unit_cost')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();

            $table->foreign('aoq_id')->references('id')->on('abstract_of_quotations');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abstract_of_quotation_suppliers');
    }
};

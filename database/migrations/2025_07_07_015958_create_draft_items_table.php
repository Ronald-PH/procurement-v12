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
        Schema::create('draft_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('draft_purchase_request_id');
            $table->string('stock')->nullable();
            $table->string('unit')->nullable();
            $table->string('item_description');
            $table->string('quantity')->nullable();
            $table->string('unit_cost')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('draft_purchase_request_id')->references('id')->on('draft_purchase_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('draft_items');
    }
};

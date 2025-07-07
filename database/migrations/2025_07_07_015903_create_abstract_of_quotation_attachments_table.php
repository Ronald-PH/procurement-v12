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
        Schema::create('abstract_of_quotation_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aoq_id')->nullable();
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->string('path')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();

            $table->foreign('aoq_id')->references('id')->on('abstract_of_quotations');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abstract_of_quotation_attachments');
    }
};

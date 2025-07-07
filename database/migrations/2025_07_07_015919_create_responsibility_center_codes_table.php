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
        Schema::create('responsibility_center_codes', function (Blueprint $table) {
            $table->id();
            $table->string('responsibility_center_code')->nullable();
            $table->string('abbreviation')->nullable();
            $table->string('description')->nullable();
            $table->string('pap')->nullable();
            $table->string('fund_cluster')->nullable();
            $table->integer('status')->max(2)->default(0); // 0 = Disabled | 1 = Enabled
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
        Schema::dropIfExists('responsibility_center_codes');
    }
};

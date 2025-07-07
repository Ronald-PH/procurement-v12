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
        Schema::create('draft_purchase_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('office')->nullable();
            $table->string('rc_code')->nullable();
            $table->string('fund_cluster')->nullable();
            $table->longText('purpose')->nullable();
            $table->longText('description')->nullable();
            $table->string('purchase_request_date')->nullable();
            $table->string('submitted')->default(0)->comment('0 = Not yet submit | 1 = Submitted and turn to Approval'); // 0 = Not yet submit | 1 = Submitted and turn to Approval
            $table->unsignedBigInteger('requested_id')->nullable()->default(0);
            $table->unsignedBigInteger('supply_id')->nullable()->default(0);
            $table->unsignedBigInteger('recommending_id')->nullable()->default(0);
            $table->unsignedBigInteger('approval_id')->nullable()->default(0);
            $table->string('requested_designation')->nullable();
            $table->string('recommending_designation')->nullable();
            $table->string('approval_designation')->nullable();
            $table->integer('total_items')->max(2)->nullable();
            $table->string('purchase_remarks')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('requested_id')->references('id')->on('users');
            $table->foreign('supply_id')->references('id')->on('users');
            $table->foreign('recommending_id')->references('id')->on('users');
            $table->foreign('approval_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('draft_purchase_requests');
    }
};

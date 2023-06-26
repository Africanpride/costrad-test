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
        Schema::create('donations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('amount', 10, 2)->nullable();
            $table->decimal('fees')->nullable();
            $table->string('donor_name')->nullable();
            $table->string('donor_email')->nullable();
            $table->string('ip_address')->nullable();
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('donations');
    }
};

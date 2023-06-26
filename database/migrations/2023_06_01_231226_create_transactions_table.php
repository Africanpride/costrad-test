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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('amount', 10, 2);
            $table->string('authorization_code');
            $table->text('description');
            $table->decimal('fees', 10, 2);
            $table->string('reference');
            $table->timestamp('transaction_date');
            $table->string('currency');
            $table->foreignUuid('participant_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('institute_id')->constrained('institutes')->onDelete('cascade');
            $table->string('ipAddress');
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
        Schema::dropIfExists('transactions');
    }
};

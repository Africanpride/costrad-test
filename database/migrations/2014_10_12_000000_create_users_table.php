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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avatar')->nullable();
            $table->string('social_avatar')->nullable();
            $table->string('password')->nullable();
            $table->boolean('staff')->default(false);
            $table->boolean('facultyMember')->default(false);
            $table->boolean('participant')->default(true);
            $table->boolean('must_create_password')->default(false);
            $table->boolean('active')->default(true);
            $table->boolean('ban')->default(false);
            $table->rememberToken();
            $table->string('google_id')->nullable();
            $table->string('apple_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsrooms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('overview')->nullable();
            $table->longText('body');
            $table->string('featured_image')->nullable();
            $table->unsignedBigInteger('like')->default(0);
            $table->boolean('active')->default(true);
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('category_id')->onDelete('cascade')->default(1);
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
        Schema::dropIfExists('newsrooms');
    }
}

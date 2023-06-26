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
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('acronym');
            $table->text('overview')->nullable();
            $table->text('about')->nullable();
            $table->text('introduction')->nullable();
            $table->string('icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->date('startDate');
            $table->date('endDate');
            $table->string('seo')->nullable();
            $table->boolean('active')->nullable()->default(false);
            $table->string('slug')->nullable();
            $table->decimal('price', 8, 2);
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
        Schema::dropIfExists('institutes');
    }
};

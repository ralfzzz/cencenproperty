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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->string('sell_rent');
            $table->string('property_type');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('address');
            $table->string('size_type');
            $table->double('size');
            $table->integer('bedroom');
            $table->integer('additional_bedroom');
            $table->integer('bathroom');
            $table->string('furniture_electronics');
            $table->text('facility');
            $table->text('located_near');
            $table->integer('price');
            $table->text('image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};

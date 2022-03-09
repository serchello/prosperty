<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->json('amenities');
            $table->integer('bathrooms');
            $table->integer('bedrooms');
            $table->mediumText('description');
            $table->integer('floor')->default(0);
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('postal_code');
            $table->decimal('price', 13, 4);
            $table->float('size');
            $table->string('street');
            $table->string('street_number');
            $table->string('title');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
                  ->references('id')
                  ->on('types')
                  ->onDelete('cascade');

            $table->timestamp('available_from')->nullable();
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
        Schema::dropIfExists('listings');
    }
}

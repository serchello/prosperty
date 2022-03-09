<?php

use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateTypesTable extends Migration
{
    protected $types = [
        'Apartment',
        'Detached House',
        'Maisonette',
        'Parking space',
        'Residential Complex',
        'Storage unit',
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        collect($this->types)->each(function ($type) {
            Type::create([
                'name' => $type,
                'slug' => Str::slug($type),
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
